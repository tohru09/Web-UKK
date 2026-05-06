<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Distributor</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data</h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url('distributor/proses_tambah') ?>" method="post">
                <div class="form-group mb-3">
                    <label>Nama Distributor</label>
                    <input type="text" name="nama_dist" class="form-control" placeholder="Masukkan nama distributor" required>
                </div>
                <div class="form-group mb-3">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" rows="3" placeholder="Masukkan alamat lengkap" required></textarea>
                </div>
                <div class="form-group mb-4">
                    <label>No. Telepon</label>
                    <input type="text" name="no_telp" class="form-control" placeholder="Contoh: 08123456789" required>
                </div>
                <button type="submit" class="btn btn-primary shadow-sm">Simpan Data</button>
                <a href="<?= base_url('distributor') ?>" class="btn btn-secondary shadow-sm">Batal</a>
            </form>
        </div>
    </div>
</div>