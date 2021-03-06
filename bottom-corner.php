<?php
/*
Template Name: Bottom Corner Logo
*/
?>
<style>
    .bottom-corner {background-image:url(<?php
echo get_template_directory_uri() . "/theme-images/";
switch(rand(1, 10)) {
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
} //rand(1, 10)
?>); background-size: cover; background-attachment:fixed; background-repeat: no-repeat;}
</style>
<?php
get_header();
?>
<div id="top-row" class="row">
    
<div id="main-content-area" class="col-lg-10 col-md-10 col-md-push-2">
    <div id="main-inner-text" class="col-md-10">
    <div class="content-float"><?php
if(have_posts()):
?>
<?php
	while(have_posts()):
		the_post();
?>
<?php
		the_title('<h1>', '</h1>');
?>
<?php
		the_content();
?>
    </div>
    </div>
   <div class="col-md-2">
    <div class="content-float">
    <p>This website is generated by a neat little program we developed which garantuees fresh content everytime a user visits your website. Refresh the page to see how this works!</p>
   <a href="web-design/">REFRESH THE PAGE!</a>
    </div></div>
</div>

    <div id="left-bar-top" class="col-lg-2 col-md-2 col-md-pull-10">
        <nav role="navigation">
        <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            
        <?php
		$primaryArgs=array(
			'theme_location'=>'primary',
			'menu'=>'primary nav',
			'menu_id'=>'menu',
            'container'=>false
            
		);
		wp_nav_menu($primaryArgs);
?>
        </div>
        </nav>
    </div>
    
</div>

<div id="bottom-row" class="row">
    <div class="col-lg-4 col-md-4" id="bottom-bar-logo">
            <span id="logo-text">
            <?php
		if(is_active_sidebar('Bottom Corner')) {
?>
    <?php
			dynamic_sidebar('Bottom Corner');
?>
<?php
		} //is_active_sidebar('Bottom Corner')
?></span><!--id=logo-text--> 
        <a href="http://localhost/scarlett-angel-com/"><div id="logo-anchor">

            <img id="logo" src="<?php
		echo get_template_directory_uri();
?>/theme-images/bottom-corner.png" class="img-responsive img-circle animated-logo">

        </div><!--id=logo-anchor--></a>
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