<?php
/**
 * Returns Post ID if post by title is found
 * Where post_type of post provided custom post type
 *
 * @param $title        title of the post to check existance
 * @param $post_type    post type of the post to check against
 *
 * @return int Post ID or 0 if no post does not exists
 */
function function_post_exists_title_cpt( $title, $cpt ) {
	global $wpdb;
	
	$query = "SELECT ID FROM $wpdb->posts WHERE 1=1";
	$args = array();

	if ( ! empty ( $title ) ) {
		$query .= ' AND post_title = %s';
		$args[] = $title;
	}
	
	if ( ! empty ( $cpt ) ) {
		$query .= ' AND post_type = %s';
		$args[] = $cpt;
	}
	
	if ( ! empty ( $args ) )
		return (int) $wpdb->get_var( $wpdb->prepare($query, $args) );
	
	return 0;
}