<?php
define( 'TEMPPATH', get_bloginfo('stylesheet_directory'));  /*shortcut to root directory */
define( 'IMAGES', TEMPPATH. "/images");  /*shortcut to images root directory*/

/* register the nav menu */

register_nav_menus(array(
					'Main Menu' => 'Main') );
					
										
/* show me which template i am currently using */
function show_me_the_template()
{
    if (current_user_can( 'manage_options' )) {
        global $template, $wp_admin_bar;
        get_currentuserinfo();
        if ( is_admin_bar_showing() ) {
            $wp_admin_bar->add_menu( array(
                'parent' => false,
                'id' => 'template',
                'title' => $template,
                'href' => '#'
            ));
        }
    }
}
/* End template showing function */

add_action( 'wp_head', 'show_me_the_template');

// Register Custom Post Type
function my_work() {

	$labels = array(
		'name'                => _x( 'My Work', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'My Work', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'My Work', 'text_domain' ),
		'name_admin_bar'      => __( 'My Work', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'My Work', 'text_domain' ),
		'add_new_item'        => __( 'Add New work', 'text_domain' ),
		'add_new'             => __( 'Add New Work', 'text_domain' ),
		'new_item'            => __( 'New Work', 'text_domain' ),
		'edit_item'           => __( 'Edit Work', 'text_domain' ),
		'update_item'         => __( 'Update Work', 'text_domain' ),
		'view_item'           => __( 'View Work', 'text_domain' ),
		'search_items'        => __( 'Search Work', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'My_Work', 'text_domain' ),
		'description'         => __( 'My Work', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'page-attributes', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-clipboard',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'My_Work', $args );

}
// Hook into the 'init' action
add_action( 'init', 'my_work', 0 );

add_action( 'after_setup_theme', 'image_sizes' );
function image_sizes() {
  add_image_size( portfolioItem, 150, 150, false );
}
?>