<!DOCTYPE html>
<html lang="en">

<head>
    <meta chraset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <style>
        td {
            font-size: 12px;
            font-family: sans-serif;
        }

        h3 {
            font-size: 16px;
        }
        hr {
            border: 0;
            border-top: 2px solid #AEBAF8;

        }

        .tabel {
            border: 1px solid black;
            border-coLLapse: collapse;
        }

        th {
            font-family: sans-serif;
            font-size: 12px;
            background: lightblue;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <td width="400">
                <h3>Laundry</h3>
            </td>
            <td>
                <img scr="<?= base_url('assets/images/faces/cover.png')?>" width="100">
    </td>
        </tr>
            <td>Email : laundryapp@gmail.com</td>
        <tr>
            <td>Kode Invoice : <?= $transaksi['kd_invoice']?></td>
        </tr>

        <tr>
            <td>Tanggal Masuk : <?= $transaksi['tgl']?></td>
        </tr>

        <tr>
            <td>Batas Waktu : <?= $transaksi['batas_waktu']?></td>
        </tr>

        <tr>
            <td>Tanggal Bayar : <?= $transaksi['tgl_bayar']?></td>
        </tr>
        <tr>
            <td>Status : <?= $transaksi['status']?></td>
        </tr>
        <tr>
            <td>Nama Member : <?= $transaksi['nama']?></td>
        </tr>
        <tr>
            <td>Status Pembayaran : <?= $transaksi['dibayar']?></td>
        </tr>
    </table>

    <hr><br>

    <table width="700" class="tabel">
        <tr>
            <!-- <th class="tabel text-center">No</th> -->
            <th class="tabel text-center">Nama Paket</th>
            <th class="tabel text-center">Harga</th>
            <th class="tabel text-center">Qty</th>
            <th class="tabel text-center">Total</th>
            <!-- <th class="tabel text-center">Tanggal Masuk</th>
            <th class="tabel text-center">Tanggal Ambil</th>
            <th class="tabel text-center">Status Pembayaran</th>
            <th class="tabel text-center">Tanggal Pembayaran</th> -->
    </tr>   

    <tr>
        
        <td class="tabel"><?= $transaksi['nama_paket']?></td>
        <td class="tabel"><?= "Rp. " . number_format($transaksi['harga'])?></td>
        <td class="tabel"><?= $transaksi['qty']?></td>
        <td class="tabel"><?= "Rp. " . number_format($transaksi['total_bayar'])?></td>
        
    </tr>

    </table><br>

    <table>
        <tr>
            <td>Keterangan</td>
        </tr>
        <tr>
            <td>
                <p>1. Pengambilan cucian harus membawa nota</p>
                <p>2. Cuci luntur bukan tanggung jawab kami</p>
                <p>3. Hitung dan periksa sebelum pergi</p>
                <p>4. Klaim kekurangan/kehilangan cucian setelah meninggalkan laundry tidal dilayani</p>
            </td>
        </tr>
    </table>
    </body>
    </thml>
    <script>
        window.print();
</script>