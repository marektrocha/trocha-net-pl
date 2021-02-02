<?php

//  ======================= 1. STYLE AND JS ======================================================================

function load_stylesheets()
{
    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');


function include_jquery()
{
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.5.1.min.js', '', 1, true);
}
add_action('wp_enqueue_scripts', 'include_jquery');


function loadjs()
{
    wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
    wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'loadjs');


//  ======================= 2. MENU =========================================================================

add_theme_support('menus');

register_nav_menus(
    array(
        'top-menu' => __('Trocha (menu górne)', 'theme'),
        'footer-menu' => __('Trocha (menu dolne)', 'theme'),
    )
);

//  ======================= 3. CUSTOM POST =================================================================

// PORTFOLIO - SAMOCHODY
function portfolio() {

	$labels = array(
		'name'                  => _x( 'Portfolio', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Projekt', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Portfolio', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Wszystkie projekty', 'text_domain' ),
		'add_new_item'          => __( 'Dodaj projekt', 'text_domain' ),
		'add_new'               => __( 'Dodaj projekt', 'text_domain' ),
		'new_item'              => __( 'Nowy', 'text_domain' ),
		'edit_item'             => __( 'Edytuj', 'text_domain' ),
		'update_item'           => __( 'Zaktualizuj', 'text_domain' ),
		'view_item'             => __( 'Pokaż', 'text_domain' ),
		'view_items'            => __( 'Pokaż', 'text_domain' ),
		'search_items'          => __( 'Wyszukaj', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    
	$args = array(
		'label'                 => __( 'projekt', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats' ),
		'taxonomies'            => array( '', '' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 4,
		'menu_icon'             => 'http://trocha.net.pl/trocha/wordpress/wp-content/themes/marek-trocha/images/portfolio.png',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'show_in_rest' 			=> true,
		'capability_type'       => 'page',
	);
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'portfolio', 0 );


// TECHNOLOGIE - MECHANICY
function technologie() {

	$labels = array(
		'name'                  => _x( 'Technologie', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Technologia', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Technologie', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Wszystkie technologie', 'text_domain' ),
		'add_new_item'          => __( 'Dodaj technologię', 'text_domain' ),
		'add_new'               => __( 'Dodaj technologię', 'text_domain' ),
		'new_item'              => __( 'Nowa technologia', 'text_domain' ),
		'edit_item'             => __( 'Edytuj', 'text_domain' ),
		'update_item'           => __( 'Zaktualizuj', 'text_domain' ),
		'view_item'             => __( 'Pokaż', 'text_domain' ),
		'view_items'            => __( 'Pokaż', 'text_domain' ),
		'search_items'          => __( 'Wyszukaj', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	
	$args = array(
		'label'                 => __( 'technologia', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats' ),
		'taxonomies'            => array( '', '' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'http://trocha.net.pl/trocha/wordpress/wp-content/themes/marek-trocha/images/technology.png',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'technologie', $args );

}
add_action( 'init', 'technologie', 0 );