<div class="card">
  <h5 class="card-header"><?= $judul ?></h5>
	<div class="card-header">
		<a href="<?= base_url('user'); ?>" class="btn btn-gradient-dark btn-fw"><i class="mdi mdi-arrow-left"></i>Kembali</a>
	</div>
  <div class="card-body">

		<form method="post" action="<?= base_url('user/ubah'); ?>">
			<div class="form-group">
				<label for="" class="fs-5"><b>ID User</b></label>
				<input type="number" name="id_user" id="id_user" class="form-control" placeholder="ID User" required="" value="<?= $user['id_user'] ?>" readonly>
			</div>
			<div class="form-group">
				<label for="" class="fs-5"><b>ID Outlet</b></label>
				<select name="id_outlet" id="id_outlet" class="form-control" required="">
					<option value="">Pilih Outlet</option>
				<?php foreach ($outlet as $row): ?>
					<option <?= $row['id_outlet'] == $user['id_outlet'] ? 'selected' : '' ?> value="<?= $row['id_outlet'] ?>"><?= $row['nama'] ?></option>
				<?php endforeach ?>
				</select>
			</div>
			<div class="form-group">
			<label for="" class="fs-5"><b>Nama User</b></label>
				<input type="text" name="nama" id="nama" class="form-control" placeholder="Nama User" required="" value="<?= $user['nama'] ?>">
			</div>
			<div class="form-group">
				<label for="" class="fs-5"><b>Username</b></label>
				<input type="text" name="username" id="username" class="form-control" placeholder="username" required="" value="<?= $user['username'] ?>">
			</div>
			<div class="form-group">
				<label for="" class="fs-5"><b>Password</b></label>
				<input type="text" name="password" id="password" class="form-control" placeholder="password">
			</div>
				<div class="form-group">
				<label for="" class="fs-5"><b>Role</b></label>
					<select name="role" id="role" class="form-control">
						<option <?= $user['role'] == 'admin' ? 'selcted' : '' ?> value="admin">Admin</option>
						<option <?= $user['role'] == 'kasir' ? 'selcted' : '' ?> value="kasir">Kasir</option>
						<option <?= $user['role'] == 'owner' ? 'selcted' : '' ?> value="owner">Owner</option>
					</select>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-gradient-info btn-rounded btn-fw">Submit</button>
			</div>
			</div>
		</form>

  </div>