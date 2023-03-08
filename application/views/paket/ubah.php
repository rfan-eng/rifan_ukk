<div class="card">
  <h5 class="card-header"><?= $judul ?></h5>
	<div class="card-header">
		<a href="<?= base_url('paket'); ?>" class="btn btn-gradient-dark btn-fw"><i class="mdi mdi-arrow-left"></i>Kembali</a>
	</div>
  <div class="card-body">

		<form method="post" action="<?= base_url('paket/ubah'); ?>">
			<div class="form-group">
				<label for="" class="fs-5"><b>ID Paket</b></label>
				<input type="number" name="id_paket" id="id_paket" class="form-control" placeholder="ID Paket" required="" value="<?= $paket['id_paket'] ?>" readonly>
			</div>
			<div class="form-group">
				<label for="" class="fs-5"><b>Outlet</b></label>
				<select name="id_outlet" id="id_outlet" class="form-control" required="">
				<option value="">Pilih Outlet</option>
				<?php foreach ($outlet as $row): ?>
					<option <?= $row['id_outlet'] == $paket['id_outlet'] ? 'selected' : '' ?> value="<?= $row['id_outlet'] ?>"><?= $row['nama'] ?></option>
				<?php endforeach ?>
				</select>
			</div>
			<div class="form-group">
				<label for="" class="fs-5"><b>Nama Paket</b></label>
				<input type="text" name="nama_paket" id="nama_paket" class="form-control" placeholder="Nama Paket" required="" value="<?= $paket['nama_paket'] ?>">
			</div>
			<div class="form-group">
				<label for="" class="fs-5"><b>Jenis</b></label>
				<select name="jenis" id="jenis" class="form-control" required="">
					<option <?= $paket['jenis'] == '' ? 'selected' : '' ?> value="">Pilih jenis</option>
					<option <?= $paket['jenis'] == 'kiloan'? 'selected' : '' ?> value="kiloan">kiloan</option>
					<option <?= $paket['jenis'] == 'selimut'? 'selected' : '' ?> value="selimut">selimut</option>
					<option <?= $paket['jenis'] == 'bed_cover'? 'selected' : '' ?> value="bed_cover">bed cover</option>
					<option <?= $paket['jenis'] == 'kaos'? 'selected' : '' ?> value="kaos">kaos</option>
					<option <?= $paket['jenis'] == 'lainyya'? 'selected' : '' ?> value="lainnya">lainnya</option>
				</select>
				<div class="form-group">
				<label for="" class="fs-5"><b>Harga</b></label>
				<input type="number" name="harga" id="harga" class="form-control" placeholder="Harga" required="" value="<?= $paket['harga'] ?>">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-gradient-info btn-rounded btn-fw">Submit</button>
			</div>
			</div>
		</form>

  </div>
</div>