<?php

/**
 * Menu HTML markup structure
 * 
 * @package antal\Toniquez
 * @since 1.0.0
 * @author Antal
 * @license GNU General Public License 2.0+
 * 
 */

 namespace antal\Toniquez;
 
 remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'genesis_footer', 'genesis_do_subnav', 5 );

//* Reduce the secondary navigation menu to one level depth
add_filter( 'wp_nav_menu_args', 'genesis_sample_secondary_menu_args' );
function genesis_sample_secondary_menu_args( array $args ) {

	if ( 'secondary' != $args['theme_location'] ) {
		return $args;
	}

	$args['depth'] = 1;

	return $args;

}