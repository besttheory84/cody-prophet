<?php get_header(); ?>
   
    <section id="content" role="main">        
        <div class="testimonies clearfix">
            <?php $loop2 = new WP_Query( array( 'post_type' => 'testimonials', 'posts_per_page' => -1, 'category' => 'current' ) ); ?>
            <?php while ( $loop2->have_posts() ) : $loop2->the_post(); ?>
            <div class="testimonials">
                <div class="inner">
                    <?php the_post_thumbnail(); ?>
                    <div class="the-content">
                        <h2><?php echo get_the_title(); ?></h2>
                        <p><?php echo get_the_content(); ?></p>
                    </div>
                </div>
            </div>
            <?php endwhile; wp_reset_query(); ?>   
        </div>
    </section>

<?php get_footer(); ?>