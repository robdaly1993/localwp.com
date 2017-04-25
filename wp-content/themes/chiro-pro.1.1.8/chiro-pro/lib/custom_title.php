<?php
/**
 * Create a nicely formatted and more specific title element text for output
 * in head of document, based on current view.
 * @global int $paged WordPress archive pagination page count.
 * @global int $page  WordPress paginated post page count.
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function chiropro_wp_title( $title, $sep ) {
	global $paged, $page;
	if ( is_feed() ) {
		return $title;	}	// Add the site name.
	$title .= get_bloginfo( 'name', 'display' );
	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}	// Add a page number if necessary.
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
		$title = "$title $sep " . sprintf( __( 'Page %s', 'chiro-pro' ), max( $paged, $page ) );
	}
	return $title;
}add_filter( 'wp_title', 'chiropro_wp_title', 10, 2 );