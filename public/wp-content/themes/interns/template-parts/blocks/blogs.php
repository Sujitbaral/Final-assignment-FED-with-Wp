<?php
if (!empty($is_preview)) :
    /* Render screenshot for example */
    $imgUrl = get_stylesheet_directory_uri() . '/template-parts/preview/blogs.png';
    echo '<img src="' . $imgUrl . '">';
else:
    $title = get_field( 'title' );
    $header = get_field( 'header' );
    $first_paragraph = get_field( 'first_paragraph' );
    $second_paragraph = get_field( 'second_paragraph' );
    $image_header = get_field( 'image_header' );
    $image = get_field( 'image' );
    $button = get_field('button');
    $button_title = isset( $button['button_title'] ) ? $button['button_title'] : '';
    $url = isset( $button['url'] ) ? $button['url'] : '';
    
?>

<section class="blogs bg-white">
        <div class="container py-4">
            <div class="row blogs-content">
                <div class="col-lg-7 col-md-7 content-info">
                    <p class="fw-bold"><?php echo $title; ?></p>
                    <p class="fs-4"> <?php echo $header; ?> </p>
                    <p class="lead"> <?php echo $first_paragraph; ?>
                    </p>
                    <p> <?php echo $second_paragraph; ?>
                    </p>

                    <button type="button" class="btn btn-primary">
                        <a href="<?php echo $url; ?>" class="text-decoration-none text-light"> <?php echo $button_title;?> <i class="bi bi-arrow-right"></i></a>
                    </button>
                </div>
                <div class="col-lg-5 col-md-5 content-img">
                    <figure>
                    <?php
                      echo wp_get_attachment_image( $image, 'full', false, array("class" => "img-fluid") ); ?>
                    </figure>
                </div>
            </div>
        </div>
</section>

<?php endif; ?>