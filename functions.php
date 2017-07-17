<?php

if ( !function_exists( 'euterpiaradio_5_enqueue_scripts' ) ) {
	function euterpiaradio_5_enqueue_scripts() {
		wp_enqueue_style( 'euterpiaradio-5-normalize', get_template_directory_uri() . '/node_modules/normalize.css/normalize.css', [ 'wp-mediaelement' ], '20170717', 'all' );
		wp_enqueue_style( 'euterpiaradio-5-style', get_template_directory_uri() . '/style.css', [ 'euterpiaradio-5-normalize' ], '20170717', 'all' );
		wp_enqueue_style( 'euterpiaradio-5-fonts', get_template_directory_uri() . '/fonts/fonts.css', [ 'euterpiaradio-5-style' ], '20170717', 'all' );
		wp_enqueue_style( 'euterpiaradio-5-fontawesome', get_template_directory_uri() . '/node_modules/font-awesome/css/font-awesome.css', [ 'euterpiaradio-5-style' ], '20170717', 'all' );
		wp_enqueue_style( 'euterpiaradio-5-socials-icons', get_template_directory_uri() . '/socials/socials.css', [ 'euterpiaradio-5-style' ], '20170717', 'all' );
		wp_enqueue_style( 'euterpiaradio-5-socials-style', get_template_directory_uri() . '/socials/style.css', [ 'euterpiaradio-5-style' ], '20170717', 'all' );

		wp_enqueue_script( 'euterpiaradio-5-normalize-script', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.js', [ 'jquery', 'wp-mediaelement' ], '20170316', true );
	}
}
add_action( 'wp_enqueue_scripts', 'euterpiaradio_5_enqueue_scripts' );

if ( !function_exists( 'euterpiaradio_5_after_setup_theme' ) ) {
	function euterpiaradio_5_after_setup_theme() {
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );
		register_nav_menu( 'header-menu', __( 'Navigation' ) );
		register_nav_menu( 'social-links', __( 'Réseaux sociaux' ) );
		register_nav_menu( 'directory-links', __( 'Annuaires' ) );
	}
}
add_action( 'after_setup_theme', 'euterpiaradio_5_after_setup_theme' );
