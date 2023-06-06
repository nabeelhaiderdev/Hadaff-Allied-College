<?php
/**
 * Block Name: Text
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

$hadaff_blk_txt_title        = $block_fields['hadaff_blk_txt_title'];
$hadaff_blk_txt_subtitle = ( isset( $block_fields['hadaff_blk_txt_subtitle'] ) ) ? $block_fields['hadaff_blk_txt_subtitle'] : null;
$hadaff_blk_txt_text         = html_entity_decode( $block_fields['hadaff_blk_txt_text'] );
$hadaff_blk_txt_select_design        = $block_fields['hadaff_blk_txt_select_design'];

?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name . ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">
<?php if($hadaff_blk_txt_select_design == "center") {?>
	<article class="intro-block">``
				<div class="container">
					<div class="head">
						<?php if ( $hadaff_blk_txt_title ) { ?>
							<h2><?php echo $hadaff_blk_txt_title; ?></h2>
						<?php } ?>
		
						<?php if ( $hadaff_blk_txt_subtitle ) { ?>
							<p><?php echo $hadaff_blk_txt_subtitle; ?></p>
						<?php } ?>
						
					</div>
					<div class="textbox">
						<?php if ( $hadaff_blk_txt_text ) { ?>
							<?php echo $hadaff_blk_txt_text; ?>
						<?php } ?>
					</div>
				</div>
			</article>
<?php } else {?>
	<div class="container">
		<div class="text-block">
			<?php if ( $hadaff_blk_txt_title ) { ?>
								<h2><?php echo $hadaff_blk_txt_title; ?></h2>
							<?php } ?>
							<?php if ( $hadaff_blk_txt_text ) { ?>
								<?php echo $hadaff_blk_txt_text; ?>
							<?php } ?>
						</div>
	</div>
<?php } ?>
</div>