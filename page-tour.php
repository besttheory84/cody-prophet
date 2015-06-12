<?php get_header(); ?>
   
    <section id="content" role="main">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="header clearfix">
                <h1 class="entry-title"><?php the_title(); ?></h1>
                <p><?php $key_name = get_post_custom_values($key = 'subtitle'); echo $key_name[0]; ?></p>
            </header>
            <div class="about clearfix">
                <section class="entry-content tour-content">
                    <div class="inner-about-content">
                        <?php the_content(); ?>
                    </div>
                </section>
                <?php get_sidebar(); ?>
            </div>
        </article>
        <?php endwhile; endif; ?>
    </section>

<?php get_footer(); ?>