<footer class="footer">
    <div class="footer-content">
    <?php  
             
             $menusFooter=array(
                 'theme_location' => 'footer-menu',
                 'container'=> 'nav',
                 'container_class' => 'foot'
             );
              wp_nav_menu( $menusFooter )
            ?>

        <p>All Rights Reserved. <?php echo get_bloginfo('name'); ?></p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>