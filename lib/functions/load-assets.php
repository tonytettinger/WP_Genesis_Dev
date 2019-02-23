<?php

/**
 * Asset loader handler.
 * 
 * @package antal\Toniquez
 * @since 1.0.0
 * @author Antal
 * @license GNU General Public License 2.0+
 * 
 */

 namespace antal\Toniquez;


add_action( 'wp_enqueue_scripts', __NAMESPACE . '\enqueue_assets' );
function enqueue_assets() {

	wp_enqueue_style( CHILD_TEXT_DOMAIN . '-fonts', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700', array(), CHILD_THEME_VERSION );
	wp_enqueue_style( 'dashicons' );

	wp_enqueue_script( CHILD_TEXT_DOMAIN . '-responsive-menu', CHILD_URL . '/js/responsive-menu.js', array( 'jquery' ), CHILD_THEME_VERSION, true );
	$localized_script_args = array(
		'mainMenu' => __( 'Menu', CHILD_TEXT_DOMAIN ),
		'subMenu'  => __( 'Menu', CHILD_TEXT_DOMAIN ),
	);
	wp_localize_script( CHILD_TEXT_DOMAIN . '-responsive-menu', 'toniquezL10n', $output );

}