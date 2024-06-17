<?php

// This function enqueues the Normalize.css for use. The first parameter is a name for the stylesheet, the second is the URL. Here we
// use an online version of the css file.
function add_normalize_CSS() {
	wp_enqueue_style( 'normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
}
 
add_action('wp_enqueue_scripts', 'add_normalize_CSS');

function register_my_menus() {
	register_nav_menus(
		array(
			'header'    => __('Header Menu', 'novaorigins' ),
			'social' => __('Social Menu', 'novaorigins' ),
			'footer' => __('Footer Menu', 'novaorigins'),
	   	)
	);
}

add_action( 'init', 'register_my_menus' );

function nova_origins_enqueue_style($name, $path, $external = false){
	if($external){
	 	wp_enqueue_style( $name,  $path, false, false, 'all');
	}else{
	  	wp_enqueue_style( $name,  get_template_directory_uri() . $path, false, filemtime( get_stylesheet_directory() . $path), 'all');
	}
}

function nova_origins_enqueue_script($handle, $path, $external = false){
	if($external){
	  	wp_enqueue_script( $handle, $path, array(), false, true);
	}else{
	  	wp_enqueue_script( $handle, get_template_directory_uri() . $path, array(), filemtime( get_stylesheet_directory() . $path), true);
	}
}

function add_theme_assets() {
	nova_origins_enqueue_style( 'theme', '/assets/styles/novaorigins.css');
	nova_origins_enqueue_style( 'fontawesome', '/assets/fonts/FontAwesome/css/all.css');
	nova_origins_enqueue_style( 'Amsterdam Two_ttf', '/assets/styles/font.css');
	nova_origins_enqueue_style( 'sans', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap', true);
	// nova_origins_enqueue_style( 'theme', '/assets/styles/css-dist/novaorigins.min.css');
	
	nova_origins_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', true);
	nova_origins_enqueue_script('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', true);
	// nova_origins_enqueue_script( 'script', '/assets/scripts/min/novaorigins.min.js');
	nova_origins_enqueue_script( 'script', '/assets/scripts/novaorigins.js');
}

add_action( 'wp_enqueue_scripts', 'add_theme_assets' );
