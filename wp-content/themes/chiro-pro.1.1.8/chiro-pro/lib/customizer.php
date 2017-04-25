<?php

// This changes the background color of the entire site

add_action('customize_register', 'chiropro_global_changes');
function chiropro_global_changes($wp_customize){
	$wp_customize->add_section('global_changes', array(
		'title' => __('Background Colors' , 'chiro-pro'),
		'priority' => 122,
		)
	);
	$wp_customize->add_setting('background_setting', array(
		'default' => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'background_setting', array(
		'label' => __('Background Color' , 'chiro-pro'),
		'section' => 'global_changes',
		'settings' => 'background_setting',
		)
		)
	);
	
// Changes the color of the containter

	$wp_customize->add_setting('box_setting', array(
		'default' => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'box_setting' , array(
		'label' => __('Container Background Color' , 'chiro-pro'),
		'section' => 'global_changes',
		'settings' => 'box_setting',
		'sanitize_callback' => 'sanitize_hex_color',
		)
		)
	);
	
	// Changes the color of the sripe on single pages

	$wp_customize->add_setting('stripe_color', array(
		'default' => '#eeeeee',
		'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'stripe_color' , array(
		'label' => __( 'Stripe color (single pages)', 'chiro-pro'),
		'section' => 'global_changes',
		'settings' => 'stripe_color',
		)
		)
	);
	
	// Changes the color of the sripe border

	$wp_customize->add_setting('stripe_border', array(
		'default' => '#dddddd',
		'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'stripe_border' , array(
		'label' => __('Stripe border color' , 'chiro-pro'),
		'section' => 'global_changes',
		'settings' => 'stripe_border',
		)
		)
	);
	
	// Changes the color of the sripe text

	$wp_customize->add_setting('stripe_text_color', array(
		'default' => '#505050',
		'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'stripe_text_color' , array(
		'label' => __('Stripe text color' , 'chiro-pro'),
		'section' => 'global_changes',
		'settings' => 'stripe_text_color',
		)
		)
	);
	
	// Changes the color of the footer background

	$wp_customize->add_setting('foot_color', array(
		'default' => '#eeeeee',
		'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'foot_color' , array(
		'label' => __('Footer background color' , 'chiro-pro'),
		'section' => 'global_changes',
		'settings' => 'foot_color',
		)
		)
	);
}

// This allows the user to change the phone, email address, business address, etc.

