    <h5 class="text-center mb-3">Cari Kost</h5>
    <h6><i class="fas fa-fw fa-filter text-primary" style="font-size: 12px;"></i> Filter Pencarian</h6>

    <form action="#" method="post">
        <div class="form-group">
            <label for="exampleFormControlSelect1"><i class="fas fa-fw fa-male text-primary" style="font-size: 18px;"></i> Tipe kost</label>
            <select class="form-control" name="tipe_kost" id="exampleFormControlSelect1">
            <option>Putra</option>
            <option>Putri</option>
            <option>Campur</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2"><i class="far fa-fw fa-calendar-alt text-primary"></i> Tipe bayar</label>
            <select class="form-control" name="tipe_bayar" id="exampleFormControlSelect2">
            <option>Bulanan</option>
            <option>Tahunan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2"><i class="fas fa-fw fa-hand-holding-usd text-primary"></i> Harga</label>
            <select class="form-control" name="harga" id="exampleFormControlSelect2">
            <option>Murah</option>
            <option>Sedang</option>
            <option>Mahal</option>
            </select>
        </div>
        <div class="form-group">
            <p><i class="fas fa-fw fa-bed text-primary"></i> Fasilitas</p>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="ac" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">AC</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="customCheck2">
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
            <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Temukan lokasi..">
            <div class="input-group-append">
                <button type="submit" class="input-group-text"><i class="fas fa-search-location"></i></button>
            </div>
            </div>
        </div>
        <button class="btn btn-primary w-100 rounded-pill mb-2" type="submit" name="cari">CARI</button>
    </form>