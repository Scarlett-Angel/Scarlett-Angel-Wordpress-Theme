<?php

function importResources() {
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'importResources');

//nav menus
register_nav_menus(array(
                         'primary' => __('Primary Menu'),
                         'footer' => __('Footer Menu')
                         ));

                         /*
                          *Function Inputs:
                          *input string to be exploded
                          *delay increment Seconds
                          *delay incremend Miliseconds
                          *array of classes for effects
                          *iteration delay
                          *
                          *
                          *
                          */
 function stringtowords ($input){
	$output = array(strlen($input));
	$output = explode(" ",$input);
	return $output;
}                        