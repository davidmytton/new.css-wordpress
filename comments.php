<?php
/**
 * The template for displaying the comments and comment form.
 *
 * @package    newcss
 * @copyright  Copyright (c) 2020, David Mytton <david@davidmytton.co.uk> (https://davidmytton.blog)
 * @license    http://www.gnu.org/licenses/gpl-2.0.html GNU Public License
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
    <aside>
        <h3><?php _e( 'Comments', 'newcss' ); ?></h3>
        <?php if ( have_comments() ) : ?>
        <ul>
            <?php wp_list_comments(); ?>
        </ul>

        <?php
        if ( get_next_comments_link() ) {
            next_comments_link();
        }
        ?>
        <?php
        if ( get_previous_comments_link() ) {
            previous_comments_link();
        }
        ?>
        <?php endif; ?>
        <?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p><?php _e( 'Comments are closed.', 'newcss' ); ?></p>
        <?php else: ?>
        <?php comment_form(); ?>
        <?php endif; ?>
    </aside>