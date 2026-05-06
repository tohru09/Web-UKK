<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cetak Laporan Stok Obat - Apotek Wildan</title>
    <style>
        body { font-family: 'Times New Roman', Times, serif; color: #333; }
        .container { width: 90%; margin: auto; }
        
        /* Gaya KOP SURAT */
        .kop-surat { border-bottom: 3px double #000; padding-bottom: 10px; margin-bottom: 20px; text-align: center; }
        .kop-surat h2 { margin: 0; text-transform: uppercase; font-size: 24px; }
        .kop-surat p { margin: 5px 0 0 0; font-size: 14px; }
        
        /* Gaya Tabel */
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid #000; padding: 8px; text-align: left; font-size: 12px; }
        th { background-color: #f2f2f2; text-align: center; }
        .text-center { text-align: center; }
        
        /* Tanda Tangan */
        .ttd-container { margin-top: 40px; float: right; width: 250px; text-align: center; }
        .ttd-container p { margin: 0; font-size: 14px; }
        .space { height: 70px; }

        /* Sembunyikan tombol print saat dicetak */
        @media print {
            .no-print { display: none; }
        }
    </style>
</head>
<body onload="window.print()">
    <div class="container">
        <div class="kop-surat">
            <h2>APOTEK WILDAN</h2>
            <p>Jl. Lintas Batanghari, Jambi | Telp: (0741) 123456</p>
            <p>Email: support@apotekwildan.com</p>
        </div>

        <h3 class="text-center">LAPORAN DATA STOK OBAT</h3>
        <p style="font-size: 13px;">
            <b>Periode Kadaluarsa:</b> <?= date('d/m/Y', strtotime($_GET['tgl_mulai'])); ?> s/d <?= date('d/m/Y', strtotime($_GET['tgl_selesai'])); ?>
        </p>

        <table>
            <thead>
                <tr>
                    <th width="5%">No</th>
                    <th width="15%">Kode Obat</th>
                    <th width="30%">Nama Obat</th>
                    <th width="15%">Kategori</th>
                    <th width="10%">Stok</th>
                    <th width="25%">Tanggal Kadaluarsa</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach ($obat as $o) : ?>
                <tr>
                    <td class="text-center"><?= $no++; ?></td>
                    <td class="text-center"><?= $o['kode_obat']; ?></td>
                    <td><?= $o['nama_obat']; ?></td>
                    <td><?= $o['nama_kat']; ?></td>
                    <td class="text-center"><?= $o['jumlah']; ?></td>
                    <td class="text-center"><?= date('d F Y', strtotime($o['masa_expire'])); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="ttd-container">
            <p>Jambi, <?= date('d F Y'); ?></p>
            <p>Petugas Pengelola,</p>
            <div class="space"></div>
            <p><b>( <?= $this->session->userdata('username'); ?> )</b></p>
        </div>
    </div>
</body>
</html>