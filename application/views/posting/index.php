		<h6>Lengkapi informasi</h6>

		<form action="#" method="post">
			<div class="form-group">
				<label for="nama_kost">Nama Kost</label>
				<input type="text" class="form-control" id="nama_kost" name="nama_kost"
					placeholder="Masukkan nama kost">
			</div>
			<div class="form-group">
				<label for="exampleFormControlSelect1">Tipe kost</label>
				<select class="form-control" name="tipe_kost" id="exampleFormControlSelect1">
					<option>Putra</option>
					<option>Putri</option>
					<option>Campur</option>
				</select>
			</div>
			<div class="form-group">
				<label for="exampleFormControlSelect2">Tipe bayar</label>
				<select class="form-control" name="tipe_bayar" id="exampleFormControlSelect2">
					<option>Bulanan</option>
					<option>Tahunan</option>
				</select>
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat">
			</div>
			<div class="form-group">
				<label for="no_telp">No. Telp</label>
				<input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Masukkan no.telp">
			</div>
			<div class="form-group">
				<label for="harga">Harga</label>
				<input type="text" class="form-control" id="harga" name="harga" placeholder="Masukkan harga">
			</div>
			<div class="form-group">
				<p>Fasilitas</p>
				<div class="custom-control custom-checkbox custom-control-inline">
					<input type="checkbox" class="custom-control-input" name="ac" id="customCheck1">
					<label class="custom-control-label" for="customCheck1">AC</label>
				</div>
				<div class="custom-control custom-checkbox custom-control-inline">
					<input type="checkbox" class="custom-control-input" name="tmp_tidur" id="customCheck2">
					<label class="custom-control-label" for="customCheck2">Tempat tidur</label>
				</div>
				<div class="custom-control custom-checkbox custom-control-inline">
					<input type="checkbox" class="custom-control-input" name="km_dalam" id="customCheck3">
					<label class="custom-control-label" for="customCheck3">Kamar mandi dalam</label>
				</div>
				<div class="custom-control custom-checkbox custom-control-inline">
					<input type="checkbox" class="custom-control-input" name="wifi" id="customCheck5">
					<label class="custom-control-label" for="customCheck5">Wifi</label>
				</div>
				<div class="custom-control custom-checkbox custom-control-inline">
					<input type="checkbox" class="custom-control-input" name="km_luar" id="customCheck4">
					<label class="custom-control-label" for="customCheck4">Kamar mandi luar</label>
				</div>
			</div>
			<div class="form-group">
				<label for="exampleFormControlTextarea1">Deskripsi</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsi"
					rows="3"></textarea>
			</div>
			<button class="btn btn-primary w-100 rounded-pill my-2" type="submit" name="post_iklan">POST
				IKLAN</button>
		</form>