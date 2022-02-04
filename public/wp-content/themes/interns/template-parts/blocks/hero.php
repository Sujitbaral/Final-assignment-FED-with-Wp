<?php
if (!empty($is_preview)) :
    /* Render screenshot for example */
    $imgUrl = get_stylesheet_directory_uri() . '/template-parts/preview/hero.png';
    echo '<img src="' . $imgUrl . '">';
else:
    $imgcontent = get_field( 'image_side_by_side' );
    $first_image = isset( $imgcontent['first_image'] ) ? $imgcontent['first_image'] : '';
    $second_image = isset( $imgcontent['second_image'] ) ? $imgcontent['second_image'] : '';
    $header = get_field( 'header' );
    $content = get_field( 'content' );
    $mobile_header = get_field( 'mobile_header' );
    $mobile_content = get_field( 'mobile_content' );   
    $button = get_field('cta');
    $title = isset( $button['title'] ) ? $button['title'] : '';
    $url = isset( $button['url'] ) ? $button['url'] : '';
    
?>

<section class="head bg-blush">
    <div class="container py-4">
        <div class="row">
            <div class="col-lg-5 col-md-5">
                <figure>
                <?php
                echo wp_get_attachment_image( $first_image, 'full', '', array( "class" => "img-fluid") ); ?>
                </figure>
            </div>
            <div class="col-lg-7 col-md-7">
                <figure>
                   <?php
                   echo wp_get_attachment_image( $second_image, 'full', false, array("class" => "img-fluid mbl-hide" ) ); ?>
                </figure>
            </div>

            <div class="col-lg-8 col-md-12">
                <div class="mbl-hide border-top border-primary border-5 bg-white p-5">
                    <p class="fs-2"><?php echo $header; ?></p>
                    <p class="lead"><?php echo $content; ?></p>
                    <a href="<?php echo $url; ?>" class="text-white text-decoration-none">
                        <button type="button" class="btn btn-outline-dark" > <?php echo $title;?> <i class="bi bi-arrow-right"></i>
                        </button>
                    </a>

                </div>
                <div class="mbl-hero bg-white border-top border-primary border-5 p-5">
                    <p class="fs-2"> <?php echo $mobile_header; ?>
                    </p>
                    <p class="lead"> <?php echo $mobile_content; ?> </p>
                </div>                
            </div>
            <div class="col-md-4 d-lg-block d-md-none">
                <figure>
                <?php
                $third_image = get_field( 'third_image' );
                echo wp_get_attachment_image( $third_image, 'full', false, array("class" => "img-fluid mbl-hide image3") ); ?>
                </figure>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>