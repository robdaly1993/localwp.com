<?php
/*
Template Name: Thank You Page
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
		<article class="single-column" id="thank-you-background">			
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
		<?php get_footer(); ?>