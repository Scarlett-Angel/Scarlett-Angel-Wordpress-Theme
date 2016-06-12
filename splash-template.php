<?php
/*
Template Name: Splash Page Template
*/
?>
<?php get_header(); ?>
<div id="splash-page-title" class="co-lg-12">
    <div id="splash-page-inner-text">
    
<?php
if (is_active_sidebar('Splash Title')){
    
    dynamic_sidebar('Splash Title');
}
?>

        <br><button class="button" type="button" data-toggle="modal" data-target="#splash-box">
            Continue Your Journey
        </button>
        
        <div class="modal fade" id="splash-box">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header"><h2>Choose Your Adventure</h2></div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Professional Services</h2>
                            </div>
                        </div>
                        <div class="row">
                            <a href="<?php echo site_url(); ?>/web-design">
<span class="hvr-sweep-to-right">
                            <div class="col-md-8">
                                <h3>Web Design</h3>Great Websites really don't have to cost thousands of pounds.
We have streamline the process of getting a quote for you website and ensure that you don't pay for something you don't need.
This is what set's us apart from other web design companies.
<h2>Click to Find out More</h2>
                            </div>
                            <div class="col-md-4">
                                <img src="<?php
echo get_template_directory_uri();
?>/theme-images/web-design.png" class="img-responsive img-circle">
                            </div>
                            </span></a>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
</div><!--id=splash-page-inner-text-->
</div><!--id=splash-page-title-->
<?php get_footer(); ?>