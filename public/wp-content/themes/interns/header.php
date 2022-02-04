<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand navbar-light bg-white fixed-top">
      <div class="container align-items-center">
        <div class="logo">
          <a href="javascript:void(0)" class="text-dark fs-1 bar-list icon mt-3" onclick="hamburgermenu()"><i
              class="bi bi-list"></i></a>
          <a href="<?php echo site_url() ?>" class="navbar-brand">
            <?php
            if ( function_exists( 'the_custom_logo' )) {
              the_custom_logo();
            }
            ?>
          </a>

        </div>
        <div>
          <a href="#" class="join-btn"><button type="button" class="btn btn-outline-dark">Join Us Now</button></a>
          <div class="navbar-nav nav-links " id="navigation">
            <?php $menuParameters = array( 'theme_location'=>'primary',
                      'container'       => false,
                      'echo'            => false,
                      'items_wrap'      => '%3$s',
                      'depth'           => 0,
                    );
                    echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
            ?>

          </div>
        </div>

      </div>
    </nav>
  </header>