<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

    <div class="row">
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <div class="card-body text-center" style="background-color: #ffffff;">
                    <div class="mt-3 mb-4">
                        <img src="<?= base_url('assets/img/wildan.jpg'); ?>" class="rounded-circle img-thumbnail shadow-sm" style="width: 150px; height: 150px; object-fit: cover;">
                    </div>
                    <h5 class="font-weight-bold text-primary mb-1"><?= $user['username']; ?></h5>
                    <p class="text-muted small mb-3 text-uppercase font-weight-bold"><?= $user['level']; ?></p>
                    <div class="d-flex justify-content-center mb-2">
                        <span class="badge badge-success px-3 py-2"><i class="fas fa-check-circle mr-1"></i> Akun Terverifikasi</span>
                    </div>
                </div>
                <div class="card-footer bg-white py-3">
                    <div class="row text-center">
                        <div class="col">
                            <div class="text-xs font-weight-bold text-primary text-uppercase">Status</div>
                            <div class="h6 mb-0 font-weight-bold text-gray-800">Aktif</div>
                        </div>
                        <div class="col border-left">
                            <div class="text-xs font-weight-bold text-primary text-uppercase">Lokasi</div>
                            <div class="h6 mb-0 font-weight-bold text-gray-800">Jambi</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-id-card mr-2"></i>Detail Informasi Petugas</h6>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-sm-3"><h6 class="mb-0 font-weight-bold">ID Petugas</h6></div>
                        <div class="col-sm-9 text-secondary"><?= $user['id_pet']; ?></div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <div class="col-sm-3"><h6 class="mb-0 font-weight-bold">Nama Lengkap</h6></div>
                        <div class="col-sm-9 text-secondary"><?= $user['username']; ?></div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <div class="col-sm-3"><h6 class="mb-0 font-weight-bold">Akses Sistem</h6></div>
                        <div class="col-sm-9"><span class="badge badge-info px-3"><?= $user['level']; ?></span></div>
                    </div>
                    <hr>
                    <div class="row mb-4">
                        <div class="col-sm-3"><h6 class="mb-0 font-weight-bold">Terakhir Login</h6></div>
                        <div class="col-sm-9 text-secondary"><?= date('d F Y, H:i'); ?> WIB</div>
                    </div>
                    
                    <h6 class="font-weight-bold small">Kelengkapan Data Profil <span class="float-right">85%</span></h6>
                    <div class="progress mb-4" style="height: 10px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="mt-4">
                        <a href="<?= base_url('petugas/edit/' . $user['id_pet']); ?>" class="btn btn-primary shadow-sm mr-2">
                            <i class="fas fa-edit fa-sm"></i> Perbarui Profil
                        </a>
                        <a href="<?= base_url('dashboard'); ?>" class="btn btn-light border shadow-sm">
                            Kembali ke Beranda
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>