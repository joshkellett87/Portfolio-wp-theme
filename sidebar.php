<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?>

<div class="one-third column">
	<ul>
<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
	
					<?php endif; // end primary widget area ?>
	
	</ul>
</div>