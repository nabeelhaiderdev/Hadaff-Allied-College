<?php

/**
 * Block Name: Key Features
 *
 * The template for displaying the custom gutenberg block named Key Features.
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package Hadaff Allied
 * @since 1.0.0
 */

// Get all the fields from ACF for this block ID
// $block_fields = get_fields( $block['id'] );
$block_fields = get_fields_escaped($block['id']);
// $block_fields = get_fields_escaped( $block['id'] ,'sanitize_text_field' ); // if want to remove all html

// Set the block name for it's ID & class from it's file name
$block_glide_name = $block['name'];
$block_glide_name = str_replace("acf/", "", $block_glide_name);

// Set the preview thumbnail for this block for gutenberg editor view.
if (isset($block['data']['preview_image_help'])) {    /* rendering in inserter preview  */
	echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
}

// create align class ("alignwide") from block setting ("wide").
$align_class = $block['align'] ? 'align' . $block['align'] : '';

// Get the class name for the block to be used for it.
$class_name = (isset($block['className'])) ? $block['className'] : null;

// Making the unique ID for the block.
$id = 'block-' . $block_glide_name . "-" . $block['id'];

// Making the unique ID for the block.
if ($block['name']) {
	$block_name = $block['name'];
	$block_name = str_replace("/", "-", $block_name);
	$name = 'block-' .  $block_name;
}

// Block variables
// $custom_field_of_block = html_entity_decode($block_fields['custom_field_of_block']); // for keeping html from input
// $custom_field_of_block = html_entity_remove($block_fields['custom_field_of_block']); // for removing html from input

// echo '<pre>';
// print_r($block_fields);
// echo '</pre>';

$hdfall_blk_cu_title = (isset($block_fields['hdfall_blk_cu_title'])) ? $block_fields['hdfall_blk_cu_title'] : null;
$hdfall_blk_cu_address = (isset($block_fields['hdfall_blk_cu_address'])) ? $block_fields['hdfall_blk_cu_address'] : null;
$hdfall_blk_cu_tel = (isset($block_fields['hdfall_blk_cu_tel'])) ? $block_fields['hdfall_blk_cu_tel'] : null;
$hdfall_blk_cu_email = (isset($block_fields['hdfall_blk_cu_email'])) ? $block_fields['hdfall_blk_cu_email'] : null;
$hdfall_blk_cu_map = (isset($block_fields['hdfall_blk_cu_map'])) ? $block_fields['hdfall_blk_cu_map'] : null;

?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name . ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">
	<!-- Contact Block -->
	<section class="contact-block">
		<div class="container">
			<div class="contactinfo-column">
				<h3><?php echo $hdfall_blk_cu_title; ?></h3>
				<ul class="contact-information">
					<?php if($hdfall_blk_cu_address){ ?>
					<li>
						<div class="text-wrap">
							<strong class="title">Address</strong>
							<div class="textbox">
								<address><?php echo $hdfall_blk_cu_address; ?></address>
							</div>
						</div>
					</li>
					<?php } ?>
					<?php if($hdfall_blk_cu_tel){ ?>
					<li>
						<div class="text-wrap">
							<strong class="title">Telephone</strong>
							<div class="textbox">
								
								<span class="text"><a href="tel:<?php echo preg_replace( '/[^0-9]/', '', $hdfall_blk_cu_tel ); ?>"><strong><?php echo $hdfall_blk_cu_tel; ?></strong></a></span>
							</div> 
						</div>
					</li>
					<?php } ?>
					<?php if($hdfall_blk_cu_email){ ?>
					<li>
						<div class="text-wrap">
							<strong class="title">E-mail</strong>
							<div class="textbox">
								<span class="text email"><a href="mailto:<?php echo $hdfall_blk_cu_email; ?>"><?php  echo $hdfall_blk_cu_email; ?></a></span>
							</div>
						</div>
					</li>
					<?php } ?>
					<li>
						<div class="text-wrap">
							<strong class="title">Social</strong>
							<div class="textbox">
								<ul class="social-networks">
									<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#" target="_blank"><i class="fab fa-youtube"></i></a></li>
									<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="map-block">
				<!-- https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3308.8598364912164!2d71.47798757629516!3d33.97044192204411!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38d9176421320319%3A0x6b6e78173d0e44ab!2sHadaf%20Colleges!5e0!3m2!1sen!2s!4v1685686083349!5m2!1sen!2s" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade -->
				<?php if($hdfall_blk_cu_map){echo html_entity_decode($hdfall_blk_cu_map);}?>">
			</div>
		</div>
	</section>

</div>
