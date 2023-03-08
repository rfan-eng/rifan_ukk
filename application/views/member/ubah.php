<div class="card">
  <h5 class="card-header"><?= $judul ?></h5>
	<div class="card-header">
		<a href="<?= base_url('member'); ?>" class="btn btn-gradient-dark btn-fw"><i class="mdi mdi-arrow-left"></i>Kembali</a>
	</div>
  <div class="card-body">

		<form method="post" action="<?= base_url('member/ubah'); ?>">
			<div class="form-group">
				<label for="" class="fs-5"><b>ID Member</b></label>
				<input type="number" name="id_member" id="id_member" class="form-control" placeholder="ID Member" required="" value="<?= $member['id_member'] ?>" readonly>
			</div>
			<div class="form-group">
			<label for="" class="fs-5"><b>Nama Member</b></label>
				<input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Member" required="" value="<?= $member['nama'] ?>">
			</div>
			<div class="form-group">
				<label for="" class="fs-5"><b>Alamat</b></label>
				<input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat" required="" value="<?= $member['alamat'] ?>">
			</div>
				<div class="form-group">
				<label for="" class="fs-5"><b>Telepon</b></label>
				<input type="number" name="tlp" id="tlp" class="form-control" placeholder="Telepon" required="" value="<?= $member['tlp'] ?>">
			</div>
				<div class="form-group">
				<label for="" class="fs-5"><b>Jenis Kelamin</b></label>
				<select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
					<option <?= $member['jenis_kelamin'] == 'L' ? 'selected' : '' ?> value="L">Laki - Laki</option>
					<option <?= $member['jenis_kelamin'] == 'P' ? 'selected' : '' ?> value="P">Perempuan</option>
				</select>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-gradient-info btn-rounded btn-fw">Submit</button>
			</div>
			</div>
		</form>

  </div>