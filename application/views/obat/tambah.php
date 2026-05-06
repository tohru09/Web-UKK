<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Obat</h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url('obat/proses_tambah') ?>" method="post">
                <div class="form-group"><label>Kode Obat</label><input type="text" name="kode_obat" class="form-control" required></div>
                <div class="form-group"><label>Nama Obat</label><input type="text" name="nama_obat" class="form-control" required></div>
                
                <div class="form-group">
                    <label>Kategori</label>
                    <select name="id_kat" class="form-control" required>
                        <option value="">-- Pilih Kategori --</option>
                        <?php foreach($kategori as $k): ?>
                            <option value="<?= $k['id_kat'] ?>"><?= $k['nama_kat'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Distributor</label>
                    <select name="id_dist" class="form-control" required>
                        <option value="">-- Pilih Distributor --</option>
                        <?php foreach($distributor as $d): ?>
                            <option value="<?= $d['id_dist'] ?>"><?= $d['nama_dist'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Petugas</label>
                    <select name="id_pet" class="form-control" required>
                        <option value="">-- Pilih Petugas --</option>
                        <?php 
                        $data_petugas = $this->db->get('tbl_petugas')->result_array(); 
        
                        if(!empty($data_petugas)) :
                            foreach($data_petugas as $p) : 
                        ?>
                            <option value="<?= $p['id_pet']; ?>"><?= $p['username']; ?></option>
                        <?php 
                            endforeach; 
                        endif;
                        ?>
                    </select>
                </div>

                <div class="form-group"><label>Masa Expire</label><input type="date" name="masa_expire" class="form-control" required></div>
                <div class="form-group"><label>Harga</label><input type="number" name="harga" class="form-control" required></div>
                <div class="form-group"><label>Jumlah (Stok)</label><input type="number" name="jumlah" class="form-control" required></div>
                
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= base_url('obat') ?>" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>