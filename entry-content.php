<section class="entry-content clearfix`">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<?php the_content(); ?>
<a class="readmore" href="<?php echo the_permalink(); ?>">Read post</a>
</section>