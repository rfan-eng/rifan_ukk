<div class="card">
  <h5 class="card-header"><?= $judul ?></h5>
  <div class="card-body">
		<form>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="dari">Dari</label>
						<input type="date" name="dari" id="dari" class="form-control">
					</div>
					<div class="form-group">
						<label for="sampai">Sampai</label>
						<input type="date" name="sampai" id="sampai" class="form-control">
					</div>
					<div class="form-group">
						<label for="id_paket">Paket</label>
						<select name="id_paket" id="id_paket" class="form-control">
							<option value="">Semua paket</option>
							<?php foreach ($paket as $row): ?>
								<option value="<?= $row['id_paket'] ?>"><?= $row['nama_paket'] ?></option>
								<?php endforeach ?>
						</select>
					</div>
					<div class="form-group">
						<label for="id_outlet">Outlet</label>
						<select name="id_outlet" id="id_outlet" class="form-control">
							<option value="">Semua Outlet</option>
							<?php foreach ($outlet as $row): ?>
								<option value="<?= $row['id_outlet'] ?>"><?= $row['nama'] ?></option>
								<?php endforeach ?>
						</select>
					</div>
					<div class="form-group">
						<label for="">Status Pembayaran</label>
							<select name="dibayar" id="dibayar" class="form-control" required="">
								<option value="dibayar">dibayar</option>
								<option value="belum_dibayar">belum_dibayar</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-gradient-info btn-fw">Submit</button>
						<a href="<?= base_url('laporan/laporan_pdf') ?>" target="blank_" class="btn btn-gradient-info btn-sm"><i class="mdi mdi-printer"></i></a>
					</div>
				</div>
			</div>
		</form>
		<hr>
	<table class="table table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>Tanggal</th>
			<th>Pelanggan</th>
      <th>Nama Paket</th>
      <th>Outlet</th>
      <th>Harga</th>
      <th>Terjual</th>
      <th>Pendapatan</th>
    </tr>	
  </thead>
			<tbody>
				<?php $index=1; foreach ($laporan as $row): ?>
					<tr>
						<td><?= $index++ ?></td>
						<td><?= $row['tgl'] ?></td>
						<td><?= $row['nama'] ?></td>
						<td><?= $row['nama_paket'] ?></td>
						<td><?= $row['nama_outlet'] ?></td>
						<td><?= "Rp." . number_format($row['harga']) ?></td>
						<td><?= $row['terjual'] ?></td>
						<td><?= "Rp." . number_format($row['pendapatan']) ?></td>
					</tr>
				<?php endforeach ?>	
			</tbody>
		</table>
  </div>
</div>
</div>