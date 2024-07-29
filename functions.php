<?php

// Add Theme Supports
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('post_format', [
	'quote'
]);
add_theme_support('html5');
add_theme_support('automatic-feed-links');
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('custom-logo');
add_theme_support('customize-selective-refresh-widgets');
add_theme_support('starter-content');

// Load in our CSS
function pc_boutique_enqueue_styles()
{
	wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/style.css', [], time() /*ou '1.1' pour moins de temps de chargement pour la prod*/, 'all');
};
add_action('wp_enqueue_scripts', 'pc_boutique_enqueue_styles');

if (!defined('THEME_IMG_PATH')) {
	define('THEME_IMG_PATH', get_stylesheet_directory_uri() . '/assets/images');
}