<?php

//Add all custom functions, hooks, filters, ajax etc here

include('functions/start.php');

include('functions/clean.php');

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

}

//Custon wp-admin logo
function my_custom_login_logo() {
  echo '<style type="text/css">
		        h1 a {
		          background-size: 227px 85px !important;
		          margin-bottom: 20px !important;
		          background-image:url('.get_bloginfo('template_directory').'/images/logo.png) !important; }
		    </style>';
}

//Instagram
function getInstagram(){
    //Get Likes
    $user  = get_field('instagram_user_id', 'option');
    $token = get_field('instagram_access_token', 'option');
    $json = file_get_contents("https://api.instagram.com/v1/users/$user/media/recent?access_token=$token");
    $obj = json_decode($json);
    return $obj->data;
}

?>
