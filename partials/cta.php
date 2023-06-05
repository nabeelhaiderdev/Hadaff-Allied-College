<?php
/**
 * Template part for footer cta
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/
 *
 * @package Hadaff Allied
 * @since 1.0.0
 */

$hdfall_page_cta_pagevisibility = ( isset( $fields['hdfall_page_cta_pagevisibility'] ) ) ? $fields['hdfall_page_cta_pagevisibility'] : null;


 $hdfall_to_cta_headline = ( isset( $fields['hdfall_to_cta_headline'] ) ) ? $option_fields['hdfall_to_cta_headline'] : null;
$hdfall_ftrcta_headline  = ( isset( $fields['hdfall_page_cta_headline'] ) ) ? $fields['hdfall_page_cta_headline'] : $hdfall_to_cta_headline;
?>

<section id="cta-section" class="cta-section">
	<!-- cta Start -->
	<div class="cta-single">
		<div class="wrapper">
			<h4><?php echo $hdfall_ftrcta_headline; ?></h4>
		</div>
	</div>
	<!-- cta End -->
</section>
