<?php get_header(); ?>
<div id="wrapper2">
	<div id="container2">
		<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
	</div>
</div>
<div id="wrapper3">
	<div id="container3">
		<div class="two-thirds-left">			
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part('content');?>
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