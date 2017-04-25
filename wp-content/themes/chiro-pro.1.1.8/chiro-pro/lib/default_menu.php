 <?php
 
 if ( current_user_can('edit_theme_options') ) {
	?>
		<div style="clear:both; margin:25px 0; background-color:#ffff00; padding:15px; line-height:2em;"><?php _e('Assign a' , 'chiro-pro'); ?> <a href="<?php echo esc_url(home_url('/wp-admin/nav-menus.php')); ?>"><?php _e('menu' , 'chiro-pro'); ?></a> <?php _e('to your Main Navigation. -- Need' , 'chiro-pro'); ?> <a href="<?php echo get_template_directory_uri() . '/images/nav-box.jpg'; ?>" target="blank"><?php _e('Help' , 'chiro-pro'); ?></a>? --</div>
	<?php 
}