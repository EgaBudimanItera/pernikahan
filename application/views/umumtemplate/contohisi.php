
    <section id="featured">
      <!-- start slider -->
      <!-- Slider -->
      <div id="nivo-slider">
        <div class="nivo-slider" style="max-height: 450px">
          <!-- Slide #1 image -->
          <img src="<?=base_url()?>front/img/slides/banner/slide1.jpg" class="img-responsive" alt="" title="#caption-1" />
          <!-- Slide #2 image -->
          <img src="<?=base_url()?>front/img/slides/banner/slide2.jpg" alt=" " title="#caption-2" />
          <!-- Slide #3 image -->
          <img src="<?=base_url()?>front/img/slides/banner/slide3.jpg" alt="" title="#caption-3" />
        </div>
      </div>
      <!-- end slider -->
    </section>
    <section class="callaction">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="big-cta">
              <div class="cta-text" style="float: none">
                <h3 style="text-align: center">Kami Telah Melayani Pernikahan Sebanyak  <span class="highlight"><strong><?= $jumlah ?> Pernikahan</strong></span></h3>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row ijoin">
          <div class="span12">
            <div class="row">
              <div class="span3" data-target="#administrasi" data-toggle="modal">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon-briefcase icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6><font color="white">Prosedur Pernikahan</font></h6>
                    <p>
                      
                    </p>
                    <!-- <a href="#">Learn more</a> -->
                  </div>
                </div>
              </div>
              <div class="span3" data-target="#pelayanan" data-toggle="modal">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon-desktop icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6><font color="white">Pelayanan Ramah</font></h6>
                    <p>
                      <!-- Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis. -->
                    </p>
                    <!-- <a href="#">Learn more</a> -->
                  </div>
                </div>
              </div>
              <div class="span3" data-target="#pungli" data-toggle="modal">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon-beaker icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6><font color="white">Bebas Pungli</font></h6>
                    <p>
                      <!-- Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis. -->
                    </p>
                   <!--  <a href="#">Learn more</a> -->
                  </div>
                </div>
              </div>
              <div class="span3" data-target="#ibadah" data-toggle="modal">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon-coffee icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6><font color="white">Ibadah</font></h6>
                    <p>
                      <!-- Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis. -->
                    </p>
                    <!-- <a href="#">Learn more</a> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal -->
        <div id="administrasi" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="administrasiModalLabel" aria-hidden="true">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 id="administrasiModalLabel">Tata Cara Melakukan Pernikahan di KUA</h4>
          </div>
          <div class="modal-body">
            <img src="<?=base_url()?>front/img/alur.jpg">
          </div>
        </div>
        <div id="pelayanan" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="pelayananModalLabel" aria-hidden="true">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 id="pelayananModalLabel">Title</h4>
          </div>
          <div class="modal-body">
            <p>Body</p>
          </div>
        </div>
        <div id="pungli" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="pungliModalLabel" aria-hidden="true">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 id="pungliModalLabel">Title</h4>
          </div>
          <div class="modal-body">
            <p>Body</p>
          </div>
        </div>
        <div id="ibadah" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="ibadahModalLabel" aria-hidden="true">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 id="ibadahModalLabel">Title</h4>
          </div>
          <div class="modal-body">
            <p>Body</p>
          </div>
        </div>

        <!-- divider -->
        <div class="row ijoin">
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

