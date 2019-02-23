<?php

/**
 * Comments HTML markup structure
 * 
 * @package antal\Toniquez
 * @since 1.0.0
 * @author Antal
 * @license GNU General Public License 2.0+
 * 
 */

 namespace antal\Toniquez;

 add_filter( 'genesis_comment_list_args', __NAMESPACE__ . '\setup_comments_gravatar' );

 function setup_comments_gravatar( array $args ) {

	$args['avatar_size'] = 60;

	return $args;

}