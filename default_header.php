        <div id="header">
<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
<h2><?php bloginfo('description'); ?></h2>

<nav class="header-nav">
    <?php $args = array(
        'theme_location' => 'primary'
    );
    ?>
    <?php wp_nav_menu($args); ?>
</nav>

</div><!--id=header -->