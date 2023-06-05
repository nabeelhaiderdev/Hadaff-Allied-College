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
$pgc_blk_home_banner_title = ( isset( $block_fields['pgc_blk_home_banner_title'] ) ) ? $block_fields['pgc_blk_home_banner_title'] : null;
$pgc_blk_home_banner_description = ( isset( $block_fields['pgc_blk_home_banner_description'] ) ) ? $block_fields['pgc_blk_home_banner_description'] : null;
$pgc_blk_home_banner_button = ( isset( $block_fields['pgc_blk_home_banner_button'] ) ) ? $block_fields['pgc_blk_home_banner_button'] : null;
$pgc_blk_home_banner_image = ( isset( $block_fields['pgc_blk_home_banner_image'] ) ) ? $block_fields['pgc_blk_home_banner_image'] : null;




?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">

<!-- Visual Section -->
<section class="visual-section">
				<div class="bg-image"><img src="<?php echo $pgc_blk_home_banner_image; ?>" alt="A Legacy of Excellence"></div>
				<div class="container">
					<div class="textbox">
						<h1><?php echo $pgc_blk_home_banner_title; ?></h1>
						<p><?php echo $pgc_blk_home_banner_description; ?></p>
						<a href="<?php echo $pgc_blk_home_banner_button; ?>" class="btn btn-lg btn-white">Learn More</a>
					</div>
				</div>
			</section>
</div>
