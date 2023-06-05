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

$pgc_blk_home_banner_title = ( isset( $fields['pgc_blk_home_banner_title'] ) ) ? $fields['pgc_blk_home_banner_title'] : null;
$pgc_blk_home_banner_description = ( isset( $fields['pgc_blk_home_banner_description'] ) ) ? $fields['pgc_blk_home_banner_description'] : null;
$pgc_blk_home_banner_button = ( isset( $fields['pgc_blk_home_banner_button'] ) ) ? $fields['pgc_blk_home_banner_button'] : null;
$pgc_blk_home_banner_image = ( isset( $fields['pgc_blk_home_banner_image'] ) ) ? $fields['pgc_blk_home_banner_image'] : null;




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
<section class="visual-section">
				<div class="bg-image"><img src="<?php echo $pgc_blk_home_banner_image; ?>" alt="A Legacy of Excellence"></div>
				<div class="container">
					<div class="textbox">
						<h1><?php echo $pgc_blk_home_banner_title; ?></h1>
						<p><?php echo html_entity_decode($pgc_blk_home_banner_description); ?></p>
						<a href="<?php echo $pgc_blk_home_banner_button; ?>" class="btn btn-lg btn-white">Learn More</a>
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
