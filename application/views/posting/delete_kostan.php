<form action="<?= base_url("post_iklan/delete_kost") ?>" method="POST">
	<h3 class="text-center text-danger">Konfirmasi Hapus Data Kostan</h3>
	<div class="form-group">
		<label for="nama_kost">Nama Kost</label>
		<input type="hidden" class="form-control" id="kost_id" name="kost_id" value="<?= $value->kostan_id ?>" required>
		<input type="text" class="form-control" id="nama_kost" name="nama_kost"
			   placeholder="Masukkan nama kost" value="<?= $value->nama_kost ?>" disabled>
	</div>
	<div class="form-group">
		<label for="exampleFormControlSelect1">Tipe kost</label>
		<select class="form-control" name="tipe_kost" id="exampleFormControlSelect1" disabled>
			<option value="putra" <?= $value->type_kost == 'putra' ? "selected" : "" ?> >Putra</option>
			<option value="putri" <?= $value->type_kost == 'putri' ? "selected" : "" ?>>Putri</option>
			<option value="campur" <?= $value->type_kost == 'campur' ? "selected" : "" ?>>Campur</option>
		</select>
	</div>
	<div class="form-group">
		<label for="exampleFormControlSelect2">Tipe bayar</label>
		<select class="form-control" name="tipe_bayar" id="exampleFormControlSelect2" disabled>
			<option value="1bulana" <?= $value->type_bayar_kost == '1bulana' ? "selected" : "" ?> >Per Bulanan</option>
			<option value="3bulana" <?= $value->type_bayar_kost == '3bulana' ? "selected" : "" ?> >per 3 Bulanan
			</option>
			<option value="1tahun" <?= $value->type_bayar_kost == '1tahun' ? "selected" : "" ?> >Per Tahunan</option>
		</select>
	</div>
	<div class="form-group">
		<label for="alamat">Alamat</label>
		<input type="text" class="form-control" id="_alamat_edit" name="alamat" value="<?= $value->alamat_kost ?>"
			   placeholder="Masukkan alamat" disabled>
	</div>
	<div class="form-group">
		<label for="">Latitude</label>
		<input type="text" class="form-control" id="_latitude" name="latitude"
			   placeholder="terisi otomatis" value="<?= $value->latitude ?>"
			   readonly>
	</div>
	<div class="form-group">
		<label for="">Longitude</label>
		<input type="text" class="form-control" id="_longitude" name="longitude"
			   placeholder="terisi otomaris" value="<?= $value->longitude ?>"
			   readonly>
	</div>
	<div class="form-group">
		<label for="no_telp">No. Telp</label>
		<input type="text" class="form-control" id="no_telp" name="no_telp" value="<?= $value->no_hp ?>"
			   placeholder="Masukkan no.telp" disabled>
	</div>
	<div class="form-group">
		<label for="harga">Harga</label>
		<input type="text" class="form-control" id="harga" name="harga" value="<?= $value->harga_kost ?>"
			   placeholder="Masukkan harga" disabled>
	</div>
	<div class="form-group">
		<p>Fasilitas</p>
		<?php
		$fasilitas = json_decode($value->fasilitas_kost);
		$fasilitas1 = isset($fasilitas[0]) ? $fasilitas[0] : "";
		$fasilitas2 = isset($fasilitas[1]) ? $fasilitas[1] : "";
		$fasilitas3 = isset($fasilitas[2]) ? $fasilitas[2] : "";
		$fasilitas4 = isset($fasilitas[3]) ? $fasilitas[3] : "";
		$fasilitas5 = isset($fasilitas[4]) ? $fasilitas[4] : "";
		?>
		<div class="custom-control custom-checkbox custom-control-inline">
			<input type="checkbox" class="custom-control-input" name="fasilitas1"
				   id="_customCheck1" value="ac" <?= $fasilitas1 == "ac" ? "checked" : "" ?> disabled>
			<label class="custom-control-label" for="_customCheck1">AC <?= $fasilitas1 ?></label>
		</div>
		<div class="custom-control custom-checkbox custom-control-inline">
			<input type="checkbox" class="custom-control-input" name="fasilitas2"
				   value="tempat tidur"
				   id="_customCheck2" <?= $fasilitas2 == "tempat tidur" ? "checked" : "" ?> disabled>
			<label class="custom-control-label" for="_customCheck2">Tempat tidur</label>
		</div>
		<div class="custom-control custom-checkbox custom-control-inline">
			<input type="checkbox" class="custom-control-input" name="fasilitas3"
				   value="kamar mandi dalam"
				   id="_customCheck3" <?= $fasilitas3 == "kamar mandi dalam" ? "checked" : "" ?> disabled>
			<label class="custom-control-label" for="_customCheck3">Kamar mandi dalam</label>
		</div>
		<div class="custom-control custom-checkbox custom-control-inline">
			<input type="checkbox" class="custom-control-input" name="fasilitas4" value="wifi"
				   id="_customCheck5" <?= $fasilitas4 == "wifi" ? "checked" : "" ?> disabled>
			<label class="custom-control-label" for="_customCheck5">Wifi</label>
		</div>
		<div class="custom-control custom-checkbox custom-control-inline">
			<input type="checkbox" class="custom-control-input" name="fasilitas5"
				   id="_customCheck4"
				   value="kamar mandi luar" <?= $fasilitas5 == "kamar mandi luar" ? "checked" : "" ?>>
			<label class="custom-control-label" for="_customCheck4">Kamar mandi luar</label>
		</div>
	</div>
	<div class="form-group">
		<label for="exampleFormControlTextarea1">Deskripsi</label>
		<textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsi"
				  rows="3" placeholder="Tulis deskripsi"disabled></textarea>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-danger btn-block rounded-pill">Hapus</button>
		<a href="<?=base_url("post_iklan/index/active")?>" class="btn btn-primary btn-block rounded-pill">Batal</a>
	</div>
</form>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBHk3cqxCVMl-YTNuagHQm6AZBBQLfv9IE&libraries=places"
		type="text/javascript"></script>
<script>
    // untuk modal edit
    function forModalInitialize() {
        var input = document.getElementById('_alamat_edit');
        var autocomplete = new google.maps.places.Autocomplete(input);
        var options = {
            componentRestrictions: {country: 'id'}
        };
        autocomplete.setOptions(options);
        google.maps.event.addListener(autocomplete, 'place_changed', function () {
            var place = autocomplete.getPlace();
            var lat = place.geometry.location.lat();
            var lng = place.geometry.location.lng();
            $("#_latitude").val(lat);
            $("#_longitude").val(lng);

        });
    }

    google.maps.event.addDomListener(window, 'load', forModalInitialize);
</script>
