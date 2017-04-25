<section class="no-results">
	
	<h2><?php _e( 'Nothing Found', 'chiro-pro' ); ?></h2>	

	<div class="entry-single">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'chiro-pro' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'chiro-pro' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'chiro-pro' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div>
</section>