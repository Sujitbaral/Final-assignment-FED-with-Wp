<?php 
   get_header();
   while ( have_posts() ) :
	the_post();
    the_content();
?>

<?php endwhile; ?>

<?php
get_footer();
?>