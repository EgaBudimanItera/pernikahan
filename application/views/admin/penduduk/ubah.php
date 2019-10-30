
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Mempelai</h1>
            
          </div>

          <!-- Content Row -->
         

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-6 col-lg-6">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Ubah Data Mempelai</h6>
                  <div class="dropdown no-arrow">
                    <div id="info-alert"><?=@$this->session->flashdata('msg')?></div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <form action="<?=base_url()?>penduduk/ubah" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputEmail1">NIK</label>
                      <input type="text" class="form-control" name="nik" id="exampleInputEmail1" value="<?=$isi->nik?>" readonly="" aria-describedby="emailHelp" placeholder="Masukkan NIK sesuai KTP">
                      
                    </div>
                    <!-- <div class="form-group">
                      <label for="exampleInputEmail1">No. KTP</label>
                      <input type="number" class="form-control no-spinner" name="no_ktp" id="exampleInputEmail1" value="<?=$isi->no_ktp?>" required="" aria-describedby="emailHelp" placeholder="Masukkan No KTP" autocomplete="off">    
                    </div> -->
                    <div class="form-group">
                      <label for="exampleInputPassword1">Nama Lengkap</label>
                      <input type="text" class="form-control" name="namalengkap" id="exampleInputPassword1" value="<?=$isi->namalengkap?>" required="" placeholder="Masukkan Nama sesuai KTP">
                    </div>
                    <!-- <div class="form-group">
                      <label for="exampleInputEmail1">Umur</label>
                      <input type="number" class="form-control no-spinner" name="umur" value="<?=$isi->umur?>" id="exampleInputEmail1" required="" aria-describedby="emailHelp" placeholder="Umur" autocomplete="off">    
                    </div> -->
                    <div class="form-group">
                      <label for="exampleInputPassword1">Tanggal Lahir</label>
                      <input type="text" class="form-control" name="tanggallahir" value="<?=$isi->tanggallahir?>" id="tglnikah" required="" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Pekerjaan</label>
                      <input type="text" class="form-control" name="pekerjaan" value="<?=$isi->pekerjaan?>" id="exampleInputPassword1" required="" placeholder="Masukkan Pekerjaan" autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Pendidikan</label>
                      <input type="text" class="form-control" name="pendidikan" value="<?=$isi->pendidikan?>" id="exampleInputPassword1" required="" placeholder="Masukkan Pendidikan Terakhir" autocomplete="off">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Alamat</label>
                      <textarea name="alamat" rows="5" class="form-control" required=""><?=$isi->alamat?></textarea>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Jenis Kelamin</label>
                      <select name="jk" class="form-control" required="">
                        <option value="">--Pilih Jenis Kelamin--</option>
                        <option value="Laki-Laki" <?php if($isi->jk == 'Laki-Laki') {echo ' selected="selected"';}else{echo '';} ;?>>Laki-Laki</option>
                        <option value="Perempuan" <?php if($isi->jk == 'Perempuan') {echo ' selected="selected"';}else{echo '';} ;?>>Perempuan</option>
                      </select>
                    </div>  

                    <div class="form-group">
                      <label for="exampleInputPassword1">Status Nikah</label>
                      <select name="statusnikah" class="form-control" required="">
                        <option value="">--Pilih Status Nikah--</option>
                        <?php
                        foreach($statusnikah as $s){
                        
                        ?>
                        <option value="<?=$s->idstatus?>" <?php if($isi->statusnikah == $s->idstatus) {echo ' selected="selected"';}else{echo '';} ;?>><?=$s->namastatus?></option>
                        <?php
                        }
                        ?>
                      </select>
                    </div>  

                    <div class="form-group">
                      <label for="exampleInputPassword1">Foto</label>
                      <input type="file" class="form-control" name="foto" id="file1preview" accept="image/*" >
                      <input type="hidden" class="form-control" name="foto2" value="<?=$isi->foto?>">
                    </div>


                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                          <i class="fas fa-save"></i>
                        </span>
                        <span class="text">Simpan</span>
                      </button>
                    </div>
                    
                  </form>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6">
              <div class="card shadow mb-4">
                <div class="card-body">
                  <div class="form-group"><center>
                      <img src="<?=base_url()?>assets/<?=$isi->foto?>" id="gambar1" style="width: 400px;height: 500px"  alt="Preview Gambar" /></center>
                  </div>
                </div>
              </div>
            </div>
          </div>

          
          

        </div>
        <!-- /.container-fluid -->

