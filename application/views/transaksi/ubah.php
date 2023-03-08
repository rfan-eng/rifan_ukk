<div class="card">
  <h5 class="card-header"><?= $judul ?></h5>
  <div class="card-body">
		<form method="post">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="">Kode Invoice</label>
					<input type="text" name="kd_invoice" id="kd_invoice" class="form-control" value="<?= $transaksi['kd_invoice'] ?>" readonly="">
				</div>
				<div class="form-group">
					<label for="">Tanggal</label>
					<input type="datetime-local" name="tgl" id="tgl" class="form-control" value=""<?= date('Y-m-d\TH:i:s', strtotime($transaksi['tgl'])) ?>  readonly="">
				</div>
				<div class="form-group">
					<label for="">Batas Waktu</label>
					<input type="datetime-local" name="batas_waktu" id="batas_waktu" class="form-control" value=""<?= date('Y-m-d\TH:i:s', strtotime($transaksi['batas_waktu'])) ?>  readonly="">
				</div>
				<div class="form-group">
					<label for="">Tanggal Bayar</label>
					<input type="datetime-local" name="tgl_bayar" id="tgl_bayar" class="form-control" value=""<?= date('Y-m-d\TH:i:s', strtotime($transaksi['tgl_bayar'])) ?>  readonly="">
				</div>
			</div>
			<div class="col-md-6">
			<div class="form-group">
				<label for="">Member</label>
				<input type="hidden" value="<?= $transaksi['id_member'] ?>" name="id_member">
				<select class="form-control member" disabled>
					<?php foreach ($member as $row): ?>
						<option <?= $row['id_member'] == $transaksi['id_member'] ? 'selected' : '' ?> value="<?= $row['id_member'] ?>"><?= $row['nama'] ?></option>
					<?php endforeach ?>
				</select>
			</div>
				<div class="form-group">
					<div class="form-group">
					<label for="">Status</label>
				<select name="status" id="status" class="form-control" required="">
					<option <?= $transaksi['status'] == 'baru' ? 'selected' : '' ?> value="baru">baru</option>
					<option <?= $transaksi['status'] == 'proses' ? 'selected' : '' ?> value="proses">proses</option>
					<option <?= $transaksi['status'] == 'selesai' ? 'selected' : '' ?> value="selesai">selesai</option>
					<option <?= $transaksi['status'] == 'diambil' ? 'selected' : '' ?> value="diambil">diambil</option>
				</select>
			</div>
			<div class="form-group">
				<label for="">Dibayar</label>
					<select name="dibayar" id="dibayar" class="form-control" required="">
						<option <?= $transaksi['dibayar'] == 'dibayar' ? 'selected' : '' ?> value="dibayar">dibayar</option>
						<option <?= $transaksi['dibayar'] == 'belum_dibayar' ? 'selected' : '' ?> value="belum_dibayar">belum_dibayar</option>
					</select>
				</div>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-gradient-info btn-fw">SUBMIT</button>
			</div>
		</div>
	</form>
</div>

<script>
	const base_url = '<?= base_url() ?>'
</script>