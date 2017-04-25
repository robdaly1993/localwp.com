<?php get_header(); ?>
<div id="wrapper2">
	<div id="container2">
		<?php the_title( '<h1 class="main-titles">', '</h1>' ); ?>
	</div>
</div>
<div id="wrapper3">
	<div id="container3">
		<div class="two-thirds-left">			
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="tags">
					<?php the_tags(); ?>
				</div>
				<?php get_template_part( 'content', 'single' ); ?>
				<?php the_post_navigation(); ?>
				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>
			<?php endwhile; ?>			
		</div>
		<?php get_sidebar(); ?>
		<?php get_footer(); ?>