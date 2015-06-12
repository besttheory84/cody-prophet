<?php get_header(); ?>
<section id="content single-post" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="the-blog-content">
    <h1 class="entry-title"><?php the_title(); ?></h1>
<?php the_content(); ?>
<?php endwhile; endif; ?>
    </div>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>