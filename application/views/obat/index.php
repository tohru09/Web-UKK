<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Tabel Obat</h1>
  <p class="mb-4">Manajemen Data Obat Apotek</p>

  <?php if($this->session->flashdata('pesan')): ?>
    <div class="alert alert-success fade show py-2 mb-4" role="alert" style="font-size: 0.85rem;">
        <i class="fas fa-check-circle me-2"></i> <?= $this->session->flashdata('pesan'); ?>
    </div>
  <?php endif; ?>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Obat</h6>
      <br>
      <a href="<?= base_url('obat/tambah'); ?>" class="btn btn-primary btn-icon-split">
        <span class="icon text-white-50"><i class="fas fa-plus"></i></span>
        <span class="text">Tambah Obat</span>
      </a>
    </div>

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

          <thead>
            <tr>
              <th>No</th>
              <th>Kode Obat</th>
              <th>Nama Obat</th>
              <th>Distributor</th>
              <th>Kategori</th>
              <th>Petugas</th>
              <th>Masa Expire</th>
              <th>Harga</th>
              <th>Jumlah</th>
              <th>Aksi</th>
            </tr>
          </thead>

          <tfoot>
            <tr>
              <th>No</th>
              <th>Kode Obat</th>
              <th>Nama Obat</th>
              <th>Distributor</th>
              <th>Kategori</th>
              <th>Petugas</th>
              <th>Masa Expire</th>
              <th>Harga</th>
              <th>Jumlah</th>
              <th>Aksi</th>
            </tr>
          </tfoot>

          <tbody>
            <?php $i = 1; foreach ($obat as $o) : ?>
            <tr>

              <td><?= $i++; ?></td>

              <td><?= $o["kode_obat"]; ?></td>

              <td><?= $o["nama_obat"]; ?></td>

              <td><?= $o["nama_dist"]; ?></td>

              <td><?= $o["nama_kat"]; ?></td>

              <td><?= $o["username"]; ?></td>

              <td><?= $o["masa_expire"]; ?></td>

              <td>Rp <?= number_format($o["harga"],0,',','.'); ?></td>

              <td><?= $o["jumlah"]; ?></td>

              <td>

                <a href="<?= base_url('obat/edit/' . $o['kode_obat']); ?>" 
                   class="btn btn-success btn-circle btn-sm">
                  <i class="fas fa-edit"></i>
                </a>

                <a href="<?= base_url('obat/hapus/' . $o['kode_obat']); ?>" 
                   class="btn btn-danger btn-circle btn-sm"
                   onclick="return confirm('Hapus obat ini?')">
                  <i class="fas fa-trash"></i>
                </a>

              </td>

            </tr>
            <?php endforeach; ?>
          </tbody>

        </table>
      </div>
    </div>
  </div>
</div>