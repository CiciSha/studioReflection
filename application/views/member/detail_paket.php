<div class="site-section border-bottom">
      <div class="container">
        <div class="row text-center justify-content-center mb-5">
          <div class="col-md-7" data-aos="fade-up">
            <h2><?php echo $paket[0]['nama_paket']; ?></h2>
          </div>
        </div>

        <div class="row">
          <?php foreach ($paket as $key => $value): ?>
            <div class="col-md-10 col-md-offset-3" data-aos="fade-up" data-aos-delay="300">
              <a class="image-gradient" href="" >
                <figure style="align-content: center;">
                  <img src="<?php echo base_url("./assets/image/tipe/$value[foto_tipe_paket]") ?>" alt="" class="img-fluid">
                </figure>
                <div class="text">
                  <h3><?php echo $value['nama_tipe_paket']; ?></h3>
                  <!-- <span>5 photos / Nature</span> -->
                </div>
              </a>
            </div>

          <?php endforeach ?>  
        </div>
      </div>
    </div>