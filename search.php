<?php get_header(); ?>
    <h2>Search results: <?php get_search_query(); ?></h2>
    <ul>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <li><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a> <small>(<time><?php the_date(); ?></time>)</small><br /><small><?php the_excerpt(); ?></small></li>
        <?php endwhile; ?>
    </ul>

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