<nav>
	<div class="nav nav-tabs w-100" id="nav-tab" role="tablist">
		<a class="nav-item nav-link active w-50 text-center" id="nav-home-tab" data-toggle="tab" href="#nav-home"
		   role="tab" aria-controls="nav-home" aria-selected="true">POST</a>
		<a class="nav-item nav-link w-50 text-center" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
		   role="tab" aria-controls="nav-profile" aria-selected="false">LIST</a>
	</div>
</nav>
<div class="tab-content pt-3" id="nav-tabContent">
	<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
		<h6 class="text-center">Lengkapi informasi</h6>
		<h5 class="text-center"><span
				class="text-center badge badge-primary"><?= $this->session->flashdata('msg') ?></span></h5>

		<form action="<?= base_url("post_iklan/post_iklan_kostan") ?>" method="post">
			<div class="form-group">
				<label for="nama_kost">Nama Kost</label>
				<input type="text" class="form-control" id="nama_kost" name="nama_kost"
					   placeholder="Masukkan nama kost">
			</div>
			<div class="form-group">
				<label for="exampleFormControlSelect1">Tipe kost</label>
				<select class="form-control" name="tipe_kost" id="exampleFormControlSelect1">
					<option value="putra">Putra</option>
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
				<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat">
			</div>
			<div class="form-group">
				<label for="">Latitude</label>
				<input type="text" class="form-control" id="latitude" name="latitude" placeholder="terisi otomatis"
					   readonly>
			</div>
			<div class="form-group">
				<label for="">Longitude</label>
				<input type="text" class="form-control" id="longitude" name="longitude" placeholder="terisi otomaris"
					   readonly>
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
					<input type="checkbox" class="custom-control-input" name="fasilitas[]" id="customCheck1" value="ac">
					<label class="custom-control-label" for="customCheck1">AC</label>
				</div>
				<div class="custom-control custom-checkbox custom-control-inline">
					<input type="checkbox" class="custom-control-input" name="fasilitas[]" value="tempat tidur"
						   id="customCheck2">
					<label class="custom-control-label" for="customCheck2">Tempat tidur</label>
				</div>
				<div class="custom-control custom-checkbox custom-control-inline">
					<input type="checkbox" class="custom-control-input" name="fasilitas[]" value="kamar mandi dalam"
						   id="customCheck3">
					<label class="custom-control-label" for="customCheck3">Kamar mandi dalam</label>
				</div>
				<div class="custom-control custom-checkbox custom-control-inline">
					<input type="checkbox" class="custom-control-input" name="fasilitas[]" value="wifi"
						   id="customCheck5">
					<label class="custom-control-label" for="customCheck5">Wifi</label>
				</div>
				<div class="custom-control custom-checkbox custom-control-inline">
					<input type="checkbox" class="custom-control-input" name="fasilitas[]" id="customCheck4"
						   value="kamar mandi luar">
					<label class="custom-control-label" for="customCheck4">Kamar mandi luar</label>
				</div>
			</div>
			<div class="form-group">
				<label for="exampleFormControlTextarea1">Deskripsi</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsi"
						  rows="3" placeholder="Tulis deskripsi"></textarea>
			</div>
			<button class="btn btn-primary w-100 rounded-pill my-2" type="submit" name="post_iklan">POST
				IKLAN
			</button>
		</form>

	</div>
	<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
		<div class="accordion" id="accordionExample">
			<?php foreach ($data_kost as $key => $value): ?>
				<div class="card">
					<div class="card-header" id="headingOne<?= $key ?>">
						<h2 class="mb-0">
							<button class="btn btn-link" type="button" data-toggle="collapse"
									data-target="#collapseOne<?= $key ?>"
									aria-expanded="true" aria-controls="collapseOne">
								<?= strtoupper($value->nama_kost) ?>
							</button>
							<i class="far fa-fw fa-minus-square float-right text-primary ml-2 delete" data-toggle="modal"
							   data-target=".bd-example-modal-xl" data-urldelete="<?=base_url("post_iklan/delete/$value->kostan_id")?>"></i>
							<i data-value="value" data-toggle="modal" data-urledit="<?=base_url("post_iklan/edit/$value->kostan_id")?>"
							   data-target=".bd-example-modal-xl"
							   class="far fa-fw fa-edit float-right text-primary edit"></i>
						</h2>
					</div>

					<div id="collapseOne<?= $key ?>" class="collapse hidden" aria-labelledby="headingOne<?= $key ?>"
						 data-parent="#accordionExample">
						<div class="card-body">
							<!--						<div class="row">-->
							<!--							<div class="col-1">-->
							<!--								<i class="fas fa-fw fa-street-view text-primary"></i>-->
							<!--							</div>-->
							<!--							<div class="col-10">-->
							<!--								<span>18km dari sini</span>-->
							<!--							</div>-->
							<!--						</div>-->
							<div class="row">
								<div class="col-1">
									<i class="fas fa-fw fa-map-marked-alt text-primary"></i>
								</div>
								<div class="col-10">
									<span>Alamat : <?= $value->alamat_kost ?></span>
								</div>
							</div>
							<div class="row">
								<div class="col-1">
									<i class="fas fa-restroom text-primary"></i>
								</div>
								<div class="col-10">
									<span>Tipe kost : <?= $value->type_kost ?></span>
								</div>
							</div>
							<div class="row">
								<div class="col-1">
									<i class="far fa-fw fa-calendar-alt text-primary"></i>
								</div>
								<div class="col-10">
									<span>Tipe bayar : <?= $value->type_bayar_kost ?></span>
								</div>
							</div>
							<div class="row">
								<div class="col-1">
									<i class="fas fa-fw fa-dollar-sign text-primary"></i>
								</div>
								<div class="col-10">
									<span>Harga : Rp.<?= str_replace(",", ".", number_format($value->harga_kost)) ?>,-</span>
								</div>
							</div>
							<div class="row">
								<div class="col-1">
									<i class="fas fa-fw fa-bed text-primary"></i>
								</div>
								<div class="col-10">
								<span>Fasilitas : <?php
									$faslitas = json_decode($value->fasilitas_kost);
									$isi = "";
									foreach ($faslitas as $item) {
										$isi .= ucwords($item) . ", ";
									}
									echo substr($isi, 0, -2);
									?></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>

		<!-- Modal -->
		<form action="<?= base_url("post_iklan/post_iklan_kostan") ?>" method="post">
			<div class="modal fade bd-example-modal-xl" id="exampleModalScrollable" tabindex="-1" role="dialog"
				 aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-scrollable" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalScrollableTitle">Edit Kostan</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body tampil_edit">

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
							<button type="button" class="btn btn-primary">Update</button>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

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

    // untuk modal edit
    function forModalInitialize() {
        var input = document.getElementById('_alamat');
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
		
		
