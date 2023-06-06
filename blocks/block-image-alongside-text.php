<?php
/**
 * Block Name: Image Alongside Text
 *
 * The template for displaying the custom gutenberg block named Image Alongside Text.
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package Hadaff Allied
 * @since 1.0.0
 */


// Get all the fields from ACF for this block ID

$block_fields = get_fields_escaped( $block['id'] );
// $block_fields = get_fields_escaped( $block['id'] ,'sanitize_text_field' ); // if want to remove all html


// Set the block name for it's ID & class from it's file name
$block_glide_name = $block['name'];
$block_glide_name = str_replace( 'acf/', '', $block_glide_name );

// Set the preview thumbnail for this block for gutenberg editor view.
if ( isset( $block['data']['preview_image_help'] ) ) {    /* rendering in inserter preview  */
	echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
}

// create align class ("alignwide") from block setting ("wide").
$align_class = $block['align'] ? 'align' . $block['align'] : '';

// Get the class name for the block to be used for it.
$class_name = ( isset( $block['className'] ) ) ? $block['className'] : null;

// Making the unique ID for the block.
$id = 'block-' . $block_glide_name . '-' . $block['id'];

// Making the unique ID for the block.
if ( $block['name'] ) {
	$block_name = $block['name'];
	$block_name = str_replace( '/', '-', $block_name );
	$name       = 'block-' . $block_name;
}

// Block variables

$hdfall_iat_title        = $block_fields['hdfall_iat_title'];
$hdfall_iat_kicker        = $block_fields['hdfall_iat_kicker'];
$hdfall_iat_text         = html_entity_decode( $block_fields['hdfall_iat_text'] );
$hdfall_iat_image        = $block_fields['hdfall_iat_image'];
$hdfall_iat_bot_title        = $block_fields['hdfall_iat_bot_title'];
$hdfall_iat_bot_subtitle        = $block_fields['hdfall_iat_bot_subtitle'];

?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name . ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">

	<article class="chairman-block">
				<div class="container">
					<div class="image-holder">
						<?php if ($hdfall_iat_image) { ?>
							<img src="<?php echo $hdfall_iat_image; ?>" alt="<?php echo $hdfall_iat_title; ?>">
						<?php } ?>
					</div>
					<div class="textbox">
						<?php if ( $hdfall_iat_kicker ) { ?>
							<span class="subtitle"><?php echo $hdfall_iat_kicker; ?></span>
						<?php } ?>
						<?php if ( $hdfall_iat_title ) { ?>
							<h2><?php echo $hdfall_iat_title; ?></h2>
						<?php } ?>
						<?php if ( $hdfall_iat_text ) { ?>
							<?php echo $hdfall_iat_text; ?>
						<?php } ?>
						<strong class="h3 name"><?php echo $hdfall_iat_bot_title ; ?>, <span><?php echo $hdfall_iat_bot_subtitle; ?></span></strong>
					</div>
				</div>
			</article>
</div>
