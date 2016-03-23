
<footer class="row">
    <div class="col-lg-12">
    <?php $args = array(
        'theme_location' => 'footer'
    )
    ?>
    <?php wp_nav_menu($args); ?>
    <p><?php bloginfo('name'); ?> - &copy<?php echo date('Y'); ?></p>
    </div>
</footer>


</div><!--id=main-content-->
</div> <!--id=page-->
<?php wp_footer(); ?>
</body>
</html>