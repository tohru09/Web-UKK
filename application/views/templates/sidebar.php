  <!-- bagian sidebar -->
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard'); ?>">
      <div class="sidebar-brand-icon" style="margin-right: 5px;">
        <i class="fas fa-pills"></i>
        </div>
      <div class="sidebar-brand-text">APP APOTEK</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url(); ?>dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Data Master Tabel
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url(); ?>petugas">
            <i class="fas fa-fw fa-user"></i>
        <span>Data Petugas</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url(); ?>obat">
            <i class="fas fa-fw fa-capsules"></i>
        <span>Data Obat</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url(); ?>kategori">
            <i class="fas fa-fw fa-list-ul"></i>
        <span>Data Kategori</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url(); ?>distributor">
            <i class="fas fa-fw fa-truck"></i>
        <span>Data Distributor</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Master Laporan
      </div>

      <!-- Nav Item - Pages Collapse Menu -->

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>laporan">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Laporan</span></a>
      </li>

      <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
            <i class="fas fa-fw fa-sign-out-alt"></i> <span>Logout</span>
        </a>
    </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
</ul>
<!-- End of Sidebar -->