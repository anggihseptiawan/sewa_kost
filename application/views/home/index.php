<h5 class="text-center mb-3">Cari Kost</h5>
<h6><i class="fas fa-fw fa-filter text-primary" style="font-size: 12px;"></i> Filter Pencarian</h6>

<form action="<?=base_url("home/search")?>" method="post">
	<div class="form-group">
		<label for="exampleFormControlSelect1"><i class="fas fa-fw fa-male text-primary" style="font-size: 18px;"></i>
			Tipe kost</label>
		<select class="form-control" name="tipe_kost" id="exampleFormControlSelect1">
			<option value="">---</option>
			<option value="putra">Putra</option>
			<option value="putri">Putri</option>
			<option value="campur">Campur</option>
		</select>
	</div>
	<div class="form-group">
		<label for="exampleFormControlSelect2"><i class="far fa-fw fa-calendar-alt text-primary"></i> Tipe bayar</label>
		<select class="form-control" name="tipe_bayar" id="exampleFormControlSelect2">
			<option value="">---</option>
			<option value="1bulan">per 1 Bulanan</option>
			<option value="3bulan">per 3 Bulan</option>
			<option value="1tahun">per 1 Tahunan</option>
		</select>
	</div>
	<div class="form-group">
		<label for="exampleFormControlSelect2"><i class="fas fa-fw fa-hand-holding-usd text-primary"></i> Harga</label>
		<select class="form-control" name="harga" id="exampleFormControlSelect2">
			<option value="">---</option>
			<option value="murah">Murah</option>
			<option value="sedang">Sedang</option>
			<option value="mahal">Mahal</option>
		</select>
	</div>
	<div class="form-group">
		<p><i class="fas fa-fw fa-bed text-primary"></i> Fasilitas</p>
		<div class="custom-control custom-checkbox custom-control-inline">
			<input type="checkbox" class="custom-control-input" name="fasilitas[]" value="ac" id="customCheck1">
			<label class="custom-control-label" for="customCheck1">AC</label>
		</div>
		<div class="custom-control custom-checkbox custom-control-inline">
			<input type="checkbox" class="custom-control-input" name="fasilitas[]" value="tempat tidur" id="customCheck2">
			<label class="custom-control-label" for="customCheck2">Tempat tidur</label>
		</div>
		<div class="custom-control custom-checkbox custom-control-inline">
			<input type="checkbox" class="custom-control-input" name="fasilitas[]" value="kamar mandi dalam" id="customCheck3">
			<label class="custom-control-label" for="customCheck3">Kamar mandi dalam</label>
		</div>
		<div class="custom-control custom-checkbox custom-control-inline">
			<input type="checkbox" class="custom-control-input" name="fasilitas[]" value="wifi" id="customCheck5">
			<label class="custom-control-label" for="customCheck5">Wifi</label>
		</div>
		<div class="custom-control custom-checkbox custom-control-inline">
			<input type="checkbox" class="custom-control-input" name="fasilitas[]" value="kamar mandi luar" id="customCheck4">
			<label class="custom-control-label" for="customCheck4">Kamar mandi luar</label>
		</div>
	</div>
	<div class="form-group">
		<i class="fa fa-map-marker text-primary"></i> <label for="" class=""> Ketik alamat Anda</label>
			<input type="text" class="form-control"
				   placeholder="Temukan lokasi.." id="alamat" name="alamat" value="<?=$this->session->userdata("alamat")?>" required>
		<input type="hidden" id="latitude" name="latitude" value="<?=$this->session->userdata("latitude")?>" required>
		<input type="hidden" id="longitude" name="longitude" value="<?=$this->session->userdata("longitude")?>" required>
	</div>
	<br>
	<button class="btn btn-primary w-100 rounded-pill mb-2" type="submit" name="cari">CARI</button>
</form>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBHk3cqxCVMl-YTNuagHQm6AZBBQLfv9IE&libraries=places"
		type="text/javascript"></script>
<!-- AIzaSyDj-hFGBMNwgXz91WdQn5O1N6mgxKJcX1U -->
<!-- AIzaSyBHk3cqxCVMl-YTNuagHQm6AZBBQLfv9IE -->

<script type="text/javascript">
    function initialize() {
        var input = document.getElementById('alamat');
        var autocomplete = new google.maps.places.Autocomplete(input);
        var options = {
            componentRestrictions: {country: 'id'}
        };
        autocomplete.setOptions(options);
        google.maps.event.addListener(autocomplete, 'place_changed', function () {
            var place = autocomplete.getPlace();
            var lat = place.geometry.location.lat();
            var lng = place.geometry.location.lng();
            $("#latitude").val(lat);
            $("#longitude").val(lng);

        });
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>
