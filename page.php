<?php get_header(); ?>
   
    <?php if(is_front_page()) { ?>
    <section id="content" class="home-content" role="main">
    <?php } else { ?>
    <section id="content" role="main">
    <?php } ?>
       
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="header">
               
                <?php if(is_front_page()) { ?>
                    <h1 class="entry-title home-title"><?php the_title(); ?></h1>
                <?php } else { ?>
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                <?php } ?>
            </header>
            <section class="entry-content">
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                <?php the_content(); ?>
                <?php if(is_front_page()) { ?>
                    <a class="button" href="/?page_id=11">Book a show</a>
                    <a class="button invert trigger">Play Video</a>
                <?php } ?>
            </section>
        </article>
        <?php endwhile; endif; ?>
    </section>

<?php if(!is_front_page()) { ?>        

    <?php get_sidebar(); ?>
    
<?php } ?>

<?php get_footer(); ?>