<?php
//does page have children
function has_children() {
    global $post;
    $pages = get_pages('child_of=' . $post->ID);
    return count($pages);
}

// Get top ancestor
function get_top_ancestor_id(){
    global $post;
    if ($post->post_parent){
        $ancestors = array_reverse(get_post_ancestors($post->ID));
        return $ancestors[0];
    }
    return $post->ID;
}
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