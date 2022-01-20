<?php
/**
 * The template for displaying all single posts
 *
 */

get_header();
echo "akd i";
exit;
while ( have_posts() ) :
	the_post();
	the_content();

	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile; // End of the loop.

get_footer();
