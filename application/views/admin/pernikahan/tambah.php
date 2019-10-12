
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Pernikahan</h1>
            
          </div>

          <!-- Content Row -->
         

          <!-- Content Row -->
        <form action="<?=base_url()?>pernikahan/simpan" method="post" enctype="multipart/form-data">  
          <div class="row">
            <!-- Area Chart -->
            <div class="col-xl-6 col-lg-6">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data Suami</h6>
                  <div class="dropdown no-arrow">
                    
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIK</label>
                    <select name="niksuami" class="form-control" id="niksuami">
                        <option value="">--Pilih--</option>
                        <?php foreach($cowo as $co){
                        ?>
                        <option value="<?=$co->nik?>"><?=$co->nik?></option>
                        <?php
                        }?>
                        
                        
                    </select>
                    
                  </div>


                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Lengkap</label>
                    <input type="text" class="form-control" name="namalengkap" id="namasuami" required="" placeholder="Masukkan Nama sesuai KTP">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <textarea name="alamat" rows="5" class="form-control" required="" id="alamatsuami"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Jenis Kelamin</label>
                    <input type="text" class="form-control" name="jksuami" id="jksuami" required="" >
                  </div>  

                  
                  <div class="form-group"><center>
                      <img src="<?=base_url()?>assets/noimage.png" id="gambarsuami" style="width: 400px;height: 500px"  alt="Preview Gambar" /></center>
                  </div>

                  
                    
                  
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data Istri</h6>
                  <div class="dropdown no-arrow">
                    <div id="info-alert"><?=@$this->session->flashdata('msg')?></div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIK</label>
                    <select name="nikistri" class="form-control" id="nikistri" onchange="nikistri()">
                        <option value="">--Pilih--</option>
                        <?php foreach($cewe as $ce){
                        ?>
                        <option value="<?=$ce->nik?>"><?=$ce->nik?></option>
                        <?php
                        }?>
                        
                        
                    </select>
                    
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Lengkap</label>
                    <input type="text" class="form-control" name="namalengkap" id="namaistri" required="" placeholder="Masukkan Nama sesuai KTP">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <textarea name="alamat" rows="5" class="form-control" required="" id="alamatistri"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Jenis Kelamin</label>
                    <input type="text" class="form-control" name="jkistri" id="jkistri" required="" >
                  </div>  

                  
                  <div class="form-group"><center>
                      <img src="<?=base_url()?>assets/noimage.png" id="gambaristri" style="width: 400px;height: 500px"  alt="Preview Gambar" /></center>
                  </div>

                  
                    
                  
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data Pernikahan</h6>
                  <div class="dropdown no-arrow">
                    <div id="info-alert"><?=@$this->session->flashdata('msg')?></div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Penghulu</label>
                    <input type="text" class="form-control" name="namapenghulu" id="exampleInputEmail1" required="" aria-describedby="emailHelp" placeholder="Masukkan Nama Penghulu">
                    
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Pernikahan</label>
                    <input type="text" class="form-control" name="tglnikah" id="tglnikah" required="" placeholder="">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Lokasi Pernikahan</label>
                    <textarea name="lokasinikah" rows="5" class="form-control" required=""></textarea>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-icon-split">
                      <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                      </span>
                      <span class="text">Tambah</span>
                    </button>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </form>  

          
          

        </div>
        <!-- /.container-fluid -->

