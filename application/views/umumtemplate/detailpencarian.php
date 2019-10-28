<?php $this->load->view('umumtemplate/header'); ?>
  <section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="span4">
          <div class="inner-heading">
            <h2>Detail Pencarian</h2>
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
      </div>
      <div class="row">
        <div class="span4">
          <aside class="left-sidebar">
            <div class="widget">
              <h5 class="widgetheading">Hasil Pencarian</h5>
              <?php foreach ($isi as $key => $data) {;?>
                <table>
                  <tr><td width="10%">NIK</td><td>:</td><td> <?= $data->nik ?> </td></tr>
                  <tr><td width="10%">Nama</td><td>:</td><td> <?= $data->namalengkap ?> </td></tr>
                  <tr><td width="10%">Alamat</td><td>:</td><td> <?= $data->alamat ?> </td></tr>
                  <tr><td width="10%">Foto</td><td>:</td></tr>
                  <tr><td colspan="3"><img src="<?=base_url()?>assets/<?= $data->foto ?>" alt="" class="img-polaroid" style="height: 200px;"/></td></tr>
                  <tr><td width="10%">Status</td><td>:</td><td> <?= $data->namastatus ?> </td></tr>

                </table>
                <br>
              <?php }; ?>
            </div>
          </aside>
        </div>
        <div class="span8">          
          <div class="widget">
            <h5 class="widgetheading">Status Menikah : </h5>
          </div>
          <div class="row">
            <?php foreach ($pasanganNikah as $key => $data) {;?>
              <div class="span2">
                <table>
                  <tr><td width="10%">NIK</td><td>:</td><td> <?= $data->nik ?> </td></tr>
                  <tr><td width="10%">Nama</td><td>:</td><td> <?= $data->namalengkap ?> </td></tr>
                  <tr><td width="10%">Foto</td><td>:</td></tr>
                  <tr><td colspan="3"><img src="<?=base_url()?>assets/<?= $data->foto ?>" alt="" class="img-polaroid" style="height: 200px;"/></td></tr>
                  <tr><td colspan="3">Menikah : <?=$data->tglnikah?></td></tr>
                </table>
              </div>
            <?php }; ?>
          </div>
          <div class="widget">
            <h5 class="widgetheading">Status Cerai : </h5>
          </div>
          <div class="row">
            <?php foreach ($pasanganCerai as $key => $data) {;?>
              <div class="span2">
                <table>
                  <tr><td width="10%">NIK</td><td>:</td><td> <?= $data->nik ?> </td></tr>
                  <tr><td width="10%">Nama</td><td>:</td><td> <?= $data->namalengkap ?> </td></tr>
                  <tr><td width="10%">Foto</td><td>:</td></tr>
                  <tr><td colspan="3"><img src="<?=base_url()?>assets/<?= $data->foto ?>" alt="" class="img-polaroid" style="height: 200px;"/></td></tr>
                </table>
              </div>
            <?php }; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php $this->load->view('umumtemplate/footer'); ?>