<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Data Obat</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="<?= base_url('obat/proses_edit') ?>" method="post">
                <div class="form-group">
                    <label>Kode Obat</label>
                    <input type="text" name="kode_obat" class="form-control" value="<?= $obat['kode_obat']; ?>" readonly>
                </div>

                <div class="form-group">
                    <label>Nama Obat</label>
                    <input type="text" name="nama_obat" class="form-control" value="<?= $obat['nama_obat']; ?>" required>
                </div>
                
                <div class="form-group">
                    <label>Kategori</label>
                    <select name="id_kat" class="form-control" required>
                        <?php foreach($kategori as $k): ?>
                            <option value="<?= $k['id_kat'] ?>" <?= ($k['id_kat'] == $obat['id_kat']) ? 'selected' : ''; ?>>
                                <?= $k['nama_kat'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Distributor</label>
                    <select name="id_dist" class="form-control" required>
                        <?php foreach($distributor as $d): ?>
                            <option value="<?= $d['id_dist'] ?>" <?= ($d['id_dist'] == $obat['id_dist']) ? 'selected' : ''; ?>>
                                <?= $d['nama_dist'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Petugas</label>
                    <select name="id_pet" class="form-control" required>
                        <?php foreach($petugas as $d): ?>
                            <option value="<?= $d['id_pet'] ?>" <?= ($d['id_pet'] == $obat['id_pet']) ? 'selected' : ''; ?>>
                                <?= $d['username'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Masa Expire</label>
                    <input type="date" name="masa_expire" class="form-control" value="<?= $obat['masa_expire']; ?>" required>
                </div>

                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" name="harga" class="form-control" value="<?= $obat['harga']; ?>" required>
                </div>

                <div class="form-group">
                    <label>Jumlah (Stok)</label>
                    <input type="number" name="jumlah" class="form-control" value="<?= $obat['jumlah']; ?>" required>
                </div>
                
                <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                <a href="<?= base_url('obat') ?>" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>