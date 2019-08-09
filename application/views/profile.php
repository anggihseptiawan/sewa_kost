<div class="content">

	<div class="profile">
		<p>Selamat datang, <?= $this->session->userdata('nama') ?> :)</p>
		<img src="<?= base_url(); ?>assets/images/ath.png" alt="user-image">
		<p>Nama : <?= $this->session->userdata('nama') ?></p>
		<p>Email : <?= $this->session->userdata('email') ?></p>
		<a href="<?= base_url('post_iklan/index'); ?>"
		   class="button button-s button-full button-round-large shadow-medium bg-highlight"
		   style="margin-top: 15px;">Posting iklan</a>
		<a href="<?= base_url("login/out") ?>"
		   class="button button-s button-full button-round-large shadow-medium bg-highlight"
		   style="margin-top: 15px;">Keluar</a>
	</div>

</div>
