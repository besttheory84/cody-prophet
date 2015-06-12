<?php get_header(); ?>
   
    <section id="content" role="main">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="header clearfix show-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
            </header>
            <section class="entry-content show-content">
                <?php the_content(); ?>
            </section>
        </article>
        <?php endwhile; endif; ?>
        
        <div class="shows clearfix">
            <?php $loop2 = new WP_Query( array( 'post_type' => 'shows', 'posts_per_page' => -1, 'category' => 'current' ) ); ?>
            <?php while ( $loop2->have_posts() ) : $loop2->the_post(); ?>
            <div class="show">
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