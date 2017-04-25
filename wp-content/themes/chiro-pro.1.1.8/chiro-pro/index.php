			<?php get_header(); ?>
<div id="wrapper2">
	<div id="container2">
		<?php if( is_home() && get_option('page_for_posts') ) : $sub_title=get_post_meta(get_option('page_for_posts'),'subtitle',true);
					if($sub_title != '') {
					echo '<h1 class="main-titles">'. get_the_title(get_option('page_for_posts')) . $sub_title .'</h1>';
					}else {
					echo '<h1 class="main-titles">'. get_the_title(get_option('page_for_posts')) .'</h1>';
					}
				endif; ?>
	</div>
</div>
<div id="wrapper3">
	<div id="container3">
		<div class="two-thirds-left">			
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part('content' , get_post_format()); ?>
				<?php endwhile; ?>
				<div class="blog-index-post-nav-links">
					<div id="nav-older">
						<?php next_posts_link('&laquo; Older Posts'); ?>
					</div>
					<div id="nav-newer">
						<?php previous_posts_link('Newer Posts &raquo;'); ?>
					</div>
				</div>
			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>			
		</div>
		<?php get_sidebar(); ?>
		<?php get_footer(); ?>