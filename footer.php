        <?php if ( is_active_sidebar( 'footer-widget-area' ) ) : ?>
        <div class="widget clearfix">
            <?php dynamic_sidebar( 'footer-widget-area' ); ?>
        </div>
        <?php endif; ?>
        <footer id="footer" class="clearfix" role="contentinfo">
            <?php $loop = new WP_Query( array( 'post_type' => 'connect', 'posts_per_page' => -1, 'category' => 'current' ) ); ?>
            <div class="connect">
               Connect: &nbsp; &nbsp; 
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <a href="http://<?php echo get_the_content(); ?>"><i class="fa <?php echo get_the_title(); ?>"></i></a>
                <?php endwhile; wp_reset_query(); ?> 
            </div>
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?> 

        </footer>
        
        <img src="<?=get_bloginfo('template_directory');?>/images/footer-logo.png" width="124" class="footer-img" />
        
        <div id="copyright">
            <?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'blankslate' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); ?>
        </div>
    </div>
    <?php wp_footer(); ?>
    <script src="<?=get_bloginfo('template_directory');?>/js/scripts.js"></script>
    
</body>
</html>