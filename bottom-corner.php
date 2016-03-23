<?php
/*
Template Name: Bottom Corner Logo
*/
?>
<style>
    .bottom-corner {background-image:url(<?php
    echo get_template_directory_uri() . "/theme-images/";
    switch (rand(1,10)){
        case 1:
            echo "1.gif";
            break;
        case 2:
            echo "2.gif";
            break;
        case 3:
            echo "3.gif";
            break;
        case 4:
            echo "4.gif";
            break;
        case 5:
            echo "5.gif";
            break;
        case 6:
            echo "6.gif";
            break;
        case 7:
            echo "7.gif";
            break;
        case 8:
            echo "8.gif";
            break;
        case 9:
            echo "9.gif";
            break;
        case 10:
            echo "10.gif";
            break;
    }
    ?>); background-size: cover; background-attachment:fixed; background-repeat: no-repeat;}
</style>
<?php
get_header();
?>
<div id="top-row" class="row">
    <div id="main-content-area" class="col-lg-10 col-md-10 col-md-push-2"><?php
if (have_posts()):
?>
<?php
    while (have_posts()):
        the_post();
?>
<?php the_title( '<h3>', '</h3>' ); ?>
<?php
        the_content();
?>

</div>
    <div id="left-bar-top" class="col-lg-2 col-md-2 col-md-pull-10"></div>
    
</div>
<div id="bottom-row" class="row">
    <div class="col-lg-4 col-md-4" id="bottom-bar-logo">
                                       <span id="logo-text">
            <?php
if (is_active_sidebar('Bottom Corner')) {
    dynamic_sidebar('Bottom Corner');
} //is_active_sidebar('Bottom Corner')
?></span><!--id=logo-text--> 
        <div id="logo-anchor">

            <img id="logo" src="<?php
echo get_template_directory_uri();
?>/theme-images/bottom-corner.png" class="img-responsive img-circle animated-logo">

        </div><!--id=logo-anchor-->
    </div><!--id=bottom-bar-logo-->
    <div id="bottom-bar" class="col-lg-8 col-md-8">

    </div>
</div>
<?php
    endwhile;
?>
<?php
endif;
?>
<?php
get_footer();
?>