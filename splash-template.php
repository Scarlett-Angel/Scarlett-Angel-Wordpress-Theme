<?php
/*
Template Name: Splash Page Template
*/
?>
<?php get_header(); ?>
<div id="splash-page-title">
    <div id="splash-page-inner-text">
    
<?php
if (is_active_sidebar('Splash Title')){
    
    dynamic_sidebar('Splash Title');
}
?>
<a href="http://scarlett-angel.co.uk/about/">
        <br><div class="button">
            Continue Your Journey
        </div></a>
</div><!--id=splash-page-inner-text-->
</div><!--id=splash-page-title-->
<?php get_footer(); ?>