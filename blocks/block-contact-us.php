<?php
/**
 * Block Name: Contact US
 *
 * The template for displaying the custom gutenberg block named Contact US.
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package Hadaff Allied
 * @since 1.0.0
 */

// Get all the fields from ACF for this block ID
// $block_fields = get_fields( $block['id'] );
$block_fields = get_fields_escaped( $block['id'] );
// $block_fields = get_fields_escaped( $block['id'] ,'sanitize_text_field' ); // if want to remove all html

// Set the block name for it's ID & class from it's file name
$block_glide_name = $block['name'];
$block_glide_name = str_replace("acf/" , "" , $block_glide_name);

// Set the preview thumbnail for this block for gutenberg editor view.
if( isset( $block['data']['preview_image_help'] )  ) {    /* rendering in inserter preview  */
	echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';
}

// create align class ("alignwide") from block setting ("wide").
$align_class = $block['align'] ? 'align' . $block['align'] : '';

// Get the class name for the block to be used for it.
$class_name = (isset($block['className'])) ? $block['className'] : null;

// Making the unique ID for the block.
$id = 'block-' .$block_glide_name . "-" . $block['id'];

// Making the unique ID for the block.
if($block['name']){
	$block_name = $block['name'];
	$block_name = str_replace("/" , "-" , $block_name);
	$name = 'block-' .  $block_name;
}

// Block variables
// $custom_field_of_block = html_entity_decode($block_fields['custom_field_of_block']); // for keeping html from input
// $custom_field_of_block = html_entity_remove($block_fields['custom_field_of_block']); // for removing html from input

//echo '<pre>';
//print_r($block_fields);
//echo '</pre>';
$pgc_blk_cup = ( isset( $block_fields['pgc_blk_cup'] ) ) ? $block_fields['pgc_blk_cup'] : null;
$pgc_blk_cuf = ( isset( $block_fields['pgc_blk_cuf'] ) ) ? $block_fields['pgc_blk_cuf'] : null;
$pgc_blk_cue = ( isset( $block_fields['pgc_blk_cue'] ) ) ? $block_fields['pgc_blk_cue'] : null;
$pgc_blk_cuh = ( isset( $block_fields['pgc_blk_cuh'] ) ) ? $block_fields['pgc_blk_cuh'] : null;
$pgc_blk_cua = ( isset( $block_fields['pgc_blk_cua'] ) ) ? $block_fields['pgc_blk_cua'] : null;
$pgc_blk_cum = ( isset( $block_fields['pgc_blk_cum'] ) ) ? $block_fields['pgc_blk_cum'] : null;



?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">

<!-- Section Features -->
			<!-- Section Two Cols -->
			<section class="section intro-block">
				<div class="container">
					<div class="row-block">
						<div class="col-block-5">
							<div class="text-holder">
								<div class="contact-box">
									<h3>Get In Touch</h3>
									<ul class="contact-info">
										<li>
											<a href="tel:<?php echo $pgc_blk_cup; ?>"><?php echo $pgc_blk_cup; ?></a>
										</li>
										<li>
											<?php echo $pgc_blk_cuf; ?>
										</li>
										<li>
											<a href="<?php echo $pgc_blk_cue ?>"><?php echo $pgc_blk_cue ?></a>
										</li>
									</ul>
								</div>
								<div class="contact-box">
									<h3>Helpline</h3>
									<ul class="contact-info">
										<li>
										<?php echo $pgc_blk_cuh; ?>
										</li>
									</ul>
								</div>
								<div class="contact-box">
									<h3>Address</h3>
									<ul class="contact-info">
										<li>
										<?php echo $pgc_blk_cua; ?>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-block-7">
							<div class="map-block">
							
								<iframe src="<?php echo $pgc_blk_cum; ?>"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							</div>
						</div>
					</div>
				</div>
			</section>
</div>
