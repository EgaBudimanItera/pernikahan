
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
            <div class="col-xl-12 col-lg-12">
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
                  <form action="<?=base_url()?>user/ubah" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <input type="hidden" class="form-control no-spinner" value="<?=$isi->iduser?>" name="iduser" id="inputnama" required="" placeholder="Nama Lengkap" autocomplete="off">    
                    </div>
                    <div class="form-group">
                      <label for="inputnama">Nama Lengkap</label>
                      <input type="text" class="form-control no-spinner" value="<?=$isi->namalengkap?>" name="namalengkap" id="inputnama" required="" placeholder="Nama Lengkap" autocomplete="off">    
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Username</label>
                      <input type="text" class="form-control" value="<?=$isi->namauser?>" name="namauser" id="exampleInputPassword1" required="" placeholder="Username" autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" value="<?=$isi->password?>" name="password" required="" placeholder="">
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
          </div>

          
          

        </div>
        <!-- /.container-fluid -->

