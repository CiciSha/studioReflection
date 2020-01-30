    <!-- bagian konten -->
    <div class="site-blocks-cover overlay inner-page-cover" style="background-image: url('<?php echo base_url("./assets/image/paket/graduation.jpg") ?>');" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center" data-aos="fade-up">
            <h1>Welcome to Reflection Photography</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="site-block-profile-pic" data-aos="fade" data-aos-delay="200">
      <a href="about.html"><img src="<?php echo base_url("assets/image/pic.png") ?>" alt="Image"></a>
    </div>

    <div class="site-section" data-aos="fade">
      <div class="container">

        <div class="row mb-5">
          <div class="col-12">
            <h5 class="site-section-heading text-center">Mengapa Reflection Photography?</h5>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            <img style="max-width: 65px" src="<?php echo base_url('./assets/image/blog/photographer.png') ?>">
            <div class="text">
              <h3>Pengalaman Professional</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="col-md-3">
            <img style="max-width: 65px" src="<?php echo base_url('./assets/image/blog/photo-camera.png') ?>">
            <div class="text">
              <h3>Fotographer Berpengalaman</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="col-md-3">
            <img style="max-width:65px " src="<?php echo base_url('./assets/image/blog/studio.png') ?>">
            <div class="text">
              <h3>Studio Foto Premium</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="col-md-3">
            <img style="max-width: 65px" src="<?php echo base_url('./assets/image/blog/offer.png') ?>" >
            <div class="text">
              <h3>Harga Ekonomis</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- ================================================ -->



    <!-- ========================================================= -->


    <div class="site-section border-bottom">
      <div class="container">
        <div class="row text-center justify-content-center mb-5">
          <div class="col-md-7" data-aos="fade-up">
            <h2>Paket Foto</h2>
          </div>
        </div>

        <div class="row">
          <?php foreach ($paket as $key => $value): ?>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
              <a class="image-gradient" href="<?php echo base_url("member/detail_paket/$value[id_paket]") ?>" >
                <figure style="align-content: center;">
                  <img src="<?php echo base_url("./assets/image/paket/$value[foto_paket]") ?>" alt="" class="img-fluid">
                </figure>
                <div class="text">
                  <h3>Prewedding Indoor</h3>
                  <!-- <span>5 photos / Nature</span> -->
                </div>
              </a>
            </div>

          <?php endforeach ?>  
        </div>
      </div>
    </div>

    <!-- ==================================================================== -->
    <div class="py-5 site-block-testimonial" style="background-image: url('../assets/image/hero_bg_1.jpg');" data-stellar-background-ratio="0.5">
     <div class="container">
       <div class="row block-13 mb-5">
         <div class="col-md-12 text-center" data-aos="fade">
           <div class="nonloop-block-13 owl-carousel">
            <div class="block-testimony">
              <p class="small">Testimonial</p>
              <img src="<?php echo base_url("assets/image/person_1.jpg") ?>" alt="Image" class="img-fluid">
              <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident suscipit dicta repellat, sit aut at nulla quam sed, neque voluptatum deserunt, vero ipsum natus sint culpa illo. Vel, sed, assumenda.&rdquo;</p>
              <p class="small">&mdash; Marrygrace Woodland</p>
            </div>
            <div class="block-testimony">
              <p class="small">Testimonial</p>
              <img src="<?php echo base_url("assets/image/person_2.jpg") ?>" alt="Image" class="img-fluid">
              <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident suscipit dicta repellat, sit aut at nulla quam sed, neque voluptatum deserunt, vero ipsum natus sint culpa illo. Vel, sed, assumenda.&rdquo;</p>
              <p class="small">&mdash; Jean Doe</p>
            </div>
            <div class="block-testimony">
              <p class="small">Testimonial</p>
              <img src="<?php echo base_url("assets/image/person_3.jpg") ?>" alt="Image" class="img-fluid">
              <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident suscipit dicta repellat, sit aut at nulla quam sed, neque voluptatum deserunt, vero ipsum natus sint culpa illo. Vel, sed, assumenda.&rdquo;</p>
              <p class="small">&mdash; Ben Smith</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="py-3 mb-5 mt-5">
   <div class="container">
     <div class="row">
       <div class="col-md-12 d-md-flex align-items-center" data-aos="fade">
         <h2 class="text-black mb-5 mb-md-0 text-center text-md-left">Need a photographer?</h2>
         <div class="ml-auto text-center text-md-left">
          <a href="contact.html" class="btn btn-danger py-3 px-5 rounded">Contact Me</a>
        </div>
      </div>
    </div>
  </div>
</div>