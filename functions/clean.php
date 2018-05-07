<?php

//Use this file to clean up wp admin dashboard ============



// admin part cleanups //
add_action('admin_menu', 'delete_menu_items'); // deleting menu items from admin area
add_action('admin_menu','remove_dashboard_widgets'); // remove some dashboard widgets
add_action('login_head', 'my_custom_login_logo'); //Add custom logo to admin


//Clean up Dashboard
function remove_dashboard_widgets(){

    //remove_meta_box('dashboard_right_now','dashboard','core'); // right now overview box
    //remove_meta_box('dashboard_incoming_links','dashboard','core'); // incoming links box
    //remove_meta_box('dashboard_quick_press','dashboard','core'); // quick press box
    //remove_meta_box('dashboard_plugins','dashboard','core'); // new plugins box
    //remove_meta_box('dashboard_recent_drafts','dashboard','core'); // recent drafts box
    //remove_meta_box('dashboard_recent_comments','dashboard','core'); // recent comments box
    //remove_meta_box('dashboard_primary','dashboard','core'); // wordpress development blog box
    //remove_meta_box('dashboard_secondary','dashboard','core'); // other wordpress news box
}

// Remove menus froms the admin area
function delete_menu_items() {

    /*** Remove menu http://codex.wordpress.org/Function_Reference/remove_menu_page
    syntaxe : remove_menu_page( $menu_slug )  **/
    //remove_menu_page('index.php'); // Dashboard
    remove_menu_page('edit.php'); // Posts
    //remove_menu_page('upload.php'); // Media
    remove_menu_page('link-manager.php'); // Links
    //remove_menu_page('edit.php?post_type=page'); // Pages
    remove_menu_page('edit-comments.php'); // Comments
    //remove_menu_page('themes.php'); // Appearance
    //remove_menu_page('plugins.php'); // Plugins
    //remove_menu_page('users.php'); // Users
    //remove_menu_page('tools.php'); // Tools
    //remove_menu_page('options-general.php'); // Settings
}

//Security and header clean-ups
remove_action( 'wp_head', 'wlwmanifest_link');
remove_action( 'wp_head', 'rsd_link');
remove_action( 'wp_head', 'index_rel_link' ); // index link
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // prev link
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); // start link
remove_action( 'wp_head', 'wp_generator'); // remove WP version from header
remove_action( 'wp_head','wp_shortlink_wp_head');

//disable code editors
add_theme_support('html5');
add_theme_support('automatic-feed-links');


?>
