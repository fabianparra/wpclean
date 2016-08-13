<?php get_header(); ?>
<header>
</header>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1><?php the_title(); ?></h1>
    <?php the_post_thumbnail(); ?>
    <?php the_content(); ?>
    <?php comment_form(); ?>
    <?php comments_template(); ?>
    <?php wp_list_comments(); ?>
    <?php paginate_comments_links(); ?>
</article>
<?php endwhile; else: ?>
<?php endif; ?>
<aside>
    <?php wp_link_pages(); ?>
    <?php the_tags(); ?>
    <?php if ( is_active_sidebar( 'main_sidebar' ) ) : ?>
        <?php dynamic_sidebar( 'main_sidebar' ); ?>
    <?php endif; ?>
</aside>
<?php the_posts_pagination( array(
    'mid_size' => 2,
    'prev_text' => __( 'Back', 'textdomain' ),
    'next_text' => __( 'Onward', 'textdomain' ),
) ); ?>
<?php get_footer(); ?>
