
<div class="profile">
	<h6 class="text-center">Selemat datang,  <?= $this->session->userdata('nama') ?> :)</h6>
	<img src="<?= base_url() ?>myassets/img/img1.JPG" class="rounded-circle mx-auto d-block mb-2" alt="img-profile">
	<p class="mb-0 text-center">Nama : <?= $this->session->userdata('nama') ?></p>
	<p class="text-center">Email &nbsp;: <?= $this->session->userdata('email') ?></p>
	<a href="<?= base_url('post_iklan') ?>" class="btn btn-primary w-100 rounded-pill mb-1">POST IKLAN</a>
	<a href="<?= base_url('user') ?>" class="btn btn-primary w-100 rounded-pill mb-3">LIHAT USER</a>
	<a href="<?=base_url("auth/login/out")?>" class="btn btn-primary w-100 rounded-pill">LOGOUT</a>
</div>
