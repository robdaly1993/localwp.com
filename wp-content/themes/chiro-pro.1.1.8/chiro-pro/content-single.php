<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-single">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'chiro-pro' ),
				'after'  => '</div>',
			) );
		?>
	</div>
</article>