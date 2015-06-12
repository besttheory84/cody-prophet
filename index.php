<?php get_header(); ?>
<<<<<<< HEAD

    <section id="content" class="clearfix home-content blog-header" role="main">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="header clearfix">
                <h1 class="entry-title">Blog</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
            </header>    
        </article>
    </section>   
    <div class="blog-content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
            <section class="entry-summary">
            <?php the_excerpt(); ?>
            <a class="readmore" href="<?php echo the_permalink(); ?>">Read post</a>
            </section>
        </article>
        <?php endwhile; endif; ?>
    </div>
    <?php get_sidebar(); ?>
    
=======
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php comments_template(); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</section>
<?php get_sidebar(); ?>
>>>>>>> origin/master
<?php get_footer(); ?>