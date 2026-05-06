<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Petugas</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data</h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url('petugas/proses_tambah') ?>" method="post">
                
                <div class="form-group mb-3">
                    <label>ID Petugas (Input Manual)</label>
                    <input type="text" name="id_pet" class="form-control" placeholder="Masukkan angka ID Petugas" required>
                </div>
                
                <div class="form-group mb-3">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Masukkan username" required>
                </div>

                <div class="form-group mb-4">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
                </div>

                <div class="form-group mb-4">
                    <label>Level</label>
                    <select name="level" class="form-control" required>
                        <option value="">-- Pilih Level --</option>
                        <option value="OWNER">OWNER</option>
                        <option value="ADMIN">ADMIN</option>
                        <option value="KASIR">KASIR</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary shadow-sm">Simpan Data</button>
                <a href="<?= base_url('petugas') ?>" class="btn btn-secondary shadow-sm">Batal</a>
            </form>
        </div>
    </div>
</div>