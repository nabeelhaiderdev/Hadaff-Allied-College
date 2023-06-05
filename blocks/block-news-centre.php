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
$pgc_blk_news_title = ( isset( $block_fields['pgc_blk_news_title'] ) ) ? $block_fields['pgc_blk_news_title'] : null;
$pgc_blk_news_description = ( isset( $block_fields['pgc_blk_news_description'] ) ) ? $block_fields['pgc_blk_news_description'] : null;
$pgc_blk_news_button = ( isset( $block_fields['pgc_blk_news_button'] ) ) ? $block_fields['pgc_blk_news_button'] : null;
$pgc_blk_news_img = ( isset( $block_fields['pgc_blk_news_img'] ) ) ? $block_fields['pgc_blk_news_img'] : null;


?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">

<!-- Section Features -->
<section class="section section-features">
				<div class="container container-large">
					<div class="features-frame">
						<div class="header-text">
							<h2><?php echo $pgc_blk_news_title;?></h2>
							<?php echo html_entity_decode($pgc_blk_news_description); ?>
							<div class="btn-block">
								<a href="<?php echo $pgc_blk_news_button;?>" class="btn btn-primary btn-sm">View all</a>
							</div>
						</div>
						<div class="content-frame">
						
							<div class="videos-selection">
							<?php
					foreach($pgc_blk_news_img as $rows){
						$pgc_blk_news_edu_video = ( isset( $rows['pgc_blk_news_edu_video'] ) ) ? $rows['pgc_blk_news_edu_video'] : null;
						$pgc_blk_duration_icon = ( isset( $rows['pgc_blk_duration_icon'] ) ) ? $rows['pgc_blk_duration_icon'] : null;
						$pgc_blk_duration_time = ( isset( $rows['pgc_blk_duration_time'] ) ) ? $rows['pgc_blk_duration_time'] : null;
						$pgc_blk_news_video_title = ( isset( $rows['pgc_blk_news_video_title'] ) ) ? $rows['pgc_blk_news_video_title'] : null;
						

						?>	
								<div class="item-video">
								
									<a href="#" class="video-frame">
										<img src="<?php echo $pgc_blk_news_edu_video;?>" alt="" width="610" height="363">
										<div class="text-top">
											<span class="video-duration"><img src="<?php echo $pgc_blk_duration_icon;?>" width="32"
													height="26" alt="" class="ico"><?php echo $pgc_blk_duration_time;?></span>
										</div>
										<div class="text-heading">
											<h3><?php echo $pgc_blk_news_video_title;?></h3>
										</div>
									</a>
									
								</div>
								<?php
					}
					?>
							</div>
						</div>
						
					</div>
				</div>
			</section>
</div>
