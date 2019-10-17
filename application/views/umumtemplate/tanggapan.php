<?php $this->load->view('umumtemplate/header'); ?>
  <section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="span4">
          <div class="inner-heading">
            <h2>Tanggapan</h2>
          </div>
        </div>
        <div class="span8">
          <ul class="breadcrumb">
            <li><a href="<?=base_url()?>"><i class="icon-home"></i> Home</a><i class="icon-angle-right"></i></li>
            <li class="active">Beri Tanggapan</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section id="content">
    <div class="container">
      <div class="row">
        <div class="span12">
          <h4>Berikan Tanggapan Anda</h4>

          <form action="<?=base_url()?>tanggapan/simpan" method="post" role="form" class="contactForm">
            <div id="sendmessage">Tanggapan Anda Berhasil Dikirim, Terima Kasih</div>
            <div id="errormessage" style="display: none !important"></div>

            <div class="row">
              <div class="span6 form-group">
                <input type="text" name="nik" class="form-control" id="nik" placeholder="NIK" data-rule="minlen:10" data-msg="Silakan Input NIK Anda Dengan Benar" />
                <div class="validation"></div>
              </div>
              <div class="span6 form-group">
                <input type="text" class="form-control" name="namalengkap" id="nama" placeholder="Nama Lengkap" data-rule="minlen:4" data-msg="Silakan Input Nama Anda" />
                <div class="validation"></div>
              </div>
              <div class="span12 margintop10 form-group">
                <textarea class="form-control" name="isitanggapan" rows="12" data-rule="required" data-msg="Silakan Tuliskan Sesuatu Untuk Kami" placeholder="Tanggapan Anda"></textarea>
                <div class="validation"></div>
                <p class="text-center">
                  <button class="btn btn-large btn-theme margintop10" type="submit">Submit Tanggapan</button>
                </p>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
<?php $this->load->view('umumtemplate/footer'); ?>

<script src="<?=base_url()?>front/contactform/contactform.js"></script>