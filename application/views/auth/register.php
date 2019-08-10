        <div id="register">
            <small class="text-center text-primary d-block mb-3">Silahkan register</small>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                        placeholder="Masukkan email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password1" id="exampleInputPassword1"
                        placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword2">Ulangi password</label>
                    <input type="password" class="form-control" name="password2" id="exampleInputPassword2"
                        placeholder="Ulangi password">
                </div>
                <small id="emailHelp" class="form-text">Sudah memiliki akun? <a href="<?= base_url('auth/login') ?>"
                        id="link-login">Silahkan
                        login</a></small>
                <button type="submit" class="btn btn-primary w-100 rounded-pill my-3">REGISTER</button>
            </form>
        </div>