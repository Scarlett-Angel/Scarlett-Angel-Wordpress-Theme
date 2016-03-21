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
        <div id="page">
            <div id="main" class="wrap">
<?php
//exclude default header if splash page
 (is_page_template('splash-template.php') ?  : include 'default_header.php'); ?>
<div id="main-content">