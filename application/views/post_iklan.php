<div class="content">
	<form action="<?=base_url("post_iklan/post_iklan_kostan")?>" method="post">
		<br>
		<h6>Legkapi informasi</h6>
		<div class="input-style input-style-1 has-icon input-required">
			<em><i class="fa fa-angle-down color-highlight"></i></em>
			<span>Tipe Kost</span>
			<select name="type_kost" required>
				<option value="putri">putri</option>
				<option value="putra">putra</option>
				<option value="campur">campur</option>
			</select>
		</div>
		<div class="input-style input-style-1 has-icon input-required">
			<i class="input-icon fa fa-user color-highlight"></i>
			<span>Nama kost</span>
			<em>(required)</em>
			<input type="name" name="nama" placeholder="Nama kost">
			<input type="name" name="nama" placeholder="Nama kost" value="<?=$this->session->userdata("email")?>">
		</div>
		<div class="input-style input-style-1 has-icon input-required">
			<i class="input-icon fas fa-map-marked-alt color-highlight"></i>
			<span>Alamat</span>
			<em>(required)</em>
			<input type="text" name="alamat" placeholder="Alamat" id="alamat_kost">
			<input type="hidden" name="latitude" id="latitude" required>
			<input type="hidden" name="longitude" id="longitude" required>
		</div>
		<div class="input-style input-style-1 has-icon input-required">
			<i class="input-icon fas fa-phone color-highlight"></i>
			<span>No. Telp</span>
			<em>(required)</em>
			<input type="text" name="no_telp" placeholder="No Telpon">
		</div>
<!--		<div class="input-style input-style-1 input-required">-->
<!--			<em><i class="fa fa-angle-down color-highlight"></i></em>-->
<!--			<span>Tipe kos</span>-->
<!--			<select>-->
<!--				<option value="iOS" name="ios">Campur</option>-->
<!--				<option value="Linux" name="linux">Putra</option>-->
<!--				<option value="MacOS" name="macos">Putri</option>-->
<!--			</select>-->
<!--		</div>-->
		<div class="input-style input-style-1 has-icon input-required">
			<em><i class="fa fa-angle-down color-highlight"></i></em>
			<span>Tipe Bayar</span>
			<select name="type_bayar" required>
				<option value="1bulan">Per Bulan</option>
				<option value="3bulan">Per 3 Bulan</option>
				<option value="6bulan">Per 6 Bulan</option>
				<option value="1tahun">per Tahun</option>
			</select>
		</div>
		<div class="input-style input-style-1 has-icon input-required">
			<i class="input-icon fas fa-dollar-sign color-highlight"></i>
			<span>Harga sewa</span>
			<em>(required)</em>
			<input type="number" name="hrg_sewa" placeholder="Harga sewa">
		</div>
		<div class="checkboxes-demo">
			<label for="">Fasilitas</label>
			<div class="fac fac-checkbox fac-blue"><span></span>
				<input id="ac" name="fasilitas[]" type="checkbox" value="1" checked="">
				<label for="ac">AC</label>
			</div>
			<div class="fac fac-checkbox fac-blue"><span></span>
				<input id="temp_tidur" name="fasilitas[]" type="checkbox" value="2" checked="">
				<label for="temp_tidur">Tempat tidur</label>
			</div>
			<div class="fac fac-checkbox fac-blue"><span></span>
				<input id="kmr_dalam" name="fasilitas[]" type="checkbox" value="3" checked="">
				<label for="kmr_dalam">Kamar mandi dalam</label>
			</div>
			<div class="fac fac-checkbox fac-blue"><span></span>
				<input id="wifi" name="fasilitas[]" type="checkbox" value="4" checked="">
				<label for="wifi">Wifi</label>
			</div>
			<div class="fac fac-checkbox fac-blue"><span></span>
				<input id="kmr_luar" name="fasilitas[]" type="checkbox" value="5" checked="">
				<label for="kmr_luar">Kamar mandi luar</label>
			</div>
		</div>
		<div class="input-style input-style-1 input-required">
			<span>Deskripsi</span>
			<em>(required)</em>
			<textarea name="deskripsi" id="" placeholder="Deskripsi"></textarea>
		</div>

		<button type="submit" name="posting"
				class="button button-s button-full button-circle shadow-medium bg-highlight w-100">Posting
		</button>
	</form>
</div>
