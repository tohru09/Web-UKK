<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/sidebar'); ?>
<?php $this->load->view('templates/topbar'); ?>

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Obat</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_obat; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-pills fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Distributor</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_distributor; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-truck fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Kategori</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_kategori; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-tags fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-success">Selamat Datang di Sistem Inventaris Apotek</h6>
                </div>
                <div class="card-body">
                    <p>Halo <b><?= $this->session->userdata('username'); ?></b>, Anda login sebagai <b><?= $this->session->userdata('level'); ?></b>.</p>
                    <p>Gunakan menu sidebar di sebelah kiri untuk mengelola data master obat, distributor, dan mencetak laporan stok.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Informasi Sesi & Keamanan Akun</h6>
                </div>
                <div class="card-body">
                    <p>Anda sedang mengakses sistem menggunakan akun resmi <b>APP UKK APOTEK</b>. Pastikan untuk selalu melakukan <b>Logout</b> setelah selesai menggunakan aplikasi guna menjaga keamanan data inventaris.</p>
                    <p class="mb-0 text-muted italic">
                        <i class="fas fa-clock fa-sm"></i> Sesi login Anda aktif sejak: <?= date('d M Y - H:i'); ?> WIB.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('templates/footer'); ?>