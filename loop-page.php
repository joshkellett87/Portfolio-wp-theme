<?php
/**
 * The loop that displays a page.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.2
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header>
				<?php if ( is_front_page() ) { ?>
					<h3><?php the_title(); ?></h3>
				<?php } else { ?>	
					<h3><?php the_title(); ?></h3>
				<?php } ?>
			</header>				

				<?php the_content(); ?>
						
				<?php wp_link_pages( array( 'before' => '<nav>' . __( 'Pages:', 'starkers' ), 'after' => '</nav>' ) ); ?>
						
			<footer>
				<?php edit_post_link( __( 'Edit', 'starkers' ), '', '' ); ?>
			</footer>
		</article>

				<?php comments_template( '', true ); ?>

<?php endwhile; ?>