<?php
/**
 * The template for displaying a single posts.
 *
 * @package    newcss
 * @copyright  Copyright (c) 2020, David Mytton <david@davidmytton.co.uk> (https://davidmytton.blog)
 * @license    http://www.gnu.org/licenses/gpl-2.0.html GNU Public License
 */

get_header(); ?>
    <main id="content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h2><?php the_title(); ?></h2>
            <small><p><?php _e( 'Published', 'newcss' ); ?> <time><?php the_date(); ?></time><?php if (get_the_modified_date() != get_the_date()): ?> (<?php _e( 'updated', 'newcss' ); ?>: <time><?php the_modified_date(); ?></time>)<?php endif; ?> <?php _e( 'in', 'newcss' ); ?> <?php the_category(', '); ?>. <?php if (has_tag()): ?> <?php the_tags(); ?>.<?php endif; ?></p></small>
            <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail('post-thumbnail', [ 'alt' => esc_attr(get_the_title()) ]);
            }
            ?>
            <section>
                <?php the_content(); ?>
            </section>
        </article>

        <?php wp_link_pages(); ?>
        
        <?php endwhile; ?>

        <aside>
            <h3><?php _e( 'About the author', 'newcss' ); ?></h3>
            <p><?php echo get_bloginfo('description'); ?></p>
        </aside>
        
        <?php
        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;
        ?>
        <?php endif; ?>
    </main>
<?php get_footer(); ?>