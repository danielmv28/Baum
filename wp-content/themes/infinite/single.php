<?php
/**
 * The template for displaying all single posts and attachments
 */

get_header(); 

	while( have_posts() ){ the_post();

		$blog_style = infinite_get_option('general', 'blog-style', 'style-1');

	} // while
	

	get_footer(); 
?>

