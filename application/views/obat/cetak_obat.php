<!DOCTYPE html>
<html>
<head>
    <title>Cetak Laporan Data Obat</title>
    <style>
        body { font-family: sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #000; padding: 8px; text-align: left; }
        .header { text-align: center; margin-bottom: 30px; }
    </style>
</head>
<body onload="window.print()">
    <div class="header">
        <h2>APOTEK WILDAN</h2>
        <p>Jl. Batanghari, Jambi - Laporan Data Stok Obat</p>
        <hr style="border: 2px solid #000;">
    </div>

    <h3 style="text-align: center;">LAPORAN DATA OBAT</h3>
    <p>Tanggal Cetak: <?= date('d/m/Y H:i'); ?></p>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Obat</th>
                <th>Nama Obat</th>
                <th>Kategori</th>
                <th>Distributor</th>
                <th>Stok</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach($obat as $o): ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $o['kode_obat']; ?></td>
                <td><?= $o['nama_obat']; ?></td>
                <td><?= $o['nama_kat']; ?></td>
                <td><?= $o['nama_dist']; ?></td>
                <td><?= $o['jumlah']; ?></td>
                <td>Rp <?= number_format($o['harga'], 0, ',', '.'); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div style="margin-top: 50px; float: right; text-align: center;">
        <p>Jambi, <?= date('d F Y'); ?></p>
        <p>Petugas,</p>
        <br><br><br>
        <p><b>( <?= $this->session->userdata('username'); ?> )</b></p>
    </div>
</body>
</html>