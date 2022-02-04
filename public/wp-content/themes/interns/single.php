<?php
 get_header();
while ( have_posts() ) : the_post(); ?>
<?php  the_title(); ?>
<?php the_content(); ?>
<?php endwhile; // end of the loop.
 get_footer(); ?>