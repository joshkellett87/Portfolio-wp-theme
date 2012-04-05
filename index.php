<?php
/**
 * The main template file.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
 
get_header(); ?>
<br />
<h2 style="text-align: center;">The Blog</h2>
<h3 style="font-size:20px; text-align:center; margin:0 auto;">Thoughts from my head - Design, Marketing, Opinions.</h3>
    <?php get_template_part( 'loop', 'index' ); ?>
 
<?php get_footer(); ?>