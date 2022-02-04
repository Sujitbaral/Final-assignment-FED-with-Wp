<?php
if (!empty($is_preview)) :
    /* Render screenshot for example */
    $imgUrl = get_stylesheet_directory_uri() . '/template-parts/preview/ourTeam.png';
    echo '<img src="' . $imgUrl . '">';
else:
    $title = get_field( 'title' );
    $header = get_field( 'header' );
    $content = get_field( 'content' );
    $image = get_field( 'image' );
    $button = get_field('button');
    $button_title = isset( $button['button_title'] ) ? $button['button_title'] : '';
    $url = isset( $button['url'] ) ? $button['url'] : '';
    
?>

<section class="team bg-blush">
    <div class="container py-4">
        <p class="fw-bold"><?php echo $title; ?></p>
        <div class="row bg-white border-top border-primary border-5">
            <div class="col-lg-5 col-md-5">
                <figure>
                    <?php
                    echo wp_get_attachment_image( $image, 'full', false, array("class" => "img-fluid") ); ?>
                </figure>
            </div>
            <div class="col-lg-7 col-md-7 align-self-center team-message">
                <p class="fs-4"><?php echo $header; ?></p>
                <p class="lead"><?php echo $content; ?></p>
                    <a href="<?php echo $url; ?>" class="nav-link text-dark">
                        <button type="button" class="btn btn-outline-dark"> <?php echo $button_title;?> <i class="bi bi-arrow-right"></i>
                        </button>
                    </a>

            </div>
        </div>
        <div class="d-flex flex-row justify-content-center mt-5">
            <i class="bi bi-circle-fill p-1"></i>
            <i class="bi bi-circle p-1"></i>
            <i class="bi bi-circle p-1"></i>
            <i class="bi bi-circle p-1"></i>
            
        </div>
    </div>
</section>

<?php endif; ?>