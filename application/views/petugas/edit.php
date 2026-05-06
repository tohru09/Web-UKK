<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Petugas</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Data</h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url('petugas/proses_edit') ?>" method="post">
                
                <div class="form-group mb-3">
                    <label>ID Petugas</label>
                    <input type="text" name="id_pet" class="form-control" value="<?= $petugas['id_pet']; ?>" readonly>
                    <small class="text-danger">*ID tidak dapat diubah untuk menjaga relasi data.</small>
                </div>
                
                <div class="form-group mb-3">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" value="<?= $petugas['username']; ?>" required>
                </div>

                <div class="form-group mb-4">
                    <label>Password Baru (Kosongkan jika tidak ingin ganti)</label>
                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password Baru">
                </div>

                <div class="form-group mb-4">
                    <label>Level</label>
                    <select name="level" class="form-control" required>
                        <option value="OWNER" <?= ($petugas['level'] == 'OWNER') ? 'selected' : ''; ?>>OWNER</option>
                        <option value="ADMIN" <?= ($petugas['level'] == 'ADMIN') ? 'selected' : ''; ?>>ADMIN</option>
                        <option value="KASIR" <?= ($petugas['level'] == 'KASIR') ? 'selected' : ''; ?>>KASIR</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success shadow-sm">Simpan Perubahan</button>
                <a href="<?= base_url('petugas') ?>" class="btn btn-secondary shadow-sm">Batal</a>
            </form>
        </div>
    </div>
</div>