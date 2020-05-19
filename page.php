<?php get_header(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    <main>
        <h2><?php the_title(); ?></h2>
        <?php
        if ( has_post_thumbnail() ) {
            the_post_thumbnail();
        }
        ?>
        <section>
            <?php the_content(); ?>
        </section>
    </main>
    
    <?php endwhile; ?>
    
    <?php endif; ?>
<?php get_footer(); ?>