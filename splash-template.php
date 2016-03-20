<?php
/*
Template Name: Splash Page Template
*/
?>
<head>
    <?php wp_head(); ?>

</head>

<?php
if (is_active_sidebar('Splash Title')){
    
    dynamic_sidebar('Splash Title');
    echo "hey";
}
?>

<?php get_footer(); ?>


