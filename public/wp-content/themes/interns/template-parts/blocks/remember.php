<?php
if (!empty($is_preview)) :
    /* Render screenshot for example */
    $imgUrl = get_stylesheet_directory_uri() . '/template-parts/preview/remember.png';
    echo '<img src="' . $imgUrl . '">';
else:
    $title = get_field( 'title' );
    $heading = get_field( 'heading' );
    $date = get_field( 'date' );
    $content = get_field( 'content' );
    $image = get_field( 'image' );
    $button = get_field('button');
    $button_title = isset( $button['button_title'] ) ? $button['button_title'] : '';
    $url = isset( $button['url'] ) ? $button['url'] : '';
    
?>

<section class="remember bg-mint">
        <div class=" container py-4">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <figure>
                        <?php
                     echo wp_get_attachment_image( $image, 'full', false, array("class" => "img-fluid") ); ?>   
                    </figure>
                </div>
                <div class="col-lg-6 col-md-6">
                    <p class="fw-bold"><?php echo $title; ?></p>
                    <p class="fs-4"> <?php echo $heading; ?> </p>
                    <p class="text-primary"> <?php echo $date ?> </p>
                    <p> <?php echo $content; ?> </p>
                    <a href="<?php echo $url; ?>" class="nav-link text-dark"><button type="button" class="btn btn-outline-dark"> <?php echo $button_title;?>
                     <i class="bi bi-arrow-right"></i></button>
                    </a>

                </div>
            </div>
        </div>   
</section>

<?php endif; ?>
