<?php get_header() ?>
<div id="wrapper3">
	<div id="container3">
		<article class="two-thirds-left">
			<div id="four-o-four-image">
				<?php if ( get_theme_mod('fourofour_image', get_template_directory_uri() . '/images/fourofour-image.jpg') ) : ?>
					<img src="<?php echo esc_url(get_theme_mod('fourofour_image' , get_template_directory_uri() . '/images/whoops.png')); ?>" alt="page-not-found">
				<?php endif; ?>
			</div>
			<?php _e('The page you are looking for is not available.' , 'chiro-pro'); ?><br><br>
			<h2><?php _e('Please visit our ' , 'chiro-pro'); ?><a href="<?php echo esc_url(home_url('/')); ?>"><?php _e('home page' , 'chiro-pro'); ?></a></h2>
		</article>		
		<?php get_sidebar(); ?>
		<?php get_footer(); ?>