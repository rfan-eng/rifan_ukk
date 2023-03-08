<div class="card">
  <h5 class="card-header"><?= $judul ?></h5>
	<div class="card-header">
		<a href="<?= base_url('paket/tambah'); ?>" class="btn btn-gradient-info btn-fw"><i class="mdi mdi-plus"></i>Tambah Data</a>
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
    <th><b><h5><center>Nama</center></h5></b></th>
    <th><b><h5><center>Outlet</center></h5></b></th>
    <th><b><h5><center>Jenis</center></h5></b></th>
    <th><b><h5><center>Harga</center></h5></b></th>
    <th><b><h5><center>Aksi</center></h5></b></th>
    </tr>
  </thead>
	<tbody>
		
		<?php $index = 1; foreach ($paket as $row): ?>
			<tr>
				<td><b><h5><center><?= $index++ ?></center></h5></b></td>
				<td><b><h5><center><?= $row['nama_paket'] ?></center></h5></b></td>
				<td><b><h5><center><?= $row['nama'] ?></center></h5></b></td>
				<td><b><h5><center><?= $row['jenis'] ?></center></h5></b></td>
				<td><b><h5><center>><?= "Rp. " . number_format($row['harga']) ?></center></h5></b</td>
				<td class="justify-content-center d-flex align-items-center">
					<a class="btn btn-outline-warning btn-sm col-3" href="<?= base_url('paket/ubah/') . $row['id_paket'] ?>"><i class="mdi mdi-pencil"></i></a>
					<a class="btn btn-outline-danger btn-sm col-3" oneclick="return confirm('Apakah Anda Yakin?')" href="<?= base_url('paket/hapus/') . $row['id_paket'] ?>"><i class="mdi mdi-eraser"></i></a>
				</td>
			</tr>
			<?php endforeach ?>
	</tbody>
</table>

  </div>
</div>