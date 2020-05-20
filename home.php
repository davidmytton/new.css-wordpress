<?php
/**
 * The template for displaying the homepage.
 *
 * @package    newcss
 * @copyright  Copyright (c) 2020, David Mytton <david@davidmytton.co.uk> (https://davidmytton.blog)
 * @license    http://www.gnu.org/licenses/gpl-2.0.html GNU Public License
 */

get_header(); ?>
    <main id="content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h2><a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            <small><p><?php _e( 'Published', 'newcss' ); ?> <time><?php the_date(); ?></time> <?php _e( 'in', 'newcss' ); ?> <?php the_category(', '); ?>. <?php if (has_tag()): ?> <?php the_tags(); ?>.<?php endif; ?></p></small>
            <section>
                <?php the_excerpt(); ?>
            </section>
            <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail('post-thumbnail', [ 'alt' => get_the_title() ]);
            }
            ?>
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
        
        <p><?php _e( 'No posts found.', 'newcss' ); ?></p>
        
        <?php endif; ?>
    </main>
<?php get_footer(); ?>