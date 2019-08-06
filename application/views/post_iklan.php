
<div class="content">
   <form action="#" method="post">
    <h6>Legkapi informasi</h6>
    <div class="input-style input-style-1 has-icon input-required">
        <i class="input-icon fa fa-user color-highlight"></i>
        <span>Nama kost</span>
        <em>(required)</em>
        <input type="name" name="nama" placeholder="Nama kost">
    </div>
    <div class="input-style input-style-1 has-icon input-required">
        <i class="input-icon fas fa-map-marked-alt color-highlight"></i>
        <span>Alamat</span>
        <em>(required)</em>
        <input type="text" name="alamat" placeholder="Alamat">
    </div>
    <div class="input-style input-style-1 has-icon input-required">
        <i class="input-icon fas fa-phone color-highlight"></i>
        <span>No. Telp</span>
        <em>(required)</em>
        <input type="text" name="no_telp" placeholder="No Telpon">
    </div> 
    <div class="input-style input-style-1 input-required">
        <em><i class="fa fa-angle-down color-highlight"></i></em>
        <span>Tipe kos</span>
        <select>
            <option value="iOS" name="ios">Campur</option>
            <option value="Linux" name="linux">Putra</option>
            <option value="MacOS" name="macos">Putri</option>
        </select>
    </div>
    <div class="input-style input-style-1 has-icon input-required">
        <em><i class="fa fa-angle-down color-highlight"></i></em>
        <span>Tipe Bayar</span>
        <select>
            <option value="default">Bulanan</option>
            <option value="januari" name="januari">Tahunan</option>
        </select>
    </div> 
    <div class="input-style input-style-1 has-icon input-required">
        <i class="input-icon fas fa-dollar-sign color-highlight"></i>
        <span>Harga sewa</span>
        <em>(required)</em>
        <input type="text" name="hrg_sewa" placeholder="Harga sewa">
    </div>
    <div class="input-style input-style-1 input-required">
        <span>Deskripsi</span>
        <em>(required)</em>
        <textarea name="Deskripsi" id="" cols="30" rows="100%" placeholder="Deskripsi"></textarea>
    </div> 

    <button type="submit" name="posting" class="button button-s button-full button-circle shadow-medium bg-highlight w-100">Posting</button> 
</form>

    <div id="footer-menu" class="footer-menu-3-icons">
        <a href="<?= base_url('home') ?>" class="active-menu link"><i class="fa fa-home"></i><span>Home</span></a>
        <a href="<?= base_url('lists') ?>" class="link"><i class="far fa-list-alt"></i><span>List</span></a>
        <a href="<?= base_url('profile') ?>" class="link"><i class="fas fa-user-circle"></i><span>Profile</span></a>
        <div class="clear">  
    </div> 
</div>
