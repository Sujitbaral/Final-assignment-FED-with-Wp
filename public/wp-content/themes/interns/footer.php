<div class="footer py-4">
    <div class="container">
      <figure>
      <?php
            if ( function_exists( 'the_custom_logo' )) {
              the_custom_logo();
            }
            ?>
      </figure>
      <div class="links pt-5 pb-lg-5 pb-md-2">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-white">
            <p class="fw-bold">
            <?php wp_nav_menu(array('theme_location'=>'footer', 'menu_class'=> "fw-bold" ))
            ?>
            </p>
          </div>
        </div>
      </div>
      <div class="contact-form">
        <div class="row">
          <div class="col-lg-3 text-white">
            <p class="fw-bold">
            <?php echo get_theme_mod('intern-footer-contact-title'); ?>
            </p>
            <ul class="list-unstyled d-lg-block d-md-none">
              <li><a href="#" class="text-white"><?php echo get_theme_mod('intern-footer-contact-file'); ?></a></li>
            </ul>
          </div>
          <div class="col-lg-9 text-white pt-md-3">
            <p class="fst-italic">
              Sign-up for our newsletter:
            </p>
            <form class="row g-3">
              <div class="col-lg-7 col-md-10">
                <label for="inputImage" class="visually-hidden">Email</label>
                <input type="email" class="form-control bg-transparent text-white" id="inputEmail"
                  placeholder="Email address">
              </div>
              <div class="col-auto">
                <button type="submit" class="btn btn-outline-light mb-3">Submit <i
                    class="bi bi-arrow-right"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <p class="text-white pt-5"><?php echo get_theme_mod('intern-footer-copyright-frontline'); ?>
      </p>
    </div>
  </div>
  <?php wp_footer();?>
</body>

</html>