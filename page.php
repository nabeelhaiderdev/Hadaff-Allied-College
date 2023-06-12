<?php
/**
 * The template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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

$hadaff_spbop_title = ( isset( $fields['hadaff_spbop_title'] ) ) ? $fields['hadaff_spbop_title'] : null;
// $hdfall_pagetitle = (isset($fields['hdfall_pagetitle'])) ? $fields['hdfall_pagetitle'] : null;
// if(!$hdfall_pagetitle){
// 	$hdfall_pagetitle = get_the_title();
// }
$hdfall_pagetitle = glide_page_title('step_spbop_title');
?>
<!-- Hero Start -->
<!-- Visual Block -->
			<section class="visual-block sub-visual">
				<div class="image-shape">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/banner-shape-inner.png" alt="Admission Open 2023">
				</div>
				<div class="container">
					<div class="textbox">
						<div class="text-holder">
							<?php if($hadaff_spbop_title) {?>
							<h1><?php echo html_entity_decode($hadaff_spbop_title); ?></h1>
							<?php } else {?>
							<h1><?php the_title(); ?></h1>
							<?php }?>
							<ul class="breadcrumbs">
								<?php my_breadcrumbs(); ?>
							</ul>
						</div>
					</div>
				</div>
			</section>
<!-- Hero End -->

<section id="page-section" class="page-section">
	<!-- Content Start -->
	<div class="programmes-content">
		<div class="container">
		<?php while ( have_posts() ) { the_post();
			//Include specific template for the content.
			get_template_part( 'partials/content', 'page' );

		} ?>
		</div>
	</div>
	<div class="clear"></div>
	<div class="ts-80" style="height:80px"></div>

	<!-- Content End -->
</section>

<?php get_footer(); ?>
