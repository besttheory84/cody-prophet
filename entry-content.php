<<<<<<< HEAD
<section class="entry-content clearfix`">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<?php the_content(); ?>
<a class="readmore" href="<?php echo the_permalink(); ?>">Read post</a>
=======
<section class="entry-content">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
>>>>>>> origin/master
</section>