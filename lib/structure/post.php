<?php

/**
 * Post HTML markup structure
 * 
 * @package antal\Toniquez
 * @since 1.0.0
 * @author Antal
 * @license GNU General Public License 2.0+
 * 
 */

 namespace antal\Toniquez;
 

 //modify the size of the Gravatar in the author box
add_filter( 'genesis_author_box_gravatar_size', __NAMESPACE__ . '\genesis_sample_author_box_gravatar_size' );

function genesis_sample_author_box_gravatar_size( $size ) {

	return 90;

}