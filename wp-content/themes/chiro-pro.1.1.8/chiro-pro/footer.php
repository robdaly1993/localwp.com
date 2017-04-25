		</div> <!-- End of the container div -->
	</div> <!-- End of wrapper div -->
<div class="footer-wrapper">
	<footer>		
		<div class="fourth" id="footer-widget-left">
			<?php if ( ! dynamic_sidebar('footer1')) : ?>
			<h2><?php _e('This is Footer 1' , 'chiro-pro'); ?></h2>
			<?php endif; ?>
		</div>
		<div class="fourth" id="footer-widget-middle-left">
			<?php if ( ! dynamic_sidebar('footer2')) : ?>
			<h2><?php _e('This is Footer 2' , 'chiro-pro'); ?></h2>
			<?php endif; ?>
		</div>
		<div class="fourth" id="footer-widget-middle-right">
			<?php if ( ! dynamic_sidebar('footer3')) : ?>
			<h2><?php _e('This is Footer 3' , 'chiro-pro'); ?></h2>
			<?php endif; ?>
		</div>
		<div class="fourth" id="footer-widget-right">
			<?php if ( ! dynamic_sidebar('footer4')) : ?>
			<h2><?php _e('This is Footer 4' , 'chiro-pro'); ?></h2>
			<?php endif; ?>
		</div>		
	</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>