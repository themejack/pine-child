<?php
/**
 * Pine child functions and definitions
 *
 * @package Pine child
 * @see http://codex.wordpress.org/Child_Themes
 */

/**
 * Enqueue scripts and styles.
 */
function pine_child_scripts() {
	// Parent style dependencies.
	$style_dependencies = array( 'pine-style' );

	// Allowed schemes.
	$schemes = array( 'blue', 'green', 'orange', 'purple', 'yellow' );

	// Choosen scheme.
	$scheme = get_theme_mod( 'pine_scheme', 'red' );

	// Add choosen scheme to style dependencies.
	if ( in_array( $scheme, $schemes ) ) {
		$style_dependencies[] = 'pine-style-color-' . $scheme;
	}

	// Child style.
	wp_enqueue_style( 'pine-child-style', get_stylesheet_uri(), $style_dependencies );

	// Child scripts.
	wp_enqueue_script( 'pine-child-scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array( 'pine-scripts' ), '20160415', true );
}
add_action( 'wp_enqueue_scripts', 'pine_child_scripts' );
