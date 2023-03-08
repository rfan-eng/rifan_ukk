<div class="card">
  <h5 class="card-header"><?= $judul ?></h5>
	<div class="card-header">
	</div>
  <div class="card-body">

	<?php if ($message = $this->session->flashdata('message')): ?>
	<div class="alert alert-success">
		<strong>Berhasil</strong>
		<p><?= $message ?></p>
	</div>
	<?php endif ?>

	<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th><b><h5><center>No</center></h5></b></th>
      <th><b><h5><center>Tgl</center></h5></b></th>
      <th><b><h5><center>Invoice</center></h5></b></th>
      <th><b><h5><center>Outlet</center></h5></b></th>
      <th><b><h5><center>Member</center></h5></b></th>
      <th><b><h5><center>User</center></h5></b></th>
      <th><b><h5><center>Batas Waktu</center></h5></b></th>
      <th><b><h5><center>Tanggal Bayar</center></h5></b></th>
      <th><b><h5><center>Status</center></h5></b></th>
      <th><b><h5><center>Total</center></h5></b></th>
      <th><b><h5><center>Aksi</center></h5></b></th>
    </tr>	
  </thead>
	<tbody>
		
		<?php $index = 1; foreach ($transaksi as $row): ?>
			<tr>
				<td><b><h5><center><?= $index++ ?></center></h5></b></td>
				<td><b><h5><center><?= $row['tgl'] ?></center></h5></b></td>
				<td><b><h5><center><?= $row['kd_invoice'] ?></center></h5></b></td>
				<td><b><h5><center><?= $row['nama_outlet'] ?></center></h5></b></td>
				<td><b><h5><center><?= $row['nama_member'] ?></center></h5></b></td>
				<td><b><h5><center><?= $row['username'] ?></center></h5></b></td>
				<td><b><h5><center><?= $row['batas_waktu'] ?></center></h5></b></td>
				<td><b><h5><center><?= $row['tgl_bayar'] ?></center></h5></b></td>
				<td><b><h5><center><?= $row['status'] ?></center></h5></b></td>
				<td><b><h5><center><?= "Rp." . Number_format($row['total_bayar']) ?></center></h5></b></td>
				<td class="justify-content-center d-flex align-items-center">
					<a class="btn btn-outline-warning btn-sm d-block" href="<?= base_url('transaksi/ubah/') . $row['id_transaksi'] ?>"><i class="mdi mdi-pencil"></i></a>
					<!-- <a class="btn btn-outline-danger btn-sm d-block" onclick="return confirm('Apakah Anda Yakin?')" href="<?= base_url('transaksi/hapus/') . $row['id_transaksi'] ?>"><i class="mdi mdi-eraser"></i></a> -->
					<a target="_blank" class="btn btn-outline-danger btn-sm d-block" href="<?= base_url('transaksi/cetak/') . $row['kd_invoice'] ?>"><i class="mdi mdi-printer"></i></a>
				</td>
			</tr>
			<?php endforeach ?>
	</tbody>
</table>

  </div>
</div>