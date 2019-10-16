<?php $this->load->view('umumtemplate/header'); ?>
  <section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="span4">
          <div class="inner-heading">
            <h2>Pencarian</h2>
          </div>
        </div>
        <div class="span8">
          <ul class="breadcrumb">
            <li><a href="<?=base_url()?>"><i class="icon-home"></i> Home</a><i class="icon-angle-right"></i></li>
            <li class="active">Pencarian Status Pernikahan</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section id="content">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="widget">
            <form class="form-search" action="<?=base_url()?>pencarian/search" method="post">
              <input placeholder="Masukan NIK" name="nik" type="number" required class="input-medium search-query no-spinner" style="width: 90%">
              <button type="submit" class="btn btn-square btn-theme">Search</button>
            </form>
          </div>
        </div>
        <div class="span12">
          <p><strong>Hasil Pencarian NIK: <?= $keyword ?></strong></p>
        </div>
        <?php foreach ($isi as $key => $data) {;?>
          <div class="span3">
            <a href="<?=base_url()?>pencarian/detail?nik=<?= $data->nik ?>" style="color: #656565; text-decoration: none">              
              <img src="<?=base_url()?>assets/<?= $data->foto ?>" alt="" class="img-polaroid" />
              <div class="roles">
                <p>
                  <strong><?= $data->namalengkap ?></strong>
                </p>
                <p>
                <?= $data->nik ?> - <?= $data->jk ?>
                </p>
              </div>
            </a>
          </div>
        <?php }; ?>
      </div>
    </div>
  </section>
<?php $this->load->view('umumtemplate/footer'); ?>