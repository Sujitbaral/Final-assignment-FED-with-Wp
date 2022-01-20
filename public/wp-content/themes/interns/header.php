<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(' | ', 'echo', 'right'); ?><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/scss/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/font.css">

</head>

<body>
  <header>
    <nav class="navbar navbar-expand navbar-light bg-white fixed-top">
      <div class="container align-items-center">
        <div class="logo">
          <a href="javascript:void(0)" class="text-dark fs-1 bar-list icon mt-3" onclick="hamburgermenu()"><i
              class="bi bi-list"></i></a>
          <a href="<?php echo site_url() ?>" class="navbar-brand">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo1.svg" alt="logo" width="120" height="60">
          </a>

        </div>
        <div>
          <a href="#" class="join-btn"><button type="button" class="btn btn-outline-dark">Join Us Now</button></a>
          <div class="navbar-nav nav-links " id="navigation">
            <a href="#" class="nav-link text-dark">About</a>
            <a href="<?php echo site_url('/blogs') ?>" class="nav-link text-dark">Blog</a>
            <a href="#" class="nav-link text-dark">Team</a>
            <a href="#" class="nav-link text-dark">Career</a>
            <a href="<?php echo site_url('/contact') ?>" class="nav-link text-dark">Contact</a>


          </div>
        </div>

      </div>
    </nav>
  </header>