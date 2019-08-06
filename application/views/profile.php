<div class="content">

	<div id="login">
		<form action="#" method="post">
			<p class="title">Let's get you logged in</p>
			<div class="input-style input-style-1 has-icon input-required">
				<i class="input-icon fa fa-user"></i>
				<span>Name</span>
				<em>(required)</em>
				<input type="name" name="username" placeholder="Username">
			</div>
			<div class="input-style input-style-1 has-icon input-required">
				<i class="input-icon fa fa-lock"></i>
				<span>Password</span>
				<em>(required)</em>
				<input type="password" name="password" placeholder="Password">
			</div>
			<p>Belum memiliki akun? <a href="#" id="link-regis">klik disini</a></p>
			<button type="button" name="submit"
					class="button button-s button-full button-circle shadow-medium bg-highlight" onclick="login()">Login
			</button>
		</form>
	</div>
	<div id="register">
		<form action="#" method="post">
			<p>Let's get register</p>
			<div class="input-style input-style-1 has-icon input-required">
				<i class="input-icon fa fa-user"></i>
				<span>Name</span>
				<em>(required)</em>
				<input type="name" name="username" placeholder="Username">
			</div>
			<div class="input-style input-style-1 has-icon input-required">
				<i class="input-icon fa fa-envelope"></i>
				<span>Email</span>
				<em>(required)</em>
				<input type="email" name="email" placeholder="Email">
			</div>
			<div class="input-style input-style-1 has-icon input-required">
				<i class="input-icon fa fa-lock"></i>
				<span>Password</span>
				<em>(required)</em>
				<input type="password" name="password1" placeholder="Password">
			</div>
			<div class="input-style input-style-1 has-icon input-required">
				<i class="input-icon fa fa-lock"></i>
				<span>Ulangi password</span>
				<em>(required)</em>
				<input type="password" name="password2" placeholder="Ulangi password">
			<a href="#" name="regis"
					class="button button-s button-full button-circle shadow-medium bg-highlight" onclick="register()">Register
			</a>
		</form>
	</div>

	<!-- setelah login -->
	<!--        <div class="profile">-->
	<!--            <p>Selamat datang, Agus salim :)</p>-->
	<!--            <img src="--><? //= base_url(); ?><!--assets/images/ath.png" alt="user-image">-->
	<!--            <p>Nama : Agus salim</p>-->
	<!--            <p>Email : agus_salim@gmail.com</p>-->
	<!--            <a href="-->
	<? //= base_url('post_iklan'); ?><!--" class="button button-s button-full button-round-large shadow-medium bg-highlight" style="margin-top: 15px;">Posting iklan</a>-->
	<!--            <a href="#" class="button button-s button-full button-round-large shadow-medium bg-highlight" style="margin-top: 15px;">Keluar</a>-->
	<!--        </div>-->

</div>

<div id="footer-menu" class="footer-menu-3-icons">
	<a href="<?= base_url('home') ?>" class="active-menu link"><i class="fa fa-home"></i><span>Home</span></a>
	<a href="<?= base_url('lists') ?>" class="link"><i class="far fa-list-alt"></i><span>List</span></a>
	<a href="<?= base_url('profile') ?>" class="link"><i class="fas fa-user-circle"></i><span>Profile</span></a>
	<div class="clear">
	</div>

</div>
