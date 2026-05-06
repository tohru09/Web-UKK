<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Kategori</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Data: <?= $kategori['id_kat']; ?></h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url('kategori/proses_edit') ?>" method="post">
                <input type="hidden" name="id_kat" value="<?= $kategori['id_kat']; ?>">

                <div class="form-group mb-3">
                    <label>ID Kategori</label>
                    <input type="text" name="id_kat" class="form-control" value="<?= $kategori['id_kat']; ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label>Nama Kategori</label>
                    <textarea name="nama_kat" class="form-control" rows="3" required><?= $kategori['nama_kat']; ?></textarea>
                </div>
                <button type="submit" class="btn btn-success shadow-sm">Simpan Perubahan</button>
                <a href="<?= base_url('kategori') ?>" class="btn btn-secondary shadow-sm">Batal</a>
            </form>
        </div>
    </div>
</div>