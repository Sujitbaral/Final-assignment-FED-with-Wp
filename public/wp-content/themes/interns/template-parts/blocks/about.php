<?php
if (!empty($is_preview)) :
    /* Render screenshot for example */
    $imgUrl = get_stylesheet_directory_uri() . '/template-parts/preview/about.png';
    echo '<img src="' . $imgUrl . '">';
else:
    $header = get_field( 'header' );
    $content = get_field( 'content' );
    $image_header = get_field( 'image_header' );
    $image = get_field( 'image' );
    $button = get_field('button');
    $button_tittle = isset( $button['button_tittle'] ) ? $button['button_tittle'] : '';
    $url = isset( $button['url'] ) ? $button['url'] : '';
    
?>

<section class="about-us">
    <div class=" bg-white">
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <p><?php echo $header; ?></p>
                    <p class="lead">  <?php echo $content; ?> </p>
                    <button type="button" class="btn btn-primary">
                        <a href="<?php echo $url; ?>" class="text-decoration-none text-white"><?php echo $button_tittle;?>  <i
                                class="bi bi-arrow-right"></i></a>
                    </button>
                </div>
                <div class="col-lg-4 col-md-4 image3">
                    <div class="bg-light d-flex align-items-center justify-content-center p-4">
                        <figure>
                            <figcaption class="fw-bold pb-2"><?php echo $image_header; ?></figcaption>
                                <?php
                                echo wp_get_attachment_image( $image, 'full', false, array("class" => "img-fluid") ); ?>
                        </figure>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<?php endif; ?>