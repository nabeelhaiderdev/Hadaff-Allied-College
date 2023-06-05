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

// echo '<pre>';
// print_r($block_fields);
// echo '</pre>';
$pgc_blk_chairman_title = ( isset( $block_fields['pgc_blk_chairman_title'] ) ) ? $block_fields['pgc_blk_chairman_title'] : null;
$pgc_blk_chairman_description = ( isset( $block_fields['pgc_blk_chairman_description'] ) ) ? $block_fields['pgc_blk_chairman_description'] : null;
$pgc_blk_chairman_sign = ( isset( $block_fields['pgc_blk_chairman_sign'] ) ) ? $block_fields['pgc_blk_chairman_sign'] : null;
$pgc_blk_chairman_name = ( isset( $block_fields['pgc_blk_chairman_name'] ) ) ? $block_fields['pgc_blk_chairman_name'] : null;
$pgc_blk_chairman_desgination = ( isset( $block_fields['pgc_blk_chairman_desgination'] ) ) ? $block_fields['pgc_blk_chairman_desgination'] : null;
$pgc_blk_chairman_image = ( isset( $block_fields['pgc_blk_chairman_image'] ) ) ? $block_fields['pgc_blk_chairman_image'] : null;



?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">

			<!-- Intro Block -->
			<section class="section intro-block">
				<div class="container">
					<div class="row-block">
						<div class="col-block-7">
							<div class="text-holder">
								<h3><?php echo $pgc_blk_chairman_title; ?></h3>
								<p><?php echo html_entity_decode($pgc_blk_chairman_description); ?></p>
								<div class="signature-img">
									<img src="<?php echo $pgc_blk_chairman_sign; ?>" width="192" height="81" alt="">
								</div>
								<div class="chairman-info">
									<h3><?php echo $pgc_blk_chairman_name; ?></h3>
									<span class="text"><?php echo $pgc_blk_chairman_desgination; ?></span>
								</div>
							</div>
						</div>
						<div class="col-block-5">
							<div class="images-block">
								<img src="<?php echo $pgc_blk_chairman_image; ?>" alt="CHAIRMAN’S VISION" width="416" height="497">
							</div>
						</div>
					</div>
				</div>
			</section>
		

</div>
