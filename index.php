<?php
get_header();
if (have_posts()):
    while (have_posts()):
        the_post();
?>
<h2><a href="<?php
        the_permalink();
?>"><?php
        the_title();
?></a></h2>
<?php
        $string = "This has many words This has many words This has many words This has many words This has many words This has many words "?>
<?php
        wordEffects($string, 0, 15, 0, array(
            "style1",
            "style2"
        ), "something:thing;", "else:thing;");
?>
<?php
        the_content();
?>
<?php
    endwhile;
else:
    echo 'nothing';
endif;
get_footer();
?>
