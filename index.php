    <?php get_header(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    <article>
        <h2><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h2>
        <section>
            <?php the_excerpt(); ?>
        </section>
    </article>
    
    <?php endwhile; ?>
    
    <?php
    if ( get_next_posts_link() ) {
    next_posts_link();
    }
    ?>
    <?php
    if ( get_previous_posts_link() ) {
    previous_posts_link();
    }
    ?>
    
    <?php else: ?>
    
    <p>No posts found. :(</p>
    
    <?php endif; ?>
    <?php get_footer(); ?>