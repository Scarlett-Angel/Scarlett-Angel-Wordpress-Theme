<!DOCTYPE html>
    <html <?php language_attributes(); ?>>
        <head>
            <meta charset="<?php bloginfo('charset'); ?>">
            <meta name="viewport" content="width=device-width">
            <title><?php bloginfo('name'); ?></title>
            <link href='https://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
             <link href='https://fonts.googleapis.com/css?family=Amatic+SC:700' rel='stylesheet' type='text/css'>
            <?php wp_head(); ?>
        </head>
        <body <?php body_class(); ?>>
<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
<h2><?php bloginfo('description'); ?></h2>