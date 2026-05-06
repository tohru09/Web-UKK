<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Table Kategori</h1>
  <p class="mb-4">Manajemen Data Pemasok Apotek</p>

  <?php if($this->session->flashdata('pesan')): ?>
    <div class="alert alert-success fade show py-2 mb-4" role="alert" style="font-size: 0.85rem;">
        <i class="fas fa-check-circle me-2"></i> <?= $this->session->flashdata('pesan'); ?>
    </div>
  <?php endif; ?>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Kategori</h6>
      <br>
      <a href="<?= base_url('kategori/tambah'); ?>" class="btn btn-primary btn-icon-split">
        <span class="icon text-white-50"><i class="fas fa-plus"></i></span>
        <span class="text">Tambah Kategori</span>
      </a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>ID Kategori</th>
              <th>Nama Kategori</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>No</th>
              <th>ID Kategori</th>
              <th>Nama Kategori</th>
              <th>Aksi</th>
            </tr>
          </tfoot>
          <tbody>
            <?php $i = 1; foreach ($kategori as $d) : ?>
            <tr>
              <td><?= $i++; ?></td>
              <td><?= $d["id_kat"]; ?></td>
              <td><?= $d["nama_kat"]; ?></td>
              <td>
                <a href="<?= base_url('kategori/edit/' . $d['id_kat']); ?>" class="btn btn-success btn-circle btn-sm">
                  <i class="fas fa-edit"></i>
                </a>
                <a href="<?= base_url('kategori/hapus/' . $d['id_kat']); ?>" 
                   class="btn btn-danger btn-circle btn-sm" 
                   onclick="return confirm('Hapus kategori ini?')">
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