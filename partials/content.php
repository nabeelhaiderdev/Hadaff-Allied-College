<?php

/**
 * Template part for displaying the_content() function
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hadaff Allied
 * @since 1.0.0
*/

the_content(
	sprintf(
		wp_kses(
		/* translators: %s: Name of current post. Only visible to screen readers */
			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'hdfall_td' ),
			array(
				'span' => array(
					'class' => array(),
				),
			)
		),
		get_the_title()
	)
);
wp_link_pages(
	array(
		'before' => '<div class="page-links">' . __( 'Pages:', 'hdfall_td' ),
		'after'  => '</div>',
	)
);