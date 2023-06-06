<?php
/**
 * Template Name: Homepage
 * Template Post Type: page
 *
 * This template is for displaying home page.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package Hadaff Allied
 * @since 1.0.0
 *
 */

// Include header
get_header();

// Global variables
global $option_fields;
global $pID;
global $fields;

// echo '<pre>';
// print_r($fields);
// echo '</pre>';

$hadaff_hp_title = ( isset( $fields['hadaff_hp_title'] ) ) ? $fields['hadaff_hp_title'] : null;
$hadaff_hp_sub_title = ( isset( $fields['hadaff_hp_sub_title'] ) ) ? $fields['hadaff_hp_sub_title'] : null;
$hadaff_hp_description = ( isset( $fields['hadaff_hp_description'] ) ) ? $fields['hadaff_hp_description'] : null;
$hadaff_hp_button = ( isset( $fields['hadaff_hp_button'] ) ) ? $fields['hadaff_hp_button'] : null;




?> <!-- Hero Start -->

<!-- <section id="hero-section" class="hero-section">
	
	<div class="hero-single">
		<div class="wrapper">
			<h1><?php echo $hdfall_pagetitle; ?></h1>
		</div>
	</div>
	
</section> -->
<!-- Hero End -->
<!-- Visual Section -->
<section class="visual-block">
				<div class="image-shape">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/banner-shape.png" alt="Admission Open 2023">
				</div>
				<div class="container">
					<div class="textbox">
						<div class="text-holder">
							<h1><?php echo html_entity_decode($hadaff_hp_title); ?></h1>
							<p><?php echo $hadaff_hp_sub_title; ?></p>
							<div class="degree-info">
							<?php echo  html_entity_decode($hadaff_hp_description); ?>	
						</div>
							<?php
								if( $hadaff_hp_button ) :
									echo glide_acf_button( $hadaff_hp_button, 'btn btn-secondary' );
								endif;
							?>
						</div>
					</div>
					<div class="image-holder">
						<div class="image-wrap">
							<?php if (has_post_thumbnail()) {
								the_post_thumbnail('full');
							} else { ?>
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/image-visual.png" alt="Admission Open 2023">
							<?php }?>
						</div>
					</div>
			</section>
<section id="page-section" class="page-section">
	<!-- Content Start --> <?php while ( have_posts() ) { the_post();
		//Include specific template for the content.
		get_template_part( 'partials/content', 'page' );

	} ?> <div class="clear"></div>
	<div class="ts-80"></div>
	<!-- Content End -->
</section> <?php get_footer(); ?>
