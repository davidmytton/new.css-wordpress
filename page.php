<?php
/**
 * The template for displaying a page.
 *
 * @package    newcss
 * @copyright  Copyright (c) 2020, David Mytton <david@davidmytton.co.uk> (https://davidmytton.blog)
 * @license    http://www.gnu.org/licenses/gpl-2.0.html GNU Public License
 */

get_header(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    <main id="content">
        <h2><?php the_title(); ?></h2>
        <?php
        if ( has_post_thumbnail() ) {
            the_post_thumbnail('post-thumbnail', [ 'alt' => get_the_title() ]);
        }
        ?>
        <section>
            <?php the_content(); ?>
        </section>
    </main>

    <?php wp_link_pages(); ?>
    
    <?php endwhile; ?>
    
    <?php endif; ?>
<?php get_footer(); ?>