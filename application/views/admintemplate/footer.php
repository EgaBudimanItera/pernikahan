        
      </div>
      <!-- End of Main Content -->
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?=base_url()?>back/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url()?>back/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?=base_url()?>back/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?=base_url()?>back/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?=base_url()?>back/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?=base_url()?>back/js/demo/chart-area-demo.js"></script>
  <script src="<?=base_url()?>back/js/demo/chart-pie-demo.js"></script>

  <!-- Page level plugins -->
  <script src="<?=base_url()?>back/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?=base_url()?>back/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  
  <!-- Select2 -->
  <script src="<?=base_url()?>back/select2/dist/js/select2.full.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>

  <!--datepicker-->
  <script type="text/javascript" src="<?php echo base_url() ?>back/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>


  <!-- Page level custom scripts -->
  <script src="<?=base_url()?>back/js/demo/datatables-demo.js"></script>
</body>

</html>

<script type="text/javascript">
  function bacaGambar1(input) {
     if (input.files && input.files[0]) {
        var reader = new FileReader();
   
        reader.onload = function (e) {
            $('#gambar1').attr('src', e.target.result);
        }
   
        reader.readAsDataURL(input.files[0]);
     }
  }
  $("#file1preview").change(function(){
      bacaGambar1(this);
  });

  
  $(function () {
    $('.select2').select2()
    // $( ".dropdown" ).select2({
    //   theme: "bootstrap"
    // })
  });

  $(document).ready(function(){
    
    //utils=================
    $("#niksuami").select2({
      theme: 'bootstrap4',
    });
    $("#nikistri").select2({
      theme: 'bootstrap4',
    });
    $('#tglnikah').datepicker({
     
      format: 'yyyy-mm-dd'
    });
// ================================================
    //onchange nik suami
    //untuk event onclick barang
    $("#niksuami").change(function () {     
        var kode = $(this).val();

      $.ajax({
          url: "<?=base_url()?>penduduk/getPenduduk/"+kode,
          type: 'GET',
          success: function(res) {
              var res_ = JSON.parse(res);
              $('#namasuami').val(res_.namalengkap);
              $('#alamatsuami').val(res_.alamat);
              $('#jksuami').val(res_.jk);
              $("#gambarsuami").attr('src','<?=base_url()?>assets/'+res_.foto);
          }
      })
    });

// ====================================================
    //onchange nik istri
    //untuk event onclick barang
    $("#nikistri").change(function () {     
        var kode = $(this).val();

      $.ajax({
          url: "<?=base_url()?>penduduk/getPenduduk/"+kode,
          type: 'GET',
          success: function(res) {
              var res_ = JSON.parse(res);
              $('#namaistri').val(res_.namalengkap);
              $('#alamatistri').val(res_.alamat);
              $('#jkistri').val(res_.jk);
              $("#gambaristri").attr('src','<?=base_url()?>assets/'+res_.foto);
          }
      })
    });
  });



</script>
