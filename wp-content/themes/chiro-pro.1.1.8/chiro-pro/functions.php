<?php

if ( ! isset( $content_width ) ) {
	$content_width = 630; 
}

if ( ! function_exists( 'chiropro_setup' ) ) :
function chiropro_setup() {
	load_theme_textdomain( 'chiro-pro', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support('editor_style');

	// Register the Main Navigation Menu
	register_nav_menus( array(
		'mainnav' => __( 'Main Navigation', 'chiro-pro' ),
	) );
	
	//Switch default core markup for search form, comment form, and comments to output valid HTML5.
	 add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );
}
endif; // chiropro_setup
add_action( 'after_setup_theme', 'chiropro_setup' );

// Fallback menu called when user forgets to assign a menu to Main Navigation in menu settings
function chiropro_default_menu() {
    require (get_template_directory() . '/lib/default_menu.php' );
}

//Registers the sidebars and footers
require (get_template_directory() . '/lib/regwidgets.php');

//Load the customizer
require (get_template_directory() . '/lib/customizer.php');

//Display a custom title for the blog index
require (get_template_directory() . '/lib/custom_title.php');

//Suggest plugins for use by the theme
require (get_template_directory() . '/lib/suggested_plugins.php');

//Suggest Upgrade
require (get_template_directory() . '/upgrade/upgrade.php');

//Enque the stylesheets and scripts
require (get_template_directory() . '/lib/styles_and_scripts.php');