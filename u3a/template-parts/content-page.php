<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Humescores
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	
	
		<?php
		the_post_thumbnail('u3a-full-bleed');
		?>
	

		
	<div class="entry-content post-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'u3a' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content .post-content -->
	
	<?php
	get_sidebar( 'page' );
	?>
	

</article><!-- #post-## -->
