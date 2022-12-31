<div class="card">
	<div class="card-body">
		<form action="<?= base_url("admin/kelas/update") ?>" method="post" enctype="multipart/form-data">
			<input type="hidden" name="kelas_id" value="<?= $contents["kelas"]->kelas_id ?>" required>
			<div class="form-group">
				<label for="">Kode Kelas</label>
				<input type="text" name="kode_kelas" value="<?= $contents["kelas"]->kode_kelas ?>" class="form-control" required autofocus>
			</div>
			<div class="form-group">
				<label for="">Nama Kelas*</label>
				<select name="nama_kelas" id="" class="form-control select2" required>
					<option value="X" <?= $contents["kelas"]->nama_kelas == "I" ? "selected" : "" ?>>Kelas X</option>
					<option value="XI" <?= $contents["kelas"]->nama_kelas == "II" ? "selected" : "" ?>>Kelas XI</option>
					<option value="XII" <?= $contents["kelas"]->nama_kelas == "III" ? "selected" : "" ?>>Kelas XII
					</option>
				</select>
			</div>
			<div class="row">
				<div class="col-md-4">
					<center><label style="color: brown;" for="senin">SENIN</label></center>
				</div>
				<div class="col-md-4">
					<center><label style="color: brown;" for="senin">SELASA</label></center>
				</div>
				<div class="col-md-4">
					<center><label style="color: brown;" for="senin">RABU</label></center>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Masuk</label>
						<input type="time" name="jam_masuk1" class="form-control" value="<?= $contents["kelas"]->jam_masuk1 ?>" autocomplete="false">
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Pulang</label>
						<input type="time" name="jam_pulang1" class="form-control" value="<?= $contents["kelas"]->jam_pulang1 ?>" autocomplete="false">
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Masuk</label>
						<input type="time" name="jam_masuk2" class="form-control" value="<?= $contents["kelas"]->jam_masuk2 ?>" autocomplete="false">
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Pulang</label>
						<input type="time" name="jam_pulang2" class="form-control" value="<?= $contents["kelas"]->jam_pulang2 ?>" autocomplete="false">
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Masuk</label>
						<input type="time" name="jam_masuk3" class="form-control" value="<?= $contents["kelas"]->jam_masuk3 ?>" autocomplete="false">
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Pulang</label>
						<input type="time" name="jam_pulang3" class="form-control" value="<?= $contents["kelas"]->jam_pulang3 ?>" autocomplete="false">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<center><label style="color: brown;" for="senin">KAMIS</label></center>
				</div>
				<div class="col-md-4">
					<center><label style="color: brown;" for="senin">JUMAT</label></center>
				</div>
				<div class="col-md-4">
					<center><label style="color: brown;" for="senin">SABTU</label></center>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Masuk</label>
						<input type="time" name="jam_masuk4" class="form-control" value="<?= $contents["kelas"]->jam_masuk4 ?>" autocomplete="false">
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Pulang</label>
						<input type="time" name="jam_pulang4" class="form-control" value="<?= $contents["kelas"]->jam_pulang4 ?>" autocomplete="false">
					</div>
				</div>

				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Masuk</label>
						<input type="time" name="jam_masuk5" class="form-control" value="<?= $contents["kelas"]->jam_masuk5 ?>" autocomplete="false">
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Pulang</label>
						<input type="time" name="jam_pulang5" class="form-control" value="<?= $contents["kelas"]->jam_pulang5 ?>" autocomplete="false">
					</div>
				</div>

				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Masuk</label>
						<input type="time" name="jam_masuk6" class="form-control" value="<?= $contents["kelas"]->jam_masuk6 ?>" autocomplete="false">
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Pulang</label>
						<input type="time" name="jam_pulang6" class="form-control" value="<?= $contents["kelas"]->jam_pulang6 ?>" autocomplete="false">
					</div>
				</div>
			</div>
			<div class="form-group">
				<button class="btn btn-danger" type="reset">Reset</button>
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
		</form>
	</div>
</div>