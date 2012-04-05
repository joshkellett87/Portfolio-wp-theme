<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title><?php
 
    global $page, $paged;
 
    wp_title( '|', true, 'right' );
 
    bloginfo( 'name' );
 
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        echo " | $site_description";
 
    if ( $paged >= 2 || $page >= 2 )
        echo ' | ' . sprintf( __( 'Page %s', 'starkers' ), max( $paged, $page ) );
 
    ?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />




<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
 
<script src="<?php bloginfo('template_directory'); ?>/js/modernizr-1.6.min.js"></script>
 
<?php
    /* We add some JavaScript to pages with the comment form
     * to support sites with threaded comments (when in use).
     */
    if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );
 
    /* Always have wp_head() just before the closing </head>
     * tag of your theme, or you will break many plugins, which
     * generally use this hook to add elements to <head> such
     * as styles, scripts, and meta tags.
     */
    wp_head();
?>
</head>
 
<body <?php body_class(); ?>>
 
<body>
	<div class="container">
		<nav class="row sixteen columns">
			<ul class="sixteen columns">
				<li><a href="http://www.joshkellett.com" title="Home">Home</a></li>
				<li><a href="http://www.joshkellett.com/blog" title="My Blog">Blog</a></li>
				<li><a href="#" title="My Portfolio">Work</a></li>
				<li><a href="#" title="About Josh">About</a></li>
			</ul>
		</nav>
		
		<header class="row sixteen columns pagetop">
			<h1>Josh Kellett</h1>
			<h2>Web Design  <span class="blacktxt">///</span>  Social Media  <span class="blacktxt">///</span>  Content Creation</h2>
		</header>
		<br />
