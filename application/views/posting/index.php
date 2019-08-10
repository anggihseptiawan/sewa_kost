		<nav>
			<div class="nav nav-tabs w-100" id="nav-tab" role="tablist">
				<a class="nav-item nav-link active w-50 text-center" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">POST</a>
				<a class="nav-item nav-link w-50 text-center" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">LIST</a>
			</div>
		</nav>
		<div class="tab-content pt-3" id="nav-tabContent">
			<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
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

			</div>
			<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

				<!-- <ul class="list-group">
					<li class="list-group-item d-flex justify-content-between align-items-center">
						Cras justo odio
						<span class="badge badge-primary badge-pill">edit</span>
					</li>
					<li class="list-group-item d-flex justify-content-between align-items-center">
						Dapibus ac facilisis in
						<span class="badge badge-primary badge-pill">edit</span>
					</li>
					<li class="list-group-item d-flex justify-content-between align-items-center">
						Morbi leo risus
						<span class="badge badge-primary badge-pill">edit</span>
					</li>
				</ul> -->

				<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-value="value" data-toggle="modal" data-target=".bd-example-modal-xl">
  Launch demo modal
</button> -->

<div class="accordion" id="accordionExample">
        <div class="card">
			<div class="card-header" id="headingOne">
				<h2 class="mb-0">
				<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
					aria-expanded="true" aria-controls="collapseOne">
					Kost Anggrek 
				</button>
				<i class="far fa-fw fa-minus-square float-right text-primary ml-2" data-toggle="modal" data-target=".bd-example-modal-xl" data-urldelete="data hapus"></i>
				<i  data-value="value" data-toggle="modal" data-urledit="data edit" data-target=".bd-example-modal-xl" class="far fa-fw fa-edit float-right text-primary"></i>
				</h2>
			</div>

			<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
				<div class="card-body">
				<div class="row">
					<div class="col-1">
					<i class="fas fa-fw fa-street-view text-primary"></i>
					</div>
					<div class="col-10">
					<span>18km dari sini</span>
					</div>
				</div>
				<div class="row">
					<div class="col-1">
					<i class="fas fa-fw fa-map-marked-alt text-primary"></i>
					</div>
					<div class="col-10">
					<span>Jl. Gatot subroto, Jakarta selatan</span>
					</div>
				</div>
				<div class="row">
					<div class="col-1">
					<i class="far fa-fw fa-calendar-alt text-primary"></i>
					</div>
					<div class="col-10">
					<span>Bulanan</span>
					</div>
				</div>
				<div class="row">
					<div class="col-1">
					<i class="fas fa-fw fa-dollar-sign text-primary"></i>
					</div>
					<div class="col-10">
					<span>RP. 800.000,-</span>
					</div>
				</div>
				<div class="row">
					<div class="col-1">
					<i class="fas fa-fw fa-bed text-primary"></i>
					</div>
					<div class="col-10">
					<span>AC, Kamar mandi dalam, wifi</span>
					</div>
				</div>
				</div>
			</div>
			</div>

	</div>

<!-- Modal -->
<div class="modal fade bd-example-modal-xl" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  	<h6>Edit info kost</h6>

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
							<input type="checkbox" class="custom-control-input" name="ac" id="customCheck6">
							<label class="custom-control-label" for="customCheck6">AC</label>
						</div>
						<div class="custom-control custom-checkbox custom-control-inline">
							<input type="checkbox" class="custom-control-input" name="tmp_tidur" id="customCheck7">
							<label class="custom-control-label" for="customCheck7">Tempat tidur</label>
						</div>
						<div class="custom-control custom-checkbox custom-control-inline">
							<input type="checkbox" class="custom-control-input" name="km_dalam" id="customCheck8">
							<label class="custom-control-label" for="customCheck8">Kamar mandi dalam</label>
						</div>
						<div class="custom-control custom-checkbox custom-control-inline">
							<input type="checkbox" class="custom-control-input" name="wifi" id="customCheck9">
							<label class="custom-control-label" for="customCheck9">Wifi</label>
						</div>
						<div class="custom-control custom-checkbox custom-control-inline">
							<input type="checkbox" class="custom-control-input" name="km_luar" id="customCheck10">
							<label class="custom-control-label" for="customCheck10">Kamar mandi luar</label>
						</div>
					</div>
					<div class="form-group">
						<label for="exampleFormControlTextarea1">Deskripsi</label>
						<textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsi"
							rows="3"></textarea>
					</div>

				</div>
						<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">EDIT</button>
						</div>
			</div>
		</div>
	</div>
</form>
				
				
			
			</div>
		</div>
		
		
		