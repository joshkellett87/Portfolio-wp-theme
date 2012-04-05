<?php
/**
 * The loop that displays a single post.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.2
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<header>
				<h3><?php the_title(); ?></h3>

				<?php starkers_posted_on(); ?>
			</header>

			<?php the_content(); ?>
					
						<footer>
				<?php starkers_posted_in(); ?>
				<?php edit_post_link( __( 'Edit', 'starkers' ), '', '' ); ?>
			</footer>
				
		</article>

		<nav>
			<?php previous_post_link( '%link', '' . _x( '&larr;', 'Previous post link', 'starkers' ) . ' %title' ); ?>
			<?php next_post_link( '%link', '%title ' . _x( '&rarr;', 'Next post link', 'starkers' ) . '' ); ?>
		</nav>


<?php endwhile; // end of the loop. ?>