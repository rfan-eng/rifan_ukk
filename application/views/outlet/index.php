<div class="card">
  <h5 class="card-header"><?= $judul ?></h5>
	<div class="card-header">
		<a href="<?= base_url('outlet/tambah'); ?>" class="btn btn-gradient-info btn-fw"><i class="mdi mdi-plus"></i>Tambah Data</a>
	</div>
  <div class="card-body">

	<?php if ($message = $this->session->flashdata('message')): ?>
	<div class="alert alert-success">
		<strong>Berhasil</strong>
		<p><?= $message ?></p>
	</div>
	<?php endif ?>

	<table class="table table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col"><b><h5><center>No</center></h5></b></th>
      <th scope="col"><b><h5><center>Nama</center></h5></b></th>
      <th scope="col"><b><h5><center>Alamat</center></h5></b></th>
      <th scope="col"><b><h5><center>Telepon</center></h5></b></th>
      <th scope="col"><b><h5><center>Aksi</center></h5></b></th>
    </tr>	
  </thead>
	<tbody>
		
		<?php $index = 1; foreach ($outlet as $row): ?>
			<tr>
				<td><b><h5><center><?= $index++ ?></center></h5></b></td>
				<td><b><h5><center><?= $row['nama'] ?></center></h5></b></td>
				<td><b><h5><center><?= $row['alamat'] ?></center></h5></b></td>
				<td><b><h5><center><?= $row['tlp'] ?></center></h5></b></td>
				<td class="justify-content-center d-flex align-items-center">
					<a class="btn btn-outline-warning btn-sm col-3" href="<?= base_url('outlet/ubah/') . $row['id_outlet'] ?>"><i class="mdi mdi-pencil"></i></a>
					<a class="btn btn-outline-danger btn-sm col-3" oneclick="return confirm('Apakah Anda Yakin?')" href="<?= base_url('outlet/hapus/') . $row['id_outlet'] ?>"><i class="mdi mdi-eraser"></i></a>
				</td>
			</tr>
			<?php endforeach ?>
	</tbody>
</table>

  </div>
</div>