<?php if ( 'posts' == get_option( 'show_on_front' ) ) {
	include( get_home_template() );
	} else { ?>
		<?php get_header('frontpage') ?>
			<div id="image-box-row">
				<div id="main-image-box">
					<?php if ( get_theme_mod('main_front_page_image' , get_template_directory_uri() . '/images/main-image.png') ) : ?>
						<img src="<?php echo esc_url(get_theme_mod('main_front_page_image' , get_template_directory_uri() . '/images/main-image.png')); ?>" alt="main-front-page-image"/>
					<?php endif; ?>
				</div>
				<div class="right-front-page-boxes">
					<div id="top">
						<a href="<?php echo esc_url(get_theme_mod('top_box_link', esc_url(home_url('/contact')))); ?>"><?php echo get_theme_mod('top_box_header', __('Set an Appointment' , 'chiro-pro')); ?><br><span><?php echo get_theme_mod('top_box_sub_header', __('Request your appointment online' , 'chiro-pro')); ?><br><img src="<?php echo esc_url((get_template_directory_uri() . '/images/go-button.png')); ?>" alt="go button" /></span></a>
					</div>
					<a href="<?php echo esc_url(get_theme_mod('second_box_link', esc_url(home_url('/forms')))); ?>"><?php echo get_theme_mod('second_box_header', __('New Patient Forms' , 'chiro-pro')); ?><br><span><?php echo get_theme_mod('second_box_sub_header', __('Print them ahead of time' , 'chiro-pro')); ?></span></a>
					<a href="<?php echo esc_url(get_theme_mod('third_box_link', esc_url(home_url('/blog')))); ?>"><?php echo get_theme_mod('third_box_header', __('Latest News' , 'chiro-pro')); ?><br><span><?php echo get_theme_mod('third_box_sub_header', __('Promotions, Coupons, News' , 'chiro-pro')); ?></span></a>
					<a href="<?php echo esc_url(get_theme_mod('fourth_box_link', esc_url(home_url('/contact')))); ?>"><?php echo get_theme_mod('fourth_box_header', __('Location and Hours' , 'chiro-pro')); ?><br><span><?php echo get_theme_mod('fourth_box_sub_header', __('Maps and driving directions' , 'chiro-pro')); ?></span></a>
				</div>
			</div>
			<div class="front-page-columns-row">
				<div class="front-page-columns" id="left">
					<a href="<?php echo esc_url(get_theme_mod('left_column_link', esc_url(home_url('/contact')))); ?>">
					<?php if ( get_theme_mod('left_column_image', get_template_directory_uri() . '/images/left-column-image.jpg') ) : ?>
						<img src="<?php echo esc_url(get_theme_mod('left_column_image', get_template_directory_uri() . '/images/left-column-image.jpg')); ?>" alt="left-column-image" /><br><br>
					<?php endif; ?>
					<h2><?php echo get_theme_mod('left_column_header', __('Location / Directions' , 'chiro-pro')); ?></h2>
					<p><?php echo get_theme_mod('left_column_sub_header', __('Here you can use Google maps to get detailed directions from your home or office.' , 'chiro-pro')); ?></p></a>
				</div>
				<div class="front-page-columns" id="middle">
					<a href="<?php echo esc_url(get_theme_mod('middle_column_link', esc_url(home_url('/contact')))); ?>">
					<?php if ( get_theme_mod('middle_column_image', get_template_directory_uri() . '/images/middle-column-image.jpg') ) : ?>
						<img src="<?php echo esc_url(get_theme_mod('middle_column_image', get_template_directory_uri() . '/images/middle-column-image.jpg')); ?>" alt="middle-column-image" /><br><br>
					<?php endif; ?>
					<h2><?php echo get_theme_mod('middle_column_header', __('About Us' , 'chiro-pro')); ?></h2>
					<p><?php echo get_theme_mod('middle_column_sub_header', __('Learn about the doctor and clinic here' , 'chiro-pro')); ?></p></a>
				</div>
				<div class="front-page-columns" id="right">
					<a href="<?php echo esc_url(get_theme_mod('right_column_link', esc_url(home_url('/contact')))); ?>">
					<?php if ( get_theme_mod('right_column_image', get_template_directory_uri() . '/images/right-column-image.jpg') ) : ?>
						<img src="<?php echo esc_url(get_theme_mod('right_column_image', get_template_directory_uri() . '/images/right-column-image.jpg')); ?>" alt="right-column-image" /><br><br>
					<?php endif; ?>
					<h2><?php echo get_theme_mod('right_column_header', __('Office Hours' , 'chiro-pro')); ?></h2>
					<p><?php echo get_theme_mod('right_column_sub_header', __('Learn about our office hours here' , 'chiro-pro')); ?></p></a>
				</div>
			</div>
			<div class="single-column">
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'content', 'page' ); ?>
					<?php endwhile; ?>
				<?php endif; ?>		
			</div>
			<?php get_footer(); ?>
	<?php
}; ?>