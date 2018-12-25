<?php
/**
 * Plugin Name: AM Disable Gutenberg
 * Plugin URI: https://github.com/talentedaamer/wp-useful-functions/blob/master/disable-gutenberg.php
 * Description: WordPress 5.0 released with a new content editor, Gutenberg. This plugin disable it so that you can keep using the classic content editor.
 * Version: 1.0.1
 * Author: Aamer Shahzad
 * Author URI: http://wpthemecraft.com
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 2, as published by the
 * Free Software Foundation.  You may NOT assume that you can use any other
 * version of the GPL.
 *
 * This plugin, like WordPress, is licensed under the GPL. You can redistribute it and/or modify
 * it to make something cool, have fun, and share what you've learned with others.
 *
 * @package    AMDisableGutenberg
 * @since      1.0.1
 * @copyright  Copyright (c) 2019, Aamer Shahzad
 * @license    GPL-2.0 or Later.
 */
 
 // Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

// Disable gutenberg
add_filter( 'gutenberg_can_edit_post_type', '__return_false' );
add_filter( 'use_block_editor_for_post_type', '__return_false' );

// Disable "Try Gutenberg" panel
remove_action( 'try_gutenberg_panel', 'wp_try_gutenberg_panel' );

/**
 * Return whether the post can be edited in the block editor.
 *
 * @param int|WP_Post $post Post ID or WP_Post object.
 * @return bool Whether the post can be edited in the block editor.
 */
//add_filter( 'use_block_editor_for_post', 'am_use_block_editor_for_post_filter', 10, 2 );
//function am_use_block_editor_for_post_filter( $use_block_editor, $post ) {
//	$author = get_userdata( $post->post_author );
//	if ( 'pento' === $author->user_login ) {
//		return (bool) random_int( 0, 1 );
//	}
//
//	return $use_block_editor;
//}

/**
 * Return whether a post type is compatible with the block editor.
 *
 * The block editor depends on the REST API, and if the post type is not shown in the
 * REST API, then it won't work with the block editor.
 *
 * @param string $post_type The post type.
 * @return bool Whether the post type can be edited with the block editor.
 */
//add_filter( 'use_block_editor_for_post_type', 'am_use_block_editor_for_post_type_filter', 10, 2 );
//function am_use_block_editor_for_post_type_filter( $use_block_editor, $post_type ) {
//	if ( 'book' === $post_type ) {
//		return false;
//	}
//
//	return $use_block_editor;
//}
