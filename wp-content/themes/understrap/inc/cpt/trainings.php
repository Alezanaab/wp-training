<?php
function cptui_register_my_cpts_trainings() {

/**
 * Post Type: Trainings.
 */

$labels = array(
    "name" => __( "Trainings", "understrap" ),
    "singular_name" => __( "Training", "understrap" ),
);

$args = array(
    "label" => __( "Trainings", "understrap" ),
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
    "rewrite" => array( "slug" => "trainings", "with_front" => true ),
    "query_var" => true,
    "supports" => array( "title", "editor", "thumbnail" ),
);

register_post_type( "trainings", $args );
}

add_action( 'init', 'cptui_register_my_cpts_trainings' );
function cptui_register_my_taxes_training_types() {

	/**
	 * Taxonomy: Training Types.
	 */

	$labels = array(
		"name" => __( "Training Types", "understrap" ),
		"singular_name" => __( "Training Type", "understrap" ),
	);

	$args = array(
		"label" => __( "Training Types", "understrap" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'training_types', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "training_types",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		);
	register_taxonomy( "training_types", array( "training_session", "trainings" ), $args );
}
add_action( 'init', 'cptui_register_my_taxes_training_types' );
