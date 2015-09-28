<?php

// Activation du support pour les images à la une et définition des grosseurs voulues
add_theme_support('post-thumbnails');
add_image_size('grande', 1000, 1000, true);
add_image_size('moyenne', 500, 500, true);
add_image_size('petite', 250, 250, true);
add_image_size('vignette', 125, 125, true);


// Activation du support pour les fils RSS
add_theme_support('automatic-feed-links');


// Enregistrement de l'emplacement de menu
function enregistrer_emplacement_menu()  {
	register_nav_menus(array(
		'menu-principal' => "Menu principal"
	));
}
add_action('init', 'enregistrer_emplacement_menu');


// Injection des feuilles de style
function injecter_styles() {

	wp_register_style(
		'normalize',
		get_template_directory_uri() . '/normalize.min.css', array(),
		'1.0',
		'all'
	);
	wp_enqueue_style('normalize');

	wp_register_style(
		'boing-styles',
		get_template_directory_uri() . '/style.css', array(),
		'1.0',
		'all'
	);
	wp_enqueue_style('boing-styles');

}
add_action('wp_enqueue_scripts', 'injecter_styles');


// Injection des scripts
function injecter_scripts() {
	if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
		wp_register_script(
			'modernizr',
			get_template_directory_uri() . '/js/lib/modernizr-2.7.1.min.js',
			array(),
			'2.7.1'
		);
		wp_enqueue_script('modernizr');

		wp_register_script(
			'boing-scripts',
			get_template_directory_uri() . '/js/jquery-2.1.4.js',
			array(),
			'2.1.4'
		);
		wp_enqueue_script('boing-scripts');
		
        	wp_register_script(
			'color-scripts',
			get_template_directory_uri() . '/js/jquery-color.js',
			array(),
			'1.0.0'
		);
		
		wp_enqueue_script('color-scripts');
		wp_register_script(
			'breath',
			get_template_directory_uri() . '/js/breath.js',
			array('jquery'),
			'1.0.0'
		);
		wp_enqueue_script('breath');
        	wp_register_script(
			'fullpage',
			get_template_directory_uri() . '/fullPage.js-master/jquery.fullPage.js',
			array('jquery'),
			'1.0.0'
		);
		
		wp_enqueue_script('fullpage');
        wp_register_script(
			'etudiants-scripts', get_template_directory_uri() . '/js/scripts.js',
			array('jquery'),
			'1.0.0'
		);
		wp_enqueue_script('etudiants-scripts');
	}
}
add_action('init', 'injecter_scripts');