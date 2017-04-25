<?php if ( ! dynamic_sidebar('aboutbar')) : ?>
	<h2><?php _e('You need to add a custom menu widget in the About Sidebar widget area. (Dashboard --> Appearance --> Widgets)' , 'chiro-pro'); ?></h2>
<?php endif; ?>
<div class="sidebar-buttons">
	<a href="<?php echo esc_url(get_theme_mod('appointment_button_link', esc_url(home_url('/contact')))); ?>"><?php echo esc_html(get_theme_mod('button_text', __('Request an Appointment' , 'chiro-pro'))); ?></a>
</div>
<div class="sidebar-address">
	<?php echo esc_html(get_theme_mod('street' , '500 Cherry St.')); ?><br><?php echo esc_html(get_theme_mod('city_state_zip' , 'Sacramento, CA 95661')); ?>
</div>
<div class="sidebar-phone">
	<a href="tel:<?php echo esc_html(get_theme_mod('phone_link' , '5555555555')); ?>"><?php echo esc_html(get_theme_mod('phone' , '555-555-5555')); ?></a>
</div>
<div class="sidebar-email">
	<a href="mailto:<?php echo is_email(get_theme_mod('email' , 'user@domain.com')); ?>"><?php echo is_email(get_theme_mod('email' , 'user@domain.com')); ?></a>
</div>