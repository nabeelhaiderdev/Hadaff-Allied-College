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
$pgc_blk_home_stats_title = ( isset( $block_fields['pgc_blk_home_stats_title'] ) ) ? $block_fields['pgc_blk_home_stats_title'] : null;
$pgc_blk_home_stats_details = ( isset( $block_fields['pgc_blk_home_stats_details'] ) ) ? $block_fields['pgc_blk_home_stats_details'] : null;



?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">

<!-- Section Stats -->
<section class="section section-stats">
				<div class="container">
					<header class="section-head">
						<h2><?php echo $pgc_blk_home_stats_title;?></h2>
					</header>
					<ul class="stats-list">
					<?php
					foreach($pgc_blk_home_stats_details as $rows){
						$home_stats_primary_title = ( isset( $rows['home_stats_primary_title'] ) ) ? $rows['home_stats_primary_title'] : null;
						$home_stats_detail_secondary_title = ( isset( $rows['home_stats_detail_secondary_title'] ) ) ? $rows['home_stats_detail_secondary_title'] : null;
						$home_stats_detail_description = ( isset( $rows['home_stats_detail_description'] ) ) ? $rows['home_stats_detail_description'] : null;
						

						?>
						<li>
							<strong class="title"><?php echo $rows['home_stats_primary_title'];?><span><?php echo $rows['home_stats_detail_secondary_title'];?></span></strong>
							<?php echo html_entity_decode($rows['home_stats_detail_description']); ?>
						</li>
						<?php
					}
					?>
					</ul>
				</div>
			</section>
</div>
