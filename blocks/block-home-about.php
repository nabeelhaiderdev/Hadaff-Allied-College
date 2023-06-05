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
$pgc_blk_home_about_title = ( isset( $block_fields['pgc_blk_home_about_title'] ) ) ? $block_fields['pgc_blk_home_about_title'] : null;
$pgc_blk_home_about_description = ( isset( $block_fields['pgc_blk_home_about_description'] ) ) ? $block_fields['pgc_blk_home_about_description'] : null;
$pgc_blk_home_about_imge1 = ( isset( $block_fields['pgc_blk_home_about_imge1'] ) ) ? $block_fields['pgc_blk_home_about_imge1'] : null;
$pgc_blk_home_about_image2 = ( isset( $block_fields['pgc_blk_home_about_image2'] ) ) ? $block_fields['pgc_blk_home_about_image2'] : null;
$pgc_blk_home_about_button = ( isset( $block_fields['pgc_blk_home_about_button'] ) ) ? $block_fields['pgc_blk_home_about_button'] : null;







?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">
<!-- Section About -->
<section class="section section-about">
				<div class="container">
					<div class="row-block">
						<div class="col-block-6 text-block">
							<div class="text-holder">
								<h2><?php echo html_entity_decode($pgc_blk_home_about_title); ?></h2>
								<?php echo html_entity_decode($pgc_blk_home_about_description); ?>
							</div>
						</div>
						<div class="col-block-6">
							<div class="images-block">
								<div class="img align-left has-overlay">
									<img src="<?php echo $pgc_blk_home_about_imge1; ?>" alt="" width="449" height="166">
								</div>
								<div class="img">
									<img src="<?php echo $pgc_blk_home_about_image2; ?>" alt="" width="460" height="330">
								</div>
							</div>
						</div>
					</div>
					<div class="btn-block">
						<a href="<?php echo $pgc_blk_home_about_button; ?>" class="btn btn-primary">Read More</a>
					</div>
				</div>
			</section>

</div>
