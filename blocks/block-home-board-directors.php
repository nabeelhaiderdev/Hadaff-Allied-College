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
$pgc_blk_home_directors_title = ( isset( $block_fields['pgc_blk_home_directors_title'] ) ) ? $block_fields['pgc_blk_home_directors_title'] : null;
$pgc_blk_home_board_of_directors = ( isset( $block_fields['pgc_blk_home_board_of_directors'] ) ) ? $block_fields['pgc_blk_home_board_of_directors'] : null;







?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">

<!-- Section Directors -->
<section class="section section-directors">
				<div class="container container-large">
					<div class="features-frame">
						<div class="header-text">
							<h2><?php echo $pgc_blk_home_directors_title;?></h2>
						</div>
						<div class="content-frame">
							<div class="board-members">
							<?php
					foreach($pgc_blk_home_board_of_directors as $rows){
						$pgc_blk_directors_img = ( isset( $rows['pgc_blk_directors_img'] ) ) ? $rows['pgc_blk_directors_img'] : null;
						$pgc_blk_directors_title = ( isset( $rows['pgc_blk_directors_title'] ) ) ? $rows['pgc_blk_directors_title'] : null;
						$pgc_blk_directors_desgination = ( isset( $rows['pgc_blk_directors_desgination'] ) ) ? $rows['pgc_blk_directors_desgination'] : null;
						$pgc_blk_directors_company = ( isset( $rows['pgc_blk_directors_company'] ) ) ? $rows['pgc_blk_directors_company'] : null;
						

						?>	
								<div class="item-member">
								
								<div class="videos-selection">
							
									<div class="member-holder">
										<img src="<?php echo $pgc_blk_directors_img;?>" alt="">
										<div class="caption">
											<h5><?php echo $pgc_blk_directors_title;?></h5>
											<span class="text"><?php echo $pgc_blk_directors_desgination;?></span>
											<span class="subtext"><?php echo $pgc_blk_directors_company;?></span>
										</div>
										
									</div>
									</div>
									</div>
									<?php
					}
					?>
								
							
						</div>
					</div>
				</div>
			</section>
</div>
