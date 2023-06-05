<?php
/**
 * The template for displaying website footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hadaff Allied
 * @since 1.0.0
 */
// Global variables
global $option_fields;
global $pID;
global $fields;

$pID = get_the_ID();

if ( is_home() ) {
	$pID = get_option( 'page_for_posts' );
}

if ( is_404() || is_archive() || is_category() || is_search() ) {
	$pID = get_option( 'page_on_front' );
}

if ( function_exists( 'get_fields' ) && function_exists( 'get_fields_escaped' ) ) {
	$option_fields = get_fields_escaped( 'option' );
	$fields        = get_fields_escaped( $pID );
}
?> <?php

// Default Footer Options

$footer_scripts = ( isset( $option_fields['footer_scripts'] ) ) ? $option_fields['footer_scripts'] : null;



// Schema Markup - ACF variables.


$hdfall_schema_check = isset($option_fields['hdfall_schema_check']) ? $option_fields['hdfall_schema_check']:null;
if ( $hdfall_schema_check ) {
	$hdfall_schema_business_name       = html_entity_remove( $option_fields['hdfall_schema_business_name'] );
	$hdfall_schema_business_legal_name = html_entity_remove( $option_fields['hdfall_schema_business_legal_name'] );
	$hdfall_schema_street_address      = html_entity_remove( $option_fields['hdfall_schema_street_address'] );
	$hdfall_schema_locality            = html_entity_remove( $option_fields['hdfall_schema_locality'] );
	$hdfall_schema_region              = html_entity_remove( $option_fields['hdfall_schema_region'] );
	$hdfall_schema_postal_code         = html_entity_remove( $option_fields['hdfall_schema_postal_code'] );
	$hdfall_schema_map_short_link      = html_entity_remove( $option_fields['hdfall_schema_map_short_link'] );
	$hdfall_schema_latitude            = html_entity_remove( $option_fields['hdfall_schema_latitude'] );
	$hdfall_schema_longitude           = html_entity_remove( $option_fields['hdfall_schema_longitude'] );
	$hdfall_schema_opening_hours       = html_entity_remove( $option_fields['hdfall_schema_opening_hours'] );
	$hdfall_schema_telephone           = html_entity_remove( $option_fields['hdfall_schema_telephone'] );
	$hdfall_schema_business_email      = html_entity_remove( $option_fields['hdfall_schema_business_email'] );
	$hdfall_schema_business_logo       = html_entity_remove( $option_fields['hdfall_schema_business_logo'] );
	$hdfall_schema_price_range         = html_entity_remove( $option_fields['hdfall_schema_price_range'] );
	$hdfall_schema_type                = html_entity_remove( $option_fields['hdfall_schema_type'] );
}
// Custom - ACF variables.

// $hdfall_ftrop_title     = ( isset( $option_fields['hdfall_ftrop_title'] ) ) ? $option_fields['hdfall_ftrop_title'] : null;
// $hdfall_ftrop_text      = isset($option_fields['hdfall_ftrop_text']) ? html_entity_decode( $option_fields['hdfall_ftrop_text'] ):null;
// $hdfall_ftrop_copyright = isset($option_fields['hdfall_ftrop_copyright']) ? html_entity_decode( $option_fields['hdfall_ftrop_copyright'] ):null;
$pgc_social_fb       = ( isset( $option_fields['pgc_social_fb'] ) ) ? $option_fields['pgc_social_fb'] : null;
$pgc_social_li       = ( isset( $option_fields['pgc_social_li'] ) ) ? $option_fields['pgc_social_li'] : null;

$pgc_to_ftr_title = ( isset( $option_fields['pgc_to_ftr_title'] ) ) ? $option_fields['pgc_to_ftr_title'] : null;
$pgc_to_ftr_contact = ( isset( $option_fields['pgc_to_ftr_contact'] ) ) ? $option_fields['pgc_to_ftr_contact'] : null;
$pgc_to_ftr_address = ( isset( $option_fields['pgc_to_ftr_address'] ) ) ? $option_fields['pgc_to_ftr_address'] : null;
$pgc_to_ftr_copyright = ( isset( $option_fields['pgc_to_ftr_copyright'] ) ) ? $option_fields['pgc_to_ftr_copyright'] : null;

