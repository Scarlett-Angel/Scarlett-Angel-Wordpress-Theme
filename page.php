<?php
get_header();
if(have_posts()) :
while (have_posts()) : the_post(); ?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php if(has_children() OR $post->post_parent > 0 ){ ?>

<nav class="subPage-nav">
    <span class="parent-link"><a href="<?php echo get_the_permalink(get_top_ancestor_id()); ?>"><?php echo get_the_title(get_top_ancestor_id()); ?></a></span>
    <?php
    $args = array (
        'child_of' => get_top_ancestor_id(),
        'title_li' => ''
    );
    ?>
    <ul>
    <?php wp_list_pages($args); ?>
    </ul>
</nav>
<?php } ?>
<?php the_content(); ?>
<?php endwhile;
else :
echo 'nothing';
endif;
get_footer();
?>
