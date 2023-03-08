<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<style type="text/css">
p{
margin: 5px 0 0 0;
}
p.footer{
text-align: right;
font-size: 11px;
border-top: 1px solid #D0D0D0;
line-height: 32px;
padding: 0 10px 0 10px;
margin: 20px 0 0 0;
display: block;
}
.bold{
font-weight: bold;
}
#footer {
clear: both;
position: relative;
height: 40px;
margin-top: -40px;
}
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
<body style="font-size: 12px">
<table width="100%" >
<tr>
<td width="50%"><img src="<?php echo base_url('assets/images/icon.png')?>" style="width: 50px;"></td>
<td align="right" valign="top"> <span style="font-size: 12px">LAUNDRY ASOY</span></td>
</tr>
</table>
<p align="center">
<span style="font-size: 18px"><b>Laporan Transaksi<br></b></span> <br>
</p>
<hr>
<p>
<table>
<tr>
<td align="left"> Outlet </td>
<td> : Unit Test</td>
</tr>
</table>
</p>
<p>
Daftar Laporan :
</p>
<p>
<table width="520" class="tabel">
    <tr>
        <th class="tabel text-center">No</th>
        <th class="tabel text-center">Tanggal</th>
        <th class="tabel text-center">Pelanggan</th>
        <th class="tabel text-center">Nama Paket</th>
        <th class="tabel text-center">Outlet</th>
        <th class="tabel text-center">Harga</th>
        <th class="tabel text-center">Terjual</th>
        <th class="tabel text-center">Pendapatan</th>
</tr> 
<?php $no = 1;
foreach ($laporan as $lpr) :
?>  
<tr>
    <td><?= $no++; ?></td>
    <td><?= $lpr->tgl ?></td>
    <td><?= $lpr->nama_member ?></td>
    <td><?= $lpr->nama_paket ?></td>
    <td><?= $lpr->nama_outlet ?></td>
    <td><?= $lpr->harga ?></td>
    <td><?= $lpr->qty ?></td>
    <td><?= $lpr->total_harga ?></td>
</tr>
<?php endforeach; ?>
</table>
</p>
<br>
<p>
Demikian struk Acara inl dibuat dengan sebenar-benarnya, untuk diketahui dan digunakan dengan semestinya.
</p>
<p>
</p>
<p class="footer">
<small>laundry</small>
</p>
</body>