
<?php
get_header();
?>

<div class="bg-mint">
    <div class="blog-header py-4">
      <div class="container blog-content">
        <div class="row">
          <div class="col-lg-8 col-md-8">
            <figure>
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/1.jpg" alt="">
            </figure>
          </div>

          <div class="col-lg-6 col-md-8 head-info p-lg-5 p-md-4">
            <p class="lead text-white">
              Vivamus vitae finibus dolor. Suspendisse finibus ante in sapien fermentum.
            </p>
          </div>

          <div class="col-lg-10 offset-lg-1">
            <div class="contact-box bg-white p-5">
              <p class="fw-bold">
                NOVEMBER 11, 2021
              </p>
              <p class="lead">
                Morbi pellentesque justo non magna iaculis efficitur in quis magna. Vivamus consectetur
                placerat iaculis. Aenean in orci et libero auctor elementum non in diam. Suspendisse vel
                urna luctus, tristique purus a, commodo metus. Nam commodo turpis eget magna placerat, quis
                molestie mauris volutpat
              </p>
              <a class="btn btn-outline-dark" href="#">Read More <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>
      </div>


    </div>
    <div class="blog-note bg-white pt-5 pb-5">
      <div class="container">
        <p class="fw-bold">MORE BLOG NOTES</p>
        <div class="category">
          <p>Cateogory:</p>
          <div class="cat-links">
            <a class="text-decoration-none text-dark fw-bold ps-3" href="#">NEWS</a>
            <a class="text-decoration-none text-dark fw-bold ps-3" href="#">TRAVEL</a>
            <a class="text-decoration-none text-dark fw-bold ps-3" href="#">BLOGS</a>
            <a class="text-decoration-none text-dark fw-bold ps-3" href="#">FACTS</a>
            <a class="text-decoration-none text-dark fw-bold ps-3" href="#">GLOBAL</a>
          </div>
        </div>
        <div class="cat-search row">
          <div class="col-lg-4 col-md-6">
            <form action="#">
              <div class="border border-primary rounded-pill d-flex">
                <label for="search-cat" class="visually-hidden">Category</label>
                <input class="form-control rounded-pill rounded-end shadow-none border-0" type="text" name="searchCat"
                  id="searchCat">
                <button class="btn rounded-pill rounded-start" type="submit"><i class="bi bi-search"></i></button>
              </div>
            </form>
          </div>
          <div class="col-auto offset-lg-6 offset-md-4">
            <p class="fw-bold mt-2 latest" onclick="dropdown()">LATEST <i class="bi bi-caret-down-fill"></i></p>
          </div>
          <div class="dropdown" id="dropdown">
            <ul class="list-group">
              <li class="bg-mint"><a href="#" class="fw-bold text-dark text-decoration-none">ALPHABETICAL
                  ORDER</a></li>
              <li class="list-group-item"><a href="#" class="fw-bold text-dark text-decoration-none">FEATURED</a></li>
              <li class="list-group-item"><a href="#" class="fw-bold text-dark text-decoration-none">LATEST</a></li>
              <li class="list-group-item"><a href="#" class="fw-bold text-dark text-decoration-none">OLDEST</a></li>
            </ul>
          </div>
        </div>
        <div class="cat-card row g-4 py-5">
          <div class="col-lg-4 col-md-6">
            <div class="cards">
              <a href="single-blog.html">
                <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/6.jpg" alt="">
              </a>
              <div class="card-body">
                <p class="card-title">
                  JUNE 11,2021
                </p>
                <p class="card-text">
                  Interesting Facts I Bet You Never Knew About BLOGS
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="cards">
              <a href="#">
                <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/5.jpg" alt="">
              </a>
              <div class="card-body">
                <p class="card-title">
                  JUNE 11,2021
                </p>
                <p class="card-text">
                  verything You Wanted to Know About BLOGS and Were Too EEmbarrassed to Ask </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="cards">
              <a href="#">
                <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/4.jpg" alt="">
              </a>
              <div class="card-body">
                <p class="card-title">
                  JUNE 11,2021
                </p>
                <p class="card-text">
                  What Can You Do To Save Your BLOGS From Destruction By Social Media?
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="cards">
              <a href="#">
                <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/7.jpg" alt="">
              </a>
              <div class="card-body">
                <p class="card-title">
                  JUNE 11,2021
                </p>
                <p class="card-text">
                  White Paper: Call to NASA for Low-Cost Innovation, New Talent Pipeline in Missions
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="cards">
              <a href="#">
                <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/2.jpg" alt="">
              </a>
              <div class="card-body">
                <p class="card-title">
                  JUNE 11,2021
                </p>
                <p class="card-text">
                  Becoming Friends with a Mars Rover
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="cards">
              <a href="#">
                <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/3.jpg" alt="">
              </a>
              <div class="card-body">
                <p class="card-title">
                  JUNE 11,2021
                </p>
                <p class="card-text">
                  Some Assembly Required: Documentation in Mars Rover Design
                </p>
              </div>
            </div>
          </div>
          <nav class="d-flex justify-content-center mt-5">
            <ul class="pagination">
              <li class="page-item"><a href="#"><i class="bi bi-arrow-left"></i></a></li>
              <li class="page-item"><a class="active" href="#">1</a></li>
              <li class="page-item"><a href="#">2</a></li>
              <li class="page-item"><a href="#">3</a></li>
              <li class="page-item"><a href="#">4</a></li>
              <li class="page-item"><a href="#">5</a></li>
              <li class="page-item"><a href="#">6</a></li>
              <li class="page-item"><a href="#">7</a></li>
              <li class="page-item"><a href="#"><i class="bi bi-arrow-right"></i></a></li>

            </ul>
          </nav>
        </div>
      </div>
    </div>
    <div class="bg-mint py-5">
      <div class="container">
        <p class="lead fw-bold">Proin pretium risus suscipit viverra mattis. Aliquam non nunc ligula.</p>
        <p>Integer at neque ac metus fringilla dapibus et eu eros.</p>
        <a class="btn btn-primary" href="#">Contact <i class="bi bi-arrow-right"></i></a>
      </div>
    </div>
  </div>


        <?php
    get_footer();
    ?>
