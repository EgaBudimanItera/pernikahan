
    <section class="callaction">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="big-cta">
              <div class="cta-text">
                <h3>Kami Telah Melayani Pernikahan Sebanyak  <span class="highlight"><strong>5000 Pernikahan</strong></span> Tahun Ini!</h3>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="row">
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon-briefcase icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>Administrasi Pernikahan</h6>
                    <p>
                      Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                    </p>
                    <!-- <a href="#">Learn more</a> -->
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon-desktop icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>Pelayanan Ramah</h6>
                    <p>
                      Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                    </p>
                    <!-- <a href="#">Learn more</a> -->
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon-beaker icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>Bebas Pungli</h6>
                    <p>
                      Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                    </p>
                   <!--  <a href="#">Learn more</a> -->
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon-coffee icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>Ibadah</h6>
                    <p>
                      Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                    </p>
                    <!-- <a href="#">Learn more</a> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->
        <!-- Portfolio Projects -->
        <div class="row">
          <div class="span12">
            <h4 class="heading">Beberapa <strong>Pernikahan</strong></h4>
            <div class="row">
              <section id="projects">
                <ul id="thumbs" class="portfolio">
                
                <?php foreach ($isi as $key => $data) {;?>
                
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 design" data-id="id-<?= $key; ?>" data-type="web">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Pernikahan" href="<?=base_url()?>assets/<?= $data->fotosuami ?>">
                      <span class="overlay-img"></span>
                      <span class="overlay-img-thumb font-icon-plus"></span>
                    </a>
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Pernikahan" href="<?=base_url()?>assets/<?= $data->fotoistri ?>">
                      <span class="overlay-img"></span>
                      <span class="overlay-img-thumb font-icon-plus"></span>
                    </a>
                    <!-- Thumb Image and Description -->
                    <div class="row" style="display: inline-flex;">
                      <div class="col-md-6">
                        <img src="<?=base_url()?>assets/<?= $data->fotosuami ?>" alt="<?= $data->namasuami; ?> dan <?= $data->namaistri; ?>">
                      </div>
                      <div class="col-md-6">
                        <img src="<?=base_url()?>assets/<?= $data->fotoistri ?>" alt="<?= $data->namasuami; ?> dan <?= $data->namaistri; ?>">
                      </div>
                    </div>
                  </li>
                  <!-- End Item Project -->
                <?php }; ?>
                </ul>
              </section>
            </div>
          </div>
        </div>
        <!-- End Portfolio Projects -->
        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->
        
      </div>
    </section>

