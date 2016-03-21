<?php
//Body classes

//add to splash-template page template
function SA_add_body_class ($classes){
	if (is_page_template('splash-template.php')){
		$classes[] = 'splash-template';
	}
	$classes[] = 'splash-template';
	return $classes;
}

add_filter('body_class', 'SA_add_body_class');

//Add widget location
function scarlett_widget_init() {
	register_sidebar( array(
		'name' => 'Splash Title',
		'id' => 'splash-title',
		'before_widget' => '<div class="splash-title">',
		'after_widget'  > '</div>'
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
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'importResources');
//nav menus
register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu')
));

?>