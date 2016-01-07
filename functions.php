<?php

function fhkarate_script_enqueue() {
	
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/fhkarate.css', array(), '1.0.0', 'all');
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/fhkarate.js', array(), '1.0.0', true);
	wp_enqueue_style('open sans', 'https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800,300italic,400italic,600italic,700italic,800italic');
	wp_enqueue_style('pt sans', 'https://fonts.googleapis.com/css?family=PT+Sans:400,700');
	wp_enqueue_style('pt sans narrow', 'https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700');
	wp_enqueue_style('pt sans caption', 'https://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700');

}

add_action('wp_enqueue_scripts', 'fhkarate_script_enqueue');

function fhkarate_theme_setup() {

	add_theme_support('menus');
	
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
	
}

add_action('init', 'fhkarate_theme_setup');