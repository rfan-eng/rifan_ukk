<div class="card">
  <h5 class="card-header"><?= $judul ?></h5>
	<div class="card-header">
		<a href="<?= base_url('outlet'); ?>" class="btn btn-gradient-dark btn-fw"><i class="mdi mdi-arrow-left"></i>Kembali</a>
	</div>
  <div class="card-body">

		<form method="post" action="<?= base_url('outlet/ubah'); ?>">
			<div class="form-group">
				<label for="" class="fs-5"><b>ID outlet</b></label>
				<input type="number" name="id_outlet" id="id_outlet" class="form-control" placeholder="ID Outlet" required="" value="<?= $outlet['id_outlet'] ?>" readonly>
			</div>
			<div class="form-group">	
			<label for="" class="fs-5"><b>Nama Outlet</b></label>
				<input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Outlet" required="" value="<?= $outlet['nama'] ?>">
			</div>
			<div class="form-group">
				<label for="" class="fs-5"><b>Alamat</b></label>
				<input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat" required="" value="<?= $outlet['alamat'] ?>">
			</div>
				<div class="form-group">
				<label for="" class="fs-5"><b>Telepon</b></label>
				<input type="number" name="tlp" id="tlp" class="form-control" placeholder="Telepon" required="" value="<?= $outlet['tlp'] ?>">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-gradient-info btn-rounded btn-fw">Submit</button>
			</div>
			</div>
		</form>
	</div>