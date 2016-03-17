<?php
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
//Will explode text by word and attach class for animation
function wordEffects($input, $second, $milisecond, $iteration, $effects, $class, $style)
{
	//$input = input string
	//$second = number of seconds to be incremented
	//$milisecond = number of miliseconds to be incremented
	//$iteration = number of words to skip before incremented the miliseconds
	//$effects = an array containing classes
	//$class = add class to each word
	//$style = add style to each word
	
	//set default values for first word
    $output       = array();
    $output       = explode(" ", $input);
    $effectsCount = count($effects);
    $delay        = 0;
    $point        = 0;
    $count        = 0;
	//iterate through each word
    foreach ($output as $word) {
        echo "<div style='display:inline-block;'><div style='' class='wow " . $effects[rand(1, $effectsCount) - 1] . "' data-wow-delay='$delay" . "." . $point . "s'><span class='$class' style='$style'>$word</span></div></div>";
		//store the range of possible increments of the miliseconds into an array
		$milisecond_increments = array();
        $array_pos             = 0;
        $while_mili            = $milisecond;
        if ($milisecond <> 0) {
            while ($while_mili < 100) {
                $milisecond_increments[$array_pos] = $while_mili;
                $while_mili                        = $while_mili + $milisecond;
                $array_pos                         = $array_pos + 1;
            }
        }
		//count total amount of increments
        $steps = count($milisecond_increments);
		//check if the iteration skip
        if ($count == $iteration) {
			//on first after second has been increased
            if ($point == 0 AND $milisecond <> 0) {
				//increase by the first milisecond increment
                $point = $milisecond_increments[0];
            } else {
				//check if it is the last milisecond increment
                if ($point == $milisecond_increments[($steps - 1)]) {
                    $point = 0;
                    $delay = $delay + 1;
                    $count = "0";
                } else {
					// check each increment and when found the current one > increase by 1
                    foreach ($milisecond_increments as $key => $step) {
                        if ($point == $step) {
                            $point = $milisecond_increments[($key + 1)];
                            break;
                        }
                    }
                }
            }
        }
		// increase word skip iteration
		else {
            $count = $count + 1;
        }
        unset($milisecond_increments);
        unset($steps);
    }
}
?>