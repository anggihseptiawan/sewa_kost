<h6>Edit info kost</h6>
<div class="form-group">
	<label for="nama_kost">Nama Kost</label>
	<input type="text" class="form-control" id="nama_kost" name="nama_kost"
		   placeholder="Masukkan nama kost" value="<?=$value->nama_kost?>">
</div>
<div class="form-group">
	<label for="exampleFormControlSelect1">Tipe kost</label>
	<select class="form-control" name="tipe_kost" id="exampleFormControlSelect1">
		<option value="putra" >Putra</option>
		<option value="putri">Putri</option>
		<option value="campur">Campur</option>
	</select>
</div>
<div class="form-group">
	<label for="exampleFormControlSelect2">Tipe bayar</label>
	<select class="form-control" name="tipe_bayar" id="exampleFormControlSelect2">
		<option value="1bulana">Per Bulanan</option>
		<option value="3bulana">per 3 Bulanan</option>
		<option value="1tahun">Per Tahunan</option>
	</select>
</div>
<div class="form-group">
	<label for="alamat">Alamat</label>
	<input type="text" class="form-control" id="_alamat" name="alamat" value="<?=$value->alamat_kost?>"
		   placeholder="Masukkan alamat">
</div>
<div class="form-group">
	<label for="">Latitude</label>
	<input type="text" class="form-control" id="latitude" name="latitude"
		   placeholder="terisi otomatis" value="<?=$value->latitude?>"
		   readonly>
</div>
<div class="form-group">
	<label for="">Longitude</label>
	<input type="text" class="form-control" id="longitude" name="longitude"
		   placeholder="terisi otomaris" value="<?=$value->longitude?>"
		   readonly>
</div>
<div class="form-group">
	<label for="no_telp">No. Telp</label>
	<input type="text" class="form-control" id="no_telp" name="no_telp" value="<?=$value->no_hp?>"
		   placeholder="Masukkan no.telp">
</div>
<div class="form-group">
	<label for="harga">Harga</label>
	<input type="text" class="form-control" id="harga" name="harga" value="<?=$value->harga_kost?>"
		   placeholder="Masukkan harga">
</div>
<div class="form-group">
	<p>Fasilitas</p>
	<div class="custom-control custom-checkbox custom-control-inline">
		<input type="checkbox" class="custom-control-input" name="fasilitas[]"
			   id="customCheck1" value="ac" <?=""?> >
		<label class="custom-control-label" for="customCheck1">AC</label>
	</div>
	<div class="custom-control custom-checkbox custom-control-inline">
		<input type="checkbox" class="custom-control-input" name="fasilitas[]"
			   value="tempat tidur"
			   id="customCheck2">
		<label class="custom-control-label" for="customCheck2">Tempat tidur</label>
	</div>
	<div class="custom-control custom-checkbox custom-control-inline">
		<input type="checkbox" class="custom-control-input" name="fasilitas[]"
			   value="kamar mandi dalam"
			   id="customCheck3">
		<label class="custom-control-label" for="customCheck3">Kamar mandi dalam</label>
	</div>
	<div class="custom-control custom-checkbox custom-control-inline">
		<input type="checkbox" class="custom-control-input" name="fasilitas[]" value="wifi"
			   id="customCheck5">
		<label class="custom-control-label" for="customCheck5">Wifi</label>
	</div>
	<div class="custom-control custom-checkbox custom-control-inline">
		<input type="checkbox" class="custom-control-input" name="fasilitas[]"
			   id="customCheck4"
			   value="kamar mandi luar">
		<label class="custom-control-label" for="customCheck4">Kamar mandi luar</label>
	</div>
</div>
<div class="form-group">
	<label for="exampleFormControlTextarea1">Deskripsi</label>
	<textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsi"
			  rows="3" placeholder="Tulis deskripsi"></textarea>
</div>
