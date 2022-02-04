<?php
if (!empty($is_preview)) :
    /* Render screenshot for example */
    $imgUrl = get_stylesheet_directory_uri() . '/template-parts/preview/3.png';
    echo '<img src="' . $imgUrl . '">';
else:
    $header = get_field( 'header' );
    $content = get_field( 'content' );
    $button = get_field('button');
    $button_title = isset( $button['button_title'] ) ? $button['button_title'] : '';
    $url = isset( $button['url'] ) ? $button['url'] : '';
    
?>

<section class="hiring-banner bg-blush">
    <div class="py-4">
        <div class="container">
            <p class="lead fw-bold"><?php echo $header; ?> </p>
            <p><?php echo $header; ?> </p>
            <button type="button" class="btn btn-primary">
                <a href="<?php echo $url; ?>" class="text-decoration-none text-white"><?php echo $button_title; ?> <i class="bi-arrow-right"></i></a>
            </button>
        </div>

    </div>
</section>
<?php endif; ?>