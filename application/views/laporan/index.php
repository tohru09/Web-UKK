<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Laporan Data Obat</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-primary">
            <h6 class="m-0 font-weight-bold text-white">Filter Masa Kadaluarsa</h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url('laporan/index'); ?>" method="get" class="row align-items-end">
                <div class="col-md-3">
                    <label class="small font-weight-bold">Dari Tanggal:</label>
                    <input type="date" name="tgl_mulai" class="form-control" value="<?= $tgl_mulai; ?>">
                </div>
                <div class="col-md-3">
                    <label class="small font-weight-bold">Sampai Tanggal:</label>
                    <input type="date" name="tgl_selesai" class="form-control" value="<?= $tgl_selesai; ?>">
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary shadow-sm">
                        <i class="fas fa-search fa-sm"></i> Filter
                    </button>
                    
                    <a href="<?= base_url('laporan/cetak_obat?tgl_mulai='.$tgl_mulai.'&tgl_selesai='.$tgl_selesai); ?>" 
                       target="_blank" class="btn btn-danger shadow-sm">
                        <i class="fas fa-print fa-sm"></i> Cetak PDF
                    </a>

                    <?php if($tgl_mulai): ?>
                        <a href="<?= base_url('laporan'); ?>" class="btn btn-secondary shadow-sm">Reset</a>
                    <?php endif; ?>
                </div>
            </form>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary"><?= $status_laporan; ?></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Obat</th>
                            <th>Nama Obat</th>
                            <th>Stok</th>
                            <th>Tanggal Kadaluarsa</th>
                            <th>Distributor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(empty($obat)): ?>
                            <tr><td colspan="6" class="text-center">Data obat tidak ditemukan.</td></tr>
                        <?php else: ?>
                            <?php $no=1; foreach($obat as $o): ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $o['kode_obat']; ?></td>
                                <td><?= $o['nama_obat']; ?></td>
                                <td><?= $o['jumlah']; ?></td>
                                <td>
                                    <?php 
                                    $today = date('Y-m-d');
                                    $expired = $o['masa_expire'];
                                    $color = ($expired < $today) ? 'text-danger font-weight-bold' : '';
                                    ?>
                                    <span class="<?= $color; ?>"><?= date('d/m/Y', strtotime($expired)); ?></span>
                                </td>
                                <td><?= $o['nama_dist']; ?></td>
                            </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>