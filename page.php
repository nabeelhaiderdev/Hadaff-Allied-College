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


// $hdfall_pagetitle = (isset($fields['hdfall_pagetitle'])) ? $fields['hdfall_pagetitle'] : null;
// if(!$hdfall_pagetitle){
// 	$hdfall_pagetitle = get_the_title();
// }
$hdfall_pagetitle = glide_page_title('step_spbop_title');
?>
<!-- Hero Start -->
<!-- Page Title Block -->
<section class="page-title-block">
	<div class="container">
		<h1><?php echo $hdfall_pagetitle; ?></h1>
		<?php output_breadcrumbs(); ?>
	</div>
</section>


<!-- Hero End -->

<section id="page-section" class="page-section">
	<!-- Content Start -->

	<?php while ( have_posts() ) { the_post();
		//Include specific template for the content.
		get_template_part( 'partials/content', 'page' );

	} ?>

	<div class="clear"></div>
	<div class="ts-80"></div>

	<!-- Content End -->
</section>

<?php get_footer(); ?>
