<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<?php wp_head(); ?>
	</head>
	
	<body <?php body_class(); ?>>
	<div id="wrapper3">	
		<div id="container1">
			<header>				
				<div id="logo">
					<?php 
						if ( get_theme_mod('logo' , get_template_directory_uri() . '/images/logo.png') ) { ?>
							<a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_theme_mod('logo' , get_template_directory_uri() . '/images/logo.png')); ?>" alt="logo"></a> <?php }
						else {
							?>
							<div class="site-info-text">
								<div id="title-text">
									<a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo( 'name'); ?></a>
								</div>
								<div id="description-text">
								<a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo ( 'description'); ?></a>
								</div>
							</div>
							<?php
						}?>
				</div>				
				<div class="info-box" id="address">
					<h4><?php _e('ADDRESS' , 'chiro-pro'); ?></h4>
					<p><?php echo esc_html(get_theme_mod('street' , '500 Cherry St.')); ?><br><?php echo esc_html(get_theme_mod('city_state_zip' , 'Sacramento, CA 95661')); ?></p>
				</div>
				<div class="info-box" id="your-email">
					<h4><?php _e('EMAIL' , 'chiro-pro'); ?></h4>
					<p><a href="mailto:<?php echo is_email(get_theme_mod('email' , 'user@domain.com')); ?>"><?php echo esc_html(get_theme_mod('email' , 'user@domain.com')); ?></a></p>
				</div>
				<div class="info-box" id="phone">
					<h4><?php _e('PHONE' , 'chiro-pro'); ?></h4>
					<p><a href="tel:<?php echo esc_html(get_theme_mod('phone_link' , '5555555555')); ?>"><?php echo esc_html(get_theme_mod('phone' , '555-555-5555')); ?></a></p>
				</div>
			</header>
			<?php wp_nav_menu(array('theme_location' => 'mainnav', 'container_id' => 'main-navigation', 'menu_id' => 'nav', 'fallback_cb' => 'chiropro_default_menu')); ?>