<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package u3a
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>
    <header class="entry-header">
        <?php u3a_the_category_list(); ?>
        <?php
        if ( is_single() ) :
            the_title( '<h1 class="entry-title">', '</h1>' );
        else :
            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        endif;

        if ( 'post' === get_post_type() ) : ?>
        <div class="entry-meta">
            <?php  u3a_posted_by();
                  u3a_posted_on(); ?>
        </div><!-- .entry-meta -->
        <?php
        endif; ?>
    </header><!-- .entry-header -->

    <?php the_post_thumbnail('u3a-full-bleed');?>

    <section class="post-content">
        <?php
        if ( !is_active_sidebar( 'sidebar-1' ) ) : ?>
        <div class="post-content__wrap">
            <div class="entry-meta">
                <?php u3a_posted_on(); ?>
            </div><!-- .entry-meta -->
            <div class="post-content__body">
        <?php
        endif; ?>

            <div class="entry-content">
                <?php
                    the_content( sprintf(
                        /* translators: %s: Name of current post. */
                        wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'u3a' ), array( 'span' => array( 'class' => array() ) ) ),
                        the_title( '<span class="screen-reader-text">"', '"</span>', false )
                    ) );

                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'u3a' ),
                        'after'  => '</div>',
                    ) );
                ?>
            </div><!-- .entry-content -->

            <footer class="entry-footer">
                <?php u3a_entry_footer(); ?>
            </footer><!-- .entry-footer -->

            <?php
            if ( !is_active_sidebar( 'sidebar-1' ) ) : ?>
                </div><!-- .post-content__body -->
            </div><!-- .post-content__wrap -->
            <?php endif; ?>

            <?php

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
            ?>
        </section><!-- .post-content -->

    <?php
    get_sidebar();
    ?>
</article><!-- #post-## -->
