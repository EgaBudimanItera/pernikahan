<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pernikahan</h1>
  </div>

  <div class="row">
    <div class="col-xl-12 col-lg-12">
      <div class="card shadow mb-4">
        <div class="card-body">
          <form action="<?=base_url()?>pernikahan/ubah" method="post">
            <div class="row">
              <div class="col-xl-10 col-lg-10">
                <label for="exampleInputPassword1">Status Nikah</label>
                <select name="statusnikah" class="form-control select2" required="">
                  <option value="">--Pilih Status Nikah--</option>
                  <?php foreach($statusnikah as $s){ ?>
                    <option value="<?=$s->idstatus?>" 
                      <?php if($isi->statusnikah == $s->idstatus) {echo ' selected="selected"';}else{echo '';} ;?>><?=$s->namastatus?>
                    </option>
                  <?php } ?>
                </select>
              </div>
              <div class="col-xl-2 col-lg-2">
                </br>
                <button type="submit" class="btn btn-primary btn-icon-split" style="float: right">
                  <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                  </span>
                  <span class="text">Simpan</span>
                </button>
              </div>
            </div>

            <!-- Input Hidden -->
              <input type="hidden" class="form-control" name="idnikah" readonly  value="<?=$isi->idnikah?>">
              <input type="hidden" class="form-control" name="niksuami" readonly  value="<?=$isi->niksuami?>">
              <input type="hidden" class="form-control" name="nikistri" readonly  value="<?=$isi->nikistri?>">
            <!-- Input Hidden -->
          </form>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-lg-6">
      <div class="card shadow mb-4">
        <!-- Card Header -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Detail Suami</h6>
          <div class="dropdown no-arrow">
            <div id="info-alert"><?=@$this->session->flashdata('msg')?></div>
          </div>
        </div>

        <!-- Card Body -->
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">NIK</label>
            <input type="number" class="form-control no-spinner" name="nik" id="exampleInputEmail1" required="" aria-describedby="emailHelp" placeholder="Masukkan NIK sesuai KTP" readonly value="<?=$isi->niksuami?>">    
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Nama Lengkap</label>
            <input type="text" class="form-control" name="namalengkap" id="exampleInputPassword1" required="" placeholder="Masukkan Nama sesuai KTP" readonly value="<?=$isi->namasuami?>">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Alamat</label>
            <textarea name="alamat" rows="5" class="form-control" required="" readonly><?=$isi->alamatsuami?></textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Jenis Kelamin</label>
            <input type="text" class="form-control" name="jeniskelamin" readonly value="Laki-Laki">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Tanggal Lahir</label>
            <input type="text" class="form-control datepicker" name="tanggallahir" id="tglnikahsuami" readonly value="<?=$isi->tanggallahirsuami?>" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Pekerjaan</label>
            <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" readonly value="<?=$isi->pekerjaansuami?>" placeholder="Masukkan Pekerjaan" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Pendidikan</label>
            <input type="text" class="form-control" name="pendidikan" id="pendidikan" readonly value="<?=$isi->pendidikansuami?>" placeholder="Masukkan Pendidikan Terakhir" autocomplete="off">
          </div>
          <div class="form-group">              
            <div class="card shadow mb-4">
              <div class="card-body">
                <div class="form-group">
                  <center>
                    <img src="<?=base_url()?>assets/<?=$isi->fotosuami?>"  style="width: 100%; height: 100%" id="gambar1" alt="Preview Gambar" />
                  </center>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-lg-6">
      <div class="card shadow mb-4">
        <!-- Card Header -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Detail Istri</h6>
          <div class="dropdown no-arrow">
            <div id="info-alert"><?=@$this->session->flashdata('msg')?></div>
          </div>
        </div>

        <!-- Card Body -->
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">NIK</label>
            <input type="number" class="form-control no-spinner" name="nik" id="exampleInputEmail1" required="" aria-describedby="emailHelp" placeholder="Masukkan NIK sesuai KTP" readonly value="<?=$isi->nikistri?>">    
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Nama Lengkap</label>
            <input type="text" class="form-control" name="namalengkap" id="exampleInputPassword1" required="" placeholder="Masukkan Nama sesuai KTP" readonly value="<?=$isi->namaistri?>">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Alamat</label>
            <textarea name="alamat" rows="5" class="form-control" required="" readonly><?=$isi->alamatistri?></textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Jenis Kelamin</label>
            <input type="text" class="form-control" name="jeniskelamin" readonly value="Perempuan">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Tanggal Lahir</label>
            <input type="text" class="form-control datepicker" name="tanggallahir" id="tglnikahsuami" readonly value="<?=$isi->tanggallahiristri?>" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Pekerjaan</label>
            <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" readonly value="<?=$isi->pekerjaanistri?>" placeholder="Masukkan Pekerjaan" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Pendidikan</label>
            <input type="text" class="form-control" name="pendidikan" id="pendidikan" readonly value="<?=$isi->pendidikanistri?>" placeholder="Masukkan Pendidikan Terakhir" autocomplete="off">
          </div>
          <div class="form-group">              
            <div class="card shadow mb-4">
              <div class="card-body">
                <div class="form-group">
                  <center>
                    <img src="<?=base_url()?>assets/<?=$isi->fotoistri?>"  style="width: 100%; height: 100%" id="gambar1" alt="Preview Gambar" />
                  </center>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->