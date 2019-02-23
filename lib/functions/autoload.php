<?php

/**
 * Description
 * 
 * @package antal\Toniquez\Functions
 * @since 1.0.0
 * @author Antal
 * @license GNU General Public License 2.0+
 * 
 */

 namespace antal\Toniquez\Functions;
 
 //* Setup Theme
include_once( get_stylesheet_directory() . '/lib/theme-defaults.php' );

//* Add Image upload and Color select to WordPress Theme Customizer
require_once( get_stylesheet_directory() . '/lib/customize.php' );

//* Include Customizer CSS
include_once( get_stylesheet_directory() . '/lib/output.php' );