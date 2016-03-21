
<footer class="site-footer">
    <?php $args = array(
        'theme_location' => 'footer'
    )
    ?>
    <?php wp_nav_menu($args); ?>
    <p><?php bloginfo('name'); ?> - &copy<?php echo date('Y'); ?></p>
</footer>

<?php wp_footer(); ?>
</div><!--id=main-content-->
</div><!--id=main-->
</div> <!--id=page-->
</body>
</html>