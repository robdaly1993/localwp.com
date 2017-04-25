<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php the_title( sprintf( '<h2 class="post-titles"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	<div class="meta-above">
		<?php echo get_the_date(); ?><br>
		<?php the_category(', ') ?>
	</div>
	<div class="entry-content">
		<div class="chiropro-thumbnail">
			<?php if ( has_post_thumbnail() ) {the_post_thumbnail(array(100,100));} ?>
		</div>
		<?php the_excerpt(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'chiro-pro' ),
				'after'  => '</div>',
			) );
		?>
	</div>
</article>