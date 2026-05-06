<footer class="sticky-footer bg-white" style="margin-top: auto;">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; 2026 - Design By Wildan Tonoto Agung</span>
          </div>
        </div>
      </footer>
      </div>
    </div>
  <style>
    /* Pastikan pembungkus utama memiliki tinggi minimal satu layar penuh */
    #wrapper {
        display: flex;
        flex-direction: row;
        min-height: 100vh;
    }

    /* Content Wrapper harus fleksibel untuk mendorong footer */
    #content-wrapper {
        display: flex;
        flex-direction: column;
        width: 100%;
        min-height: 100vh;
    }

    /* Area konten utama akan mengambil semua sisa ruang yang ada */
    #content {
        flex: 1 0 auto;
    }

    /* Footer tidak akan menyusut */
    footer {
        flex-shrink: 0;
    }
  </style>

  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

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
          <a class="btn btn-primary" href="<?= base_url('auth/logout') ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <script src="<?= base_url(); ?>assets/js/sb-admin-2.min.js"></script>

  <script src="<?= base_url(); ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <script src="<?= base_url(); ?>assets/js/demo/datatables-demo.js"></script>

</body>
</html>