<?php get_header(); ?>


<div class="contact-content py-5">
    <div class="container pt-5">
      <div class="row">
        <div class="col-lg-8 offset-lg-3 col-md-8 offset-md-4">
          <figure>
            <img class="figure-img img-fluid" src="images/contact/image1.jpg" alt="">
          </figure>
        </div>
        <div class="col-lg-8 col-md-8 contact-info px-5 py-4">
          <p class="fs-2 text-white">
            Contact Us
          </p>
          <p class="text-white">
            Ut posuere ullamcorper euismod. Donec a justo pulvinar diam dictum lobortis vulputate non nisi.
            Vestibulum pellentesque eget lorem ultrices lobortis.
          </p>
        </div>
        <div class="col-12 bg-white p-md-5">
          <form action="#">
            <div class="row pb-3">
              <div class="col-lg-4 col-md-6">
                <label for="inquiries" class="form-label fw-bold">
                  Let’s talk about
                </label>
                <select name="" id="inputInquiry" class="form-select border border-dark shadow-none">
                  <option selected>Project Inquiries</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
            </div>
            <div class="row pb-3">
              <div class="col-lg-4 col-md-6">
                <label for="firstname" class="form-label fw-bold">Firstname</label>
                <input type="text" class="form-control border border-dark shadow-none" id="firstname"
                  placeholder="jane">
              </div>
              <div class="col-lg-4 col-md-6">
                <label for="lastname" class="form-label fw-bold">Lastname</label>
                <input type="text" class="form-control border border-dark shadow-none" id="lastname" placeholder="doe">
              </div>
            </div>
            <div class="row pb-3">
              <div class="col-12">
                <label for="inputemail" class="form-label fw-bold">Email</label>
                <input type="email" class="form-control border border-dark shadow-none" id="inputEmail"
                  placeholder="jane@domain.com">
              </div>

            </div>
            <div class="row pb-3">
              <div class="col-12">
                <label for="inputmessage" class="form-label fw-bold">Message</label>
                <input type="text" class="form-control border border-dark shadow-none" id="inputMessage"
                  placeholder="how can we help?">
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <p>This site is protected by reCAPTCHA and the Google <a href="#">Privacy Policy</a> and
                  <a href="#">Terms of Serice</a> apply.
                </p>

              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <button type="submit" class="btn btn-outline-dark">Submit <i class="bi bi-arrow-right"></i></button>

              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>