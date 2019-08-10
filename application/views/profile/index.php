
<div class="profile">
	<h6>Selemat datang,  <?= $this->session->userdata('nama') ?> :)</h6>
	<img src="<?= base_url(); ?>assets/images/img1.JPG" class="rounded-circle mx-auto d-block mb-2" alt="img-profile">
	<p class="mb-0">Nama : <?= $this->session->userdata('nama') ?></p>
	<p>Email &nbsp;: <?= $this->session->userdata('email') ?></p>
	<a href="posting.html" class="btn btn-primary w-100 rounded-pill mb-2">POST IKLAN</a>
	<a href="#" class="btn btn-primary w-100 rounded-pill">LOGOUT</a>
</div>
