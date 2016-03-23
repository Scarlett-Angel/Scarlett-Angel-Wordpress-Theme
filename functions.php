<?php
//Body classes

//add to splash-template page template
function SA_add_body_class ($classes){
	if (is_page_template('splash-template.php')){
		$classes[] = 'splash-template';
	}
	if (is_page_template('bottom-corner.php')){
		$classes[] = 'bottom-corner';
	}
	return $classes;
}

add_filter('body_class', 'SA_add_body_class');

//Add widget location
function scarlett_widget_init() {
	register_sidebar( array(
		'name' => 'Splash Title',
		'id' => 'splash-title',
		
	));
		register_sidebar( array(
		'name' => 'Bottom Corner',
		'id' => 'bottom-corner',
		
	));
}



add_action('widgets_init', 'scarlett_widget_init');

//does page have children
function has_children()
{
    global $post;
    $pages = get_pages('child_of=' . $post->ID);
    return count($pages);
}
// Get top ancestor
function get_top_ancestor_id()
{
    global $post;
    if ($post->post_parent) {
        $ancestors = array_reverse(get_post_ancestors($post->ID));
        return $ancestors[0];
    }
    return $post->ID;
}
function importResources()
{
	wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_script('jquery_2', get_template_directory_uri() . '/js/jquery-2.2.2.min.js');
	wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js');
}
add_action('wp_enqueue_scripts', 'importResources');
//nav menus
register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu')
));

?>