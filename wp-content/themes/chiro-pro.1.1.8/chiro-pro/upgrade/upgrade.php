<?php

function chiro_pro_my_admin_menu() {
	add_theme_page( __('Upgrade to ChiroPro Premium' , 'chiro-pro'), __('Premium Options' , 'chiro-pro'), 'edit_theme_options', '/premium.php', 'chiro_pro_premium_options_page');
}
add_action( 'admin_menu', 'chiro_pro_my_admin_menu' );

function chiro_pro_premium_options_page(){
	?>
	<div class="upgrade-wrap">
		<div class="chiro-pro-option">
			<h1><?php _e('Easily Add Video to your Home Page Without Knowing Any Code' , 'chiro-pro'); ?></h1>
			<div class="prem-screenshots">
				<img src="<?php echo esc_url(get_template_directory_uri() . '/upgrade/images/can-do-youtube.png'); ?>" />
			</div>
		</div>
		<div class="chiro-pro-option">
			<h1><?php _e('Want a dynamic, animated slider?' , 'chiro-pro'); ?></h1>
			<h2><?php _e('Integrates with the Slider Revolution plugin, the #1 selling slider plugin (sold separately by Code Canyon for $19)' , 'chiro-pro'); ?></h2>
			<div class="prem-screenshots">
				<img src="<?php echo esc_url(get_template_directory_uri() . '/upgrade/images/slider.png'); ?>" />
			</div>
		<span class="alignright">*<?php _e('The Slider Revolution is an AMAZING plugin available from Code Canyon for $19.00' , 'chiro-pro'); ?></span>
		</div>
		<div class="chiro-pro-option">
			<h1><?php _e('Extra Sidebars' , 'chiro-pro'); ?></h1>
			<img src="<?php echo esc_url(get_template_directory_uri() . '/upgrade/images/custom-bars.jpg'); ?>" />
			<p><?php _e('This extra flexibility allows you to have different sidebars on different pages. It\'s great if you\'re using email list opt-ins' , 'chiro-pro'); ?></p>
		</div>
		<div class="chiro-pro-option">
			<h1><?php _e('Retina Ready!' , 'chiro-pro'); ?></h1>
			<div class="prem-screenshots">
				<img src="<?php echo esc_url(get_template_directory_uri() . '/upgrade/images/retina.png'); ?>" />
			</div>
			<p><?php _e("Don't want to look outdated on iPads, iMacs and MacBooks? The premium version is Retina Ready so you can look like a pro." , 'chiro-pro'); ?></p>
		</div>	
		<div class="chiro-pro-option">
			<h1><?php _e('Office Hours Shortcode' , 'chiro-pro'); ?></h1>
			<img src="<?php echo esc_url(get_template_directory_uri() . '/upgrade/images/hours.jpg'); ?>" />
			<p><?php _e('This allows you to put "[hours]" in the content, and then control your office hours using the customizer. If you display your office hours on multiple posts, pages or widgets, changes in the customizer will be displayed all over your site.' , 'chiro-pro'); ?></p>
		</div>
		<div class="chiro-pro-option">
			<h1><?php _e('Optional Footer Text' , 'chiro-pro'); ?></h1>
			<p><?php _e('Adds a Footer Text section to the customizer so you can add an address, copyright, or even drop in your Schema Markup (for search engines) without having to edit the templates.' , 'chiro-pro'); ?></p>
		</div>
		<div class="chiro-pro-option">
			<h1><?php _e('White Label' , 'chiro-pro'); ?></h1>
			<div class="prem-screenshots">
				<img src="<?php echo esc_url(get_template_directory_uri() . '/upgrade/images/hide-credit.png'); ?>" />
			</div>
			<p><?php _e('Do you want to make the credit link in the footer go away? Are you a developer who makes sites for clients? The premium version has a simple check box to hide the credit link.' , 'chiro-pro'); ?></p>
		</div>
		<div class="chiro-pro-option">
			<h1><?php _e('Smoothe Updates' , 'chiro-pro'); ?></h1>
			<p><?php _e('Updates from the premium version are one-click updates from inside your WordPress dashboard just like it was hosted on WordPress.org. You will NOT need to download updates or FTP files. Just click the button and you\'re done' , 'chiro-pro'); ?></p>
			<img src="<?php echo esc_url(get_template_directory_uri() . '/upgrade/images/cpp-upgrade-small.jpg'); ?>" />			
		</div>
		<div class="chiro-pro-option">
			<h1><?php _e('Go Here for Special Pricing' , 'chiro-pro'); ?></h1>
			<p><?php _e('We have special pricing for upgraders from the free version. Just <a href="http://wpclinicthemes.com/special-offer-clinic-pro-premium-slkjds5fjh/">click here</a> to find out how much.' , 'chiro-pro'); ?></p>
		</div>
		
	</div>
	<?php
}