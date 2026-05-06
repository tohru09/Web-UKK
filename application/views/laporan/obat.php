<div class="container-fluid">
    <div class="card shadow">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Preview Laporan Stok Obat</h6>
            <a href="<?= base_url('laporan/cetak_obat') ?>" target="_blank" class="btn btn-sm btn-danger">
                <i class="fas fa-print"></i> Cetak ke PDF
            </a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama Obat</th>
                        <th>Stok</th>
                        <th>Expired</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach($obat as $o): ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $o['kode_obat'] ?></td>
                        <td><?= $o['nama_obat'] ?></td>
                        <td><?= $o['jumlah'] ?></td>
                        <td><?= date('d/m/Y', strtotime($o['masa_expire'])) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>