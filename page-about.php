<?php get_header(); ?>
   
    <section id="content" role="main">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="header clearfix about-header">
                <img src="<?=get_bloginfo('template_directory');?>/images/cody.png" class="cody" />
                <h1 class="entry-title"><?php the_title(); ?></h1>
                <p><?php $key_name = get_post_custom_values($key = 'subtitle'); echo $key_name[0]; ?></p>
            </header>
            <div class="about clearfix">
                <img src="<?=get_bloginfo('template_directory');?>/images/cards.png" class="cards" />
                <section class="entry-content about-content">
                    <div class="inner-about-content">
                        <?php the_content(); ?>
                    </div>
                    <img src="<?=get_bloginfo('template_directory');?>/images/about-bottom.png" class="pretty-thing" />
                </section>
                <?php get_sidebar(); ?>
            </div>
        </article>
        <?php endwhile; endif; ?>
    </section>

<?php get_footer(); ?>