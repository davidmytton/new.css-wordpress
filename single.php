<?php get_header(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    <article>
        <h2><?php the_title(); ?></h2>
        <small><p>Published <time><?php the_date(); ?></time> in <?php the_category(', '); ?>.</p></small>
        <?php
        if ( has_post_thumbnail() ) {
            the_post_thumbnail();
        }
        ?>
        <section>
            <?php the_content(); ?>
        </section>
    </article>
    
    <?php endwhile; ?>

    <aside>
        <h3>About the author</h3>
        <p><?php echo get_bloginfo('description'); ?> <a href="/start/">Read more</a>.</p>
    </aside>
    
    <?php endif; ?>
<?php get_footer(); ?>