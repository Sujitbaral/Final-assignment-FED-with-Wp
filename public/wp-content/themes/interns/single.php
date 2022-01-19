<?php 
   get_header();
   the_post();
?>
<main class="single-blog-body">
    <div class="bg-mint">
    <div class="blog-head container py-5">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <figure>
                    <img class="figure-img img-fluid" src="<?php the_post_thumbnail(); ?>">
                </figure>
            </div>
            <div class="col-lg-6 col-md-8 head-info p-lg-5 p-md-4">
                <p class="lead text-white">
                <?php the_title();?>

                </p>
            </div>
        </div>
    </div>
</div>
    <div class="single-blog-content bg-white row py-5">
       <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1">
       <?php the_content(); 
        ?>
       </div>
    </div>
    <div class="blog-note bg-white pt-5 pb-5">
        <div class="container">
            <p class="fw-bold">RELATED BLOGS</p>
            <div class="row g-4 cat-card py-5">
            <?php 
				                    	$args= array(
				                    	'post_type'=> 'blog',
				                    	'post_per_page'=> 3,

				                    	);
				                    	$the_query =new WP_Query($args);
				                    	?>
				                    	<?php if ($the_query->have_posts() ) : ?>
				                    	<?php while ($the_query-> have_posts()): $the_query-> the_post();?>

                <div class="col-lg-4 col-md-6">
                    <div class="cards p-0">
                        <a href="<?php the_permalink(); ?>" class="text-dark text-decoration-none">
                            <img class="card-img-top" src="<?php the_post_thumbnail(); ?>">
                            <div class="card-body">
                                <p class="card-title fw-bold">
                                <?php echo get_the_date();?> 
                                </p>
                                <p class="card-text">
                                    <?php the_title(); ?>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <?php endwhile; ?>
          <?php endif; ?>
            </div>
        </div>

    </div>
</main>
<?php 
get_footer();
?>