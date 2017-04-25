<?php

function chiro_pro_scripts() {
	
	//Main stylesheet
	
	wp_enqueue_style( 'chiropro-style', get_stylesheet_uri() );

	//Change main navigation to drop down box on small screens
	
	wp_enqueue_script( 'menu-dropdown', get_template_directory_uri() . '/js/menu-dropdown.js', array('jquery'), '20150422', true );	
	
	if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
}
add_action( 'wp_enqueue_scripts', 'chiro_pro_scripts' );

// Style for admin upgrade page
function chiro_pro_enqueue_style($hook) {
 
	if( $hook != 'appearance_page_premium') 
		return;
	wp_register_style( 'custom_admin_css', get_template_directory_uri() . '/upgrade/upgrade-page-style.css', false, '20151208' );
	wp_enqueue_style( 'custom_admin_css' );
}
add_action('admin_enqueue_scripts', 'chiro_pro_enqueue_style');

//Display upgrade notice on customizer page
 
function chiro_pro_upsell_notice() {

	// Enqueue the script
	wp_enqueue_script(
		'prefix-customizer-upsell',
		get_template_directory_uri() . '/js/upsell.js',
		array(), '1.0.0',
		true
	);

	// Localize the script
	wp_localize_script(
		'prefix-customizer-upsell',
		'prefixL10n',
		array(
			'prefixURL'	=> esc_url( '/wp-admin/themes.php?page=premium.php' ),
			'prefixLabel'	=> __( 'Premium Options', 'chiro-pro' ),
		)
	);

}
add_action( 'customize_controls_enqueue_scripts', 'chiro_pro_upsell_notice' );