?>
<?php get_template_part( 'partials/cta' ); ?> </main>
<footer id="footer-section" class="footer-section footer">

	<!-- Footer of the Page -->
	<footer class="footer">
		<div class="pri-footer">
			<div class="container">
				<strong class="logo">
					<a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.png"
							width="206" height="107" alt="Hadaf Colleges of Allied Health Sciences"></a>
				</strong>
				<ul class="additional-info">
					<li>
						<strong class="title">Email</strong>
						<a href="mailto:info@hadaf.edu.pk" class="text">info@hadaf.edu.pk</a>
					</li>
					<li>
						<strong class="title">Contact Us</strong>
						<span class="text"><a class="text" href="tel:03101185910">03101185910</a></span>
					</li>
				</ul>
			</div>
		</div>
		<div class="sec-footer">
			<div class="container">
				<div class="theme-info">
					<div class="textbox">
						<strong class="title">Address</strong>
						<p>Hayatabad Ring Road, Achini Chowk, Peshawar.</p>
					</div>
					<ul class="social-networks">
						<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#" target="_blank"><i class="fab fa-youtube"></i></a></li>
						<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
						<li><a href="#" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
					</ul>
				</div>
				<div class="columns-holder">
					<div class="social-column">
						<strong class="title">Social Media</strong>
						<ul class="social-links">
							<li><a href="#" target="_blank">Facebook</a></li>
							<li><a href="#" target="_blank">Instagram</a></li>
							<li><a href="#" target="_blank">Twitter</a></li>
							<li><a href="#" target="_blank">Youtube</a></li>
						</ul>
					</div>
					<div class="usefull-links">
						<strong class="title">Useful Links</strong>
						<div class="links-wrap">
							<ul>
								<li><a href="vision-mission.html">Vision & Mission</a></li>
								<li><a href="chairman-message.html">Chairman Message</a></li>
								<li><a href="#">Programmes</a></li>
								<li><a href="contact.html">Contact Us</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-copyrights">
			<div class="container">
				<p>© Copyright 2023 Hadaf Colleges - All right reserved.</p>
			</div>
		</div>
	</footer>
	</div>
	<!-- Footer End -->
	<?php
	if ( $hdfall_schema_check ) {
		?>
	<script type="application/ld+json">
	{
		"@context": "http://schema.org",
		"@type": "<?php echo $hdfall_schema_type; ?>",
		"address": {
			"@type": "PostalAddress",
			"addressLocality": "<?php echo $hdfall_schema_locality; ?>",
			"addressRegion": "<?php echo $hdfall_schema_region; ?>",
			"postalCode": "<?php echo $hdfall_schema_postal_code; ?>",
			"streetAddress": "<?php echo $hdfall_schema_street_address; ?>"
		},
		"hasMap": "<?php echo $hdfall_schema_map_short_link; ?>",
		"geo": {
			"@type": "GeoCoordinates",
			"latitude": "<?php echo $hdfall_schema_latitude; ?>",
			"longitude": "<?php echo $hdfall_schema_longitude; ?>"
		},
		"name": "<?php echo $hdfall_schema_business_name; ?>",
		"openingHours": "<?php echo $hdfall_schema_opening_hours; ?>",
		"telephone": "<?php echo $hdfall_schema_telephone; ?>",
		"email": "<?php echo $hdfall_schema_business_email; ?>",
		"url": "<?php echo esc_url( home_url() ); ?>",
		"image": "<?php echo $hdfall_schema_business_logo; ?>",
		"legalName": "<?php echo $hdfall_schema_business_legal_name; ?>",
		"priceRange": "<?php echo $hdfall_schema_price_range; ?>"
	}
	</script> <?php } ?>
</footer> <?php wp_footer(); ?> <?php
if ( $footer_scripts != '' ) {
	?>
<div style="display: none;">
	<?php echo html_entity_decode( $footer_scripts, ENT_QUOTES ); ?> </div> <?php } ?> </body>

</html>
