<?php
function cptui_register_my_cpts() {

	/**
	 * Post Type: Training Sessions.
	 */

	$labels = array(
		"name" => __( "Training Sessions", "twentyseventeen" ),
		"singular_name" => __( "Training Session", "twentyseventeen" ),
		"menu_name" => __( "T. Sessions", "twentyseventeen" ),
	);

	$args = array(
		"label" => __( "Training Sessions", "twentyseventeen" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "training_session", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "training_session", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