add_action('customize_register', 'chiropro_theme_variables');
function chiropro_theme_variables($wp_customize){
	$wp_customize->add_section('theme_variables', array(
		'title' => __('Theme Variables' , 'chiro-pro'),
		'priority' => 124,
		)
	);
	$wp_customize->add_setting('phone', array(
		'default' => '555-555-5555',
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('phone', array(
		'label' => __('Phone for display' , 'chiro-pro'),
		'section' => 'theme_variables',
		'type' => 'text',
		'priority' => 1,
		)
	);
	$wp_customize->add_setting('phone_link', array(
		'default' => '5555555555',
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('phone_link', array(
		'label' => __('Phone link (NO dashes or parentheses)' , 'chiro-pro'),
		'section' => 'theme_variables',
		'type' => 'text',
		'priority' => 2,
		)
	);
	$wp_customize->add_setting('email', array(
		'default' => 'user@domain.com',
		'sanitize_callback' => 'sanitize_email',
		)
	);
	$wp_customize->add_control('email', array(
		'label' => __('Email address' , 'chiro-pro'),
		'section' => 'theme_variables',
		'type' => 'text',
		'priority' => 3,
		)
	);
	$wp_customize->add_setting('street', array(
		'default' => '500 Cherry St.',
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('street', array(
		'label' => __('Street' , 'chiro-pro'),
		'section' => 'theme_variables',
		'type' => 'text',
		'priority' => 4,
		)
	);
	$wp_customize->add_setting('city_state_zip', array(
		'default' => 'Sacramento, CA 95661',
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('city_state_zip', array(
		'label' => __('City, State, Zip' , 'chiro-pro'),
		'section' => 'theme_variables',
		'type' => 'text',
		'priority' => 5,
		)
	);
}

// This allows the user to replace the images on the front page.

add_action('customize_register', 'chiropro_front_page_images');
function chiropro_front_page_images($wp_customize){
	$wp_customize->add_section('front_page_images', array(
		'title' => __('Images' , 'chiro-pro'),
		'priority' => 127,
		)
	);
	$wp_customize->add_setting('logo', array(
		'default' => get_template_directory_uri() . '/images/logo.png',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'logo', array(
		'label' => __('Your Logo' , 'chiro-pro'),
		'section' => 'front_page_images',
		'settings' => 'logo',
		)
		)
	);
	$wp_customize->add_setting('main_front_page_image', array(
		'default' => get_template_directory_uri() . '/images/main-image.png',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'main_front_page_image', array(
		'label' => __('Main front page image (580x280)' , 'chiro-pro'),
		'section' => 'front_page_images',
		'settings' => 'main_front_page_image',
		)
		)
	);
	$wp_customize->add_setting('left_column_image', array(
		'default' => get_template_directory_uri() . '/images/left-column-image.jpg',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'left_column_image', array(
		'label' => __('Left column image (312x71)' , 'chiro-pro'),
		'section' => 'front_page_images',
		'settings' => 'left_column_image',
		)
		)
	);
	$wp_customize->add_setting('middle_column_image', array(
		'default' => get_template_directory_uri() . '/images/middle-column-image.jpg',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'middle_column_image', array(
		'label' => __('Middle column image (312x71)' , 'chiro-pro'),
		'section' => 'front_page_images',
		'settings' => 'middle_column_image',
		)
		)
	);
	$wp_customize->add_setting('right_column_image', array(
		'default' => get_template_directory_uri() . '/images/right-column-image.jpg',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'right_column_image', array(
		'label' => __('Right column image (312x71)' , 'chiro-pro'),
		'section' => 'front_page_images',
		'settings' => 'right_column_image',
		)
		)
	);
	$wp_customize->add_setting('fourofour_image', array(
		'default' => get_template_directory_uri() . '/images/whoops.png',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'fourofour_image', array(
		'label' => __('404 page image' , 'chiro-pro'),
		'section' => 'front_page_images',
		'settings' => 'fourofour_image',
		)
		)
	);
}

// This adds customization to the top box on the front page boxes on the right.

add_action('customize_register', 'chiropro_front_page_boxes');
function chiropro_front_page_boxes($wp_customize){
	$wp_customize->add_section('front_page_boxes', array(
		'title' => __('Front Page Boxes on Right' , 'chiro-pro'),
		'priority' => 131,
		)
	);
	$wp_customize->add_setting('top_box_header', array(
		'default' => __('Set An Appointment' , 'chiro-pro'),
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('top_box_header', array(
		'label' => __( 'Top Box Header', 'chiro-pro'),
		'section' => 'front_page_boxes',
		'type' => 'text',
		'priority' => 1,
		)
	);
		$wp_customize->add_setting('top_box_sub_header', array(
		'default' => __('Request your appointment online' , 'chiro-pro'),
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
		$wp_customize->add_control('top_box_sub_header', array(
		'label' => __('Top Box Sub-Header' , 'chiro-pro'),
		'section' => 'front_page_boxes',
		'type' => 'text',
		'priority' => 2,
		)
	);
		$wp_customize->add_setting('top_box_link', array(
		'default' => '/contact',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
		$wp_customize->add_control('top_box_link', array(
		'label' => __('Top Box Link' , 'chiro-pro'),
		'section' => 'front_page_boxes',
		'type' => 'text',
		'priority' => 3,
		)
	);

// This adds customization to the second box on the front page boxes on the right.

	$wp_customize->add_setting('second_box_header', array(
		'default' => __('New Patient Forms' , 'chiro-pro'),
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('second_box_header', array(
		'label' => __('2nd Box Header' , 'chiro-pro'),
		'section' => 'front_page_boxes',
		'type' => 'text',
		'priority' => 4,
		)
	);
		$wp_customize->add_setting('second_box_sub_header', array(
		'default' => __('Print them ahead of time' , 'chiro-pro'),
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
		$wp_customize->add_control('second_box_sub_header', array(
		'label' => __('2nd Box Sub-Header' , 'chiro-pro'),
		'section' => 'front_page_boxes',
		'type' => 'text',
		'priority' => 5,
		)
	);
		$wp_customize->add_setting('second_box_link', array(
		'default' => '/forms',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
		$wp_customize->add_control('second_box_link', array(
		'label' => __('2nd Box Link' , 'chiro-pro'),
		'section' => 'front_page_boxes',
		'type' => 'text',
		'priority' => 6,
		)
	);
	
	// This adds customization to the third box on the front page boxes on the right.

	$wp_customize->add_setting('third_box_header', array(
		'default' => __('Latest News' , 'chiro-pro'),
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('third_box_header', array(
		'label' => __('3rd Box Header' , 'chiro-pro'),
		'section' => 'front_page_boxes',
		'type' => 'text',
		'priority' => 7,
		)
	);
		$wp_customize->add_setting('third_box_sub_header', array(
		'default' => __('Promotions, Coupons, News' , 'chiro-pro'),
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
		$wp_customize->add_control('third_box_sub_header', array(
		'label' => __('3rd Box Sub-Header' , 'chiro-pro'),
		'section' => 'front_page_boxes',
		'type' => 'text',
		'priority' => 8,
		)
	);
		$wp_customize->add_setting('third_box_link', array(
		'default' => '/blog',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
		$wp_customize->add_control('third_box_link', array(
		'label' => __('3rd Box Link' , 'chiro-pro'),
		'section' => 'front_page_boxes',
		'type' => 'text',
		'priority' => 9,
		)
	);
	
// This adds customization to the fourth box on the front page boxes on the right.

	$wp_customize->add_setting('fourth_box_header', array(
		'default' => __('Location and Hours' , 'chiro-pro'),
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('fourth_box_header', array(
		'label' => __('4th Box Header' , 'chiro-pro'),
		'section' => 'front_page_boxes',
		'type' => 'text',
		'priority' => 10,
		)
	);
		$wp_customize->add_setting('fourth_box_sub_header', array(
		'default' => __('Maps and driving directions' , 'chiro-pro'),
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
		$wp_customize->add_control('fourth_box_sub_header', array(
		'label' => __('4th Box Sub-Header' , 'chiro-pro'),
		'section' => 'front_page_boxes',
		'type' => 'text',
		'priority' => 11,
		)
	);
		$wp_customize->add_setting('fourth_box_link', array(
		'default' => '/contact',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
		$wp_customize->add_control('fourth_box_link', array(
		'label' => __('4th Box Link' , 'chiro-pro'),
		'section' => 'front_page_boxes',
		'type' => 'text',
		'priority' => 12,
		)
	);
}

// This adds customization to the left column on the front page.

add_action('customize_register', 'chiropro_front_page_columns');
function chiropro_front_page_columns($wp_customize){
	$wp_customize->add_section('front_page_columns', array(
		'title' => __('Front Page Columns Text' , 'chiro-pro'),
		'priority' => 141,
		)
	);
	$wp_customize->add_setting('left_column_header', array(
		'default' => __('Location / Directions' , 'chiro-pro'),
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('left_column_header', array(
		'label' => __('Left column header' , 'chiro-pro'),
		'section' => 'front_page_columns',
		'type' => 'text',
		'priority' => 1,
		)
	);
		$wp_customize->add_setting('left_column_sub_header', array(
		'default' => __('Here you can use Google maps to get detailed directions from your home or office' , 'chiro-pro'),
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
		$wp_customize->add_control('left_column_sub_header', array(
		'label' => __('Left column sub-header' , 'chiro-pro'),
		'section' => 'front_page_columns',
		'type' => 'text',
		'priority' => 2,
		)
	);
		$wp_customize->add_setting('left_column_link', array(
		'default' => '/contact',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
		$wp_customize->add_control('left_column_link', array(
		'label' => __('Left column link' , 'chiro-pro'),
		'section' => 'front_page_columns',
		'type' => 'text',
		'priority' => 3,
		)
	);
	
// This adds customization to the middle column on the front page.
	
	$wp_customize->add_setting('middle_column_header', array(
		'default' => __('About Us' , 'chiro-pro'),
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('middle_column_header', array(
		'label' => __('Middle column header' , 'chiro-pro'),
		'section' => 'front_page_columns',
		'type' => 'text',
		'priority' => 4,
		)
	);
		$wp_customize->add_setting('middle_column_sub_header', array(
		'default' => __('Learn about the doctor and clinic here' , 'chiro-pro'),
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
		$wp_customize->add_control('middle_column_sub_header', array(
		'label' => __('Middle column sub-header' , 'chiro-pro'),
		'section' => 'front_page_columns',
		'type' => 'text',
		'priority' => 5,
		)
	);
		$wp_customize->add_setting('middle_column_link', array(
		'default' => '/about',
		'sanitize_callback' => 'esc_url_raw',
		
		)
	);
		$wp_customize->add_control('middle_column_link', array(
		'label' => __('Middle column link' , 'chiro-pro'),
		'section' => 'front_page_columns',
		'type' => 'text',
		'priority' => 6,
		)
	);
	
// This adds customization to the right column on the front page.
	
	$wp_customize->add_setting('right_column_header', array(
		'default' => __('Office Hours' , 'chiro-pro'),
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('right_column_header', array(
		'label' => __('Right column header' , 'chiro-pro'),
		'section' => 'front_page_columns',
		'type' => 'text',
		'priority' => 7,
		)
	);
		$wp_customize->add_setting('right_column_sub_header', array(
		'default' => __('Lear about our office hours here' , 'chiro-pro'),
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
		$wp_customize->add_control('right_column_sub_header', array(
		'label' => __('Right column sub-header' , 'chiro-pro'),
		'section' => 'front_page_columns',
		'type' => 'text',
		'priority' => 8,
		)
	);
		$wp_customize->add_setting('right_column_link', array(
		'default' => '/contact',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
		$wp_customize->add_control('right_column_link', array(
		'label' => __('Right column link' , 'chiro-pro'),
		'section' => 'front_page_columns',
		'type' => 'text',
		'priority' => 9,
		)
	);
}

// This adds color control to the phone number, email address and address on front page

add_action('customize_register', 'chiropro_site_colors');
function chiropro_site_colors($wp_customize){
	$wp_customize->add_section('cc_site_colors', array(
		'title' => __('Site Colors' , 'chiro-pro'),
		'priority' => 123,
		)
	);
	$wp_customize->add_setting('top_info_boxes', array(
		'default' => '#5a5af2',
		'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'top_info_boxes', array(
		'label' => __('Phone, Email, Address text' , 'chiro-pro'),
		'section' => 'cc_site_colors',
		'settings' => 'top_info_boxes',
		)
		)
	);
	$wp_customize->add_setting('right_box_colors_top', array(
		'default' => '#2f75be',
		'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'right_box_colors_top', array(
		'label' => __('Front page top right box' , 'chiro-pro'),
		'section' => 'cc_site_colors',
		'settings' => 'right_box_colors_top',
		)
		)
	);
	$wp_customize->add_setting('right_box_colors_bottom', array(
		'default' => '#4ca3ff',
		'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'right_box_colors_bottom', array(
		'label' => __('Front page bottom boxes' , 'chiro-pro'),
		'section' => 'cc_site_colors',
		'settings' => 'right_box_colors_bottom',
		)
		)
	);
	$wp_customize->add_setting('front_columns_text', array(
		'default' => '#5a5af2',
		'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'front_columns_text', array(
		'label' => __('Front page columns text' , 'chiro-pro'),
		'section' => 'cc_site_colors',
		'settings' => 'front_columns_text',
		)
		)
	);
	$wp_customize->add_setting('border_on_images', array(
		'default' => '#5a5af2',
		'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'border_on_images', array(
		'label' => __('Borders around images' , 'chiro-pro'),
		'section' => 'cc_site_colors',
		'settings' => 'border_on_images',
		)
		)
	);
}

// This changes the Main Navigation colors
//background color

add_action('customize_register', 'chiropro_nav_colors');
function chiropro_nav_colors($wp_customize){
	$wp_customize->add_section('nav_colors', array(
		'title' => __('Navigation Menu Colors' , 'chiro-pro'),
		'priority' => 121,
		)
	);
	$wp_customize->add_setting('navigation_background', array(
		'default' => '#5a5af2',
		'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'navigation_background', array(
		'label' => __('Background Color' , 'chiro-pro'),
		'section' => 'nav_colors',
		'settings' => 'navigation_background',
		)
		)
	);
	
	//  Text Color
	
	$wp_customize->add_setting('navigation_text_color', array(
		'default' => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'navigation_text_color', array(
		'label' => __('Text Color' , 'chiro-pro'),
		'section' => 'nav_colors',
		'settings' => 'navigation_text_color',
		)
		)
	);
	
	//  Navigation Menu Item on Hover
	
	$wp_customize->add_setting('navigation_color_on_hover', array(
		'default' => '#8383f9',
		'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'navigation_color_on_hover', array(
		'label' => __('Color on Mouse Hover' , 'chiro-pro'),
		'section' => 'nav_colors',
		'settings' => 'navigation_color_on_hover',
		)
		)
	);
}

// This controls the appointment button in the template sidebars

add_action('customize_register', 'chiropro_sidebar_button');
function chiropro_sidebar_button($wp_customize){
	
	$wp_customize->add_section('sidebar_button', array(
		'title' => __('Side-bar button on templates' , 'chiro-pro'),
		'priority' => 151,
		)
	);
	
	// This controls the button text
	
	$wp_customize->add_setting('button_text', array(
		'default' => __('Request Appointment' , 'chiro-pro'),
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('button_text', array(
		'label' => __('Button Text' , 'chiro-pro'),
		'section' => 'sidebar_button',
		'type' => 'text',
		'priority' => 1,
		)
	);
	
	// This controls the button link
	
	$wp_customize->add_setting('appointment_button_link', array(
		'default' => '/contact',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
		$wp_customize->add_control('appointment_button_link', array(
		'label' => __('Appointment button link' , 'chiro-pro'),
		'section' => 'sidebar_button',
		'type' => 'text',
		'priority' => 2,
		)
	);
}

add_action('wp_footer', 'chiropro_credit');
function chiropro_credit() {
  $content = '<div class="footer-wrapper" style="font-size:12px; padding:5px 10px; color:#000; font-family:open_sansregular">Created by <a href="http://wpclinicthemes.com" rel="nofollow">Clinic</a> Website Systems</div>';
  echo $content;  
}

// This uses the header hook to instert custom css
function chiropro_customize_css()
{
    ?>
			
		 <style type="text/css">
			  body{
				background-color:<?php echo esc_html(get_theme_mod('background_setting' , '#ffffff')); ?>;
			}
             .info-box a,.info-box p{
				color:<?php echo esc_html(get_theme_mod('top_info_boxes' , '#5a5af2')); ?>;
			}
			 .front-page-columns img{
				border-bottom:5px solid <?php echo esc_html(get_theme_mod('border_on_images' , '#5a5af2')); ?>;
				border-top:1px solid <?php echo esc_html(get_theme_mod('border_on_images' , '#5a5af2')); ?>;
			}
			.front-page-columns-row{
				border-bottom:1px solid <?php echo esc_html(get_theme_mod('border_on_images' , '#5a5af2')); ?>;
			}
			.front-page-columns h2{
				color:<?php echo esc_html(get_theme_mod('front_columns_text' , '#5a5af2')); ?>;
				text-shadow: 0 0 1px <?php echo esc_html(get_theme_mod('front_columns_text' , '#5a5af2')); ?>;
			}
			#container1,#container3,#container4{
				background-color:<?php echo esc_html(get_theme_mod('box_setting' , 'transparent')); ?>;
			}
			#wrapper1{
				background-color:<?php echo esc_html(get_theme_mod('background_setting' , '#fff')); ?>;
			}
			#wrapper2{
				background-color:<?php echo esc_html(get_theme_mod('stripe_color' , '#eee')); ?>;
				border-color:<?php echo esc_html(get_theme_mod('stripe_border' , '#ddd')); ?>;
			}
			.footer-wrapper{
				background-color:<?php echo esc_html(get_theme_mod('foot_color' , '#eee')); ?>;
			}
			.post{
				background-color:<?php echo esc_html(get_theme_mod('box_setting' , 'transparent')); ?>;
			}
			#main-navigation, #main-navigation a {
				background-color: <?php echo esc_html(get_theme_mod('navigation_background' , '#5a5af2')); ?>;
			}
			#main-navigation li a {
				color: <?php echo esc_html(get_theme_mod('navigation_text_color' , '#ffffff')); ?>;
				background-color: <?php echo esc_html(get_theme_mod('navigation_background' , '#5a5af2')); ?>;
			}
			#main-navigation li a:hover{
				background-color: <?php echo esc_html(get_theme_mod('navigation_color_on_hover' , '#8383f9')); ?>;
			}
			.right-front-page-boxes #top a, #fscf_submit1{
				background-color: <?php echo esc_html(get_theme_mod('right_box_colors_top' , '#2f75be')); ?>;
			}
			.right-front-page-boxes a, .sidebar-buttons a, #fscf_submit1:hover{
				background-color: <?php echo esc_html(get_theme_mod('right_box_colors_bottom' , '#4ca3ff')); ?>;
			}
			.sidebar-buttons a:hover{
				background-color: <?php echo esc_html(get_theme_mod('right_box_colors_top' , '#2f75be')); ?>;
			}
			.main-titles h1, .main-titles{
				color: <?php echo esc_html(get_theme_mod('stripe_text_color')); ?>;
			}
			</style>
    <?php
}
add_action( 'wp_head', 'chiropro_customize_css');