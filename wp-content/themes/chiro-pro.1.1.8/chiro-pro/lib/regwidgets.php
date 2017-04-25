<?php
function chiropro_sidebars(){
	register_sidebar(array(
		'name' => __('Main Sidebar' , 'chiro-pro'),
		'id' => 'sidebar1',
		'description' => __('This is the main sidebar' , 'chiro-pro'),
		'before_widget' => '<aside class="widget %1$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
		)
	);	
	register_sidebar(array(
		'name' => __('Footer 1' , 'chiro-pro'),
		'id' => 'footer1',
		'description' => __('This is the left footer widget' , 'chiro-pro'),
		'before_widget' => '<div class="widget %1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
		)
	);	
	register_sidebar(array(
		'name' => __('Footer 2' , 'chiro-pro'),
		'id' => 'footer2',
		'description' => __('This is the left middle footer widget' , 'chiro-pro'),
		'before_widget' => '<div class="widget %1$s">',
		'after_widget' => '</div>',		
		'before_title' => '<h4>',
		'after_title' => '</h4>'
		)
	);
	register_sidebar(array(
		'name' => __('Footer 3' , 'chiro-pro'),
		'id' => 'footer3',
		'description' => __('This is the right middle footer widget' , 'chiro-pro'),
		'before_widget' => '<div class="widget %1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
		)
	);	
	register_sidebar(array(
		'name' => __('Footer 4' , 'chiro-pro'),
		'id' => 'footer4',
		'description' => __('This is the right footer widget' , 'chiro-pro'),
		'before_widget' => '<div class="widget %1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
		)
	);	
	register_sidebar(array(
		'name' => __('About Sidebar' , 'chiro-pro'),
		'id' => 'aboutbar',
		'description' => __('This is the About sidebar. You need to first create a custom menu in the Menu area (Appearance --> Menus). After that, come back here and add a custom menu widget here, then assign the menu you just creaeted to that widget. Whatever pages you add to that custom menu will then show in your About side-bar.' , 'chiro-pro'),
		'before_widget' => '<div class="widget %1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
		)
	);
	register_sidebar(array(
		'name' => __('Appointment Sidebar' , 'chiro-pro'),
		'id' => 'appointmentbar',
		'description' => __('This is the Appointment sidebar. You need to use a plugin such as FS Contact Form (Fast Secure Contact Form). Add a text widget here, and then put the contact form shortcode in the text widget.' , 'chiro-pro'),
		'before_widget' => '<div class="widget %1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
		)
	);	
	register_sidebar(array(
		'name' => __('New Patient Sidebar' , 'chiro-pro'),
		'id' => 'newpatientbar',
		'description' => __('This is the New Patient sidebar. You need to first create a custom menu in the Menu area (Appearance --> Menus). After that, come back here and add a custom menu widget here, then assign the menu you just creaeted to that widget. Whatever pages you add to that custom menu will then show in your New Patient side-bar.' , 'chiro-pro'),
		'before_widget' => '<div class="widget %1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
		)
	);
	register_sidebar(array(
		'name' => __('Custom Sidebar 1' , 'chiro-pro'),
		'id' => 'custom1',
		'description' => __('Some people like to have more than one sidebar, so they can have different widgets on different pages of their sites. Whatever you place in this sidebar will show on pages assigned to the Custom Sidebar Template' , 'chiro-pro'),
		'before_widget' => '<div class="widget %1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
		)
	);
}
add_action( 'widgets_init', 'chiropro_sidebars' );