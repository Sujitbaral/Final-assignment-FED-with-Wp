<?php
if (!empty($is_preview)) :
    /* Render screenshot for example */
    $imgUrl = get_stylesheet_directory_uri() . '/template-parts/preview/client.png';
    echo '<img src="' . $imgUrl . '">';
else:
    $title = get_field( 'title' );
    $header = get_field( 'header' );
    $content = get_field( 'content' );
    $client_name = get_field( 'client_name' );
    $image = get_field( 'image' );

?>

<section class="client">
    <div class=" py-4">
        <div class="container m-auto text-center">
            <h1 class="display-6"><?php echo $title; ?></h1>
            <p class="lead pt-4">
            <?php echo $header; ?>
            </p>
            <figure>
            <?php
                 echo wp_get_attachment_image( $image, 'full', false, array("class" => "img-fluid pt-4 background") ); ?>
                    <p class="text-primary fs-4"><?php echo $client_name; ?></p> 
                    <p class="fs-5">
                        <span class="icon-LinkedIn text-primary"></span>
                        <span class="icon-Github text-primary"></span>
                        <span class="icon-Twitter text-primary"></span>
                        <span class="icon-Facebook text-primary"></span>
                    </p>
              
            </figure>
            <p class="client-message"><?php echo $content; ?></p>
        </div>
    </div>
</section>

<?php endif; ?>