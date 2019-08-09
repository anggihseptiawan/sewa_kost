<div class="content">

	<div id="login">
		<form action="<?=base_url("login/cek")?>" method="post">
			<p class="title">Let's get you logged in</p>
			<div class="input-style input-style-1 has-icon input-required">
				<i class="input-icon fa fa-user"></i>
				<span>Name</span>
				<em>(required)</em>
				<input type="email" name="log_username" placeholder="Email"required>
			</div>
			<div class="input-style input-style-1 has-icon input-required">
				<i class="input-icon fa fa-lock"></i>
				<span>Password</span>
				<em>(required)</em>
				<input type="password" name="log_password" placeholder="Password" required>
			</div>
			<p>Belum memiliki akun? <a href="#" id="link-regis">klik disini</a></p>
			<p class="info center-text" style="color: darkred"></p>
			<button type="submit" name="submit"
					class="button button-s button-full button-circle shadow-medium bg-highlight">
				Login
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
				<input type="name" name="nama" placeholder="Nama Lengkap">
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
			</div>
			<p class="info"></p>
			<a href="#" name="regis"
			   class="button button-s button-full button-circle shadow-medium bg-highlight" id="login">Register
			</a>
		</form>
	</div>
</div>
