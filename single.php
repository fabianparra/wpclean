<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
</article>
<?php endwhile; else: ?>
<p><?php _e('No Results'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>
