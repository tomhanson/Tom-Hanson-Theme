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

?>