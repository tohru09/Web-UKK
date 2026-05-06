<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Distributor</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Data: <?= $distributor['nama_dist']; ?></h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url('distributor/proses_edit') ?>" method="post">
                <input type="hidden" name="id_dist" value="<?= $distributor['id_dist']; ?>">

                <div class="form-group mb-3">
                    <label>Nama Distributor</label>
                    <input type="text" name="nama_dist" class="form-control" value="<?= $distributor['nama_dist']; ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" rows="3" required><?= $distributor['alamat']; ?></textarea>
                </div>
                <div class="form-group mb-4">
                    <label>No. Telepon</label>
                    <input type="text" name="no_telp" class="form-control" value="<?= $distributor['no_telp']; ?>" required>
                </div>
                <button type="submit" class="btn btn-success shadow-sm">Simpan Perubahan</button>
                <a href="<?= base_url('distributor') ?>" class="btn btn-secondary shadow-sm">Batal</a>
            </form>
        </div>
    </div>
</div>