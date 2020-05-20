<?php get_header(); ?>
    <main id="content">
        <h2><?php _e( 'Category:', 'newcss' ); ?> <?php single_cat_title(); ?></h2>
        <ul>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <li><a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark"><?php the_title(); ?></a> <small>(<time><?php the_date(); ?></time>)</small><br /><small><?php the_excerpt(); ?></small></li>
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
        
        <p><?php _e( 'No posts found', 'newcss' ); ?></p>
        
        <?php endif; ?>
    </main>
<?php get_footer(); ?>