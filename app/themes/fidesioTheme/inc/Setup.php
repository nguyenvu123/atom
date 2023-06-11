<?php
/**
 * Enqueue scripts and styles.
 **/
function athena_scripts() {
	// Styles
	wp_enqueue_style( 'main-style', ASSETS_PATH . 'css/main.css', array(), null );

	// Scripts
	wp_enqueue_script( 'main-script', 'https://code.jquery.com/jquery-3.6.0.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'custom-script', ASSETS_PATH . 'js/main.js', array( 'jquery' ), null, true );

	wp_localize_script( 'main-script', 'wp_localize',
		array(
			'ajaxurl' => admin_url( 'admin-ajax.php' ),
			'homeurl' => get_home_url()
		)
	);
	wp_enqueue_script( 'main-script' );

}

add_action( 'wp_enqueue_scripts', 'athena_scripts' );
