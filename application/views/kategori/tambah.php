<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Kategori</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data</h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url('kategori/proses_tambah') ?>" method="post">
                <div class="form-group mb-3">
                    <label>Nama Kategori</label>
                    <input type="text" name="id_kat" class="form-control" placeholder="Masukkan ID Kategori" required>
                </div>
                <div class="form-group mb-3">
                    <label>Nama Kategori</label>
                    <textarea name="nama_kat" class="form-control" rows="3" placeholder="Masukkan Nama Kategori" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary shadow-sm">Simpan Data</button>
                <a href="<?= base_url('kategori') ?>" class="btn btn-secondary shadow-sm">Batal</a>
            </form>
        </div>
    </div>
</div>