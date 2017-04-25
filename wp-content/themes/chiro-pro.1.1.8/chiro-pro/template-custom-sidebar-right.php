<?php
/*
Template Name: Custom Sidebar Right
*/
?>			
<?php get_header() ?>
<div id="wrapper2">
	<div id="container2">
		<div class="main-titles">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
</div>
<div id="wrapper3">
	<div id="container3">
		<article class="two-thirds-left">			
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>
			<?php endwhile; ?>			
		</article>
		<aside class="one-third-right">
			<?php get_sidebar('custom1'); ?>
		</aside>
		<?php get_footer(); ?>