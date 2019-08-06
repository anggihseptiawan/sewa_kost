               
        <div class="content">
            <h5>Cari kategori</h5>

           
            <div class="checkboxes-demo">
                <div class="fac fac-radio-full fac-blue"><span></span>
                    <input id="box1-fac-radio-full" type="radio" name="rad1" value="1">
                    <label for="box1-fac-radio-full">Kost</label>
                </div>
                <div class="fac fac-radio-full fac-blue"><span></span>
                    <input id="box2-fac-radio-full" type="radio" name="rad1" value="1">
                    <label for="box2-fac-radio-full">Apartemen</label>
                </div>
            </div>

            <div class="filter">
                <h5><i class="fas fa-fw fa-filter"></i> Filter</h5>

                <div class="input-style input-style-2 input-required">
                    <em><i class="fa fa-angle-down"></i></em>
                    <select>
                        <option value="default">Tipe kos</option>
                        <option value="iOS" name="ios">Cewek</option>
                        <option value="Linux" name="linux">Cowok</option>
                        <option value="MacOS" name="macos">Cewek cowok</option>
                    </select>
                </div>

                <div class="input-style input-style-2 input-required">
                    <em><i class="fa fa-angle-down"></i></em>
                    <select>
                        <option value="default">Bulanan</option>
                        <option value="januari" name="januari">Tahunan</option>
                    </select>
                </div>

                <div class="input-style input-style-2 input-required">
                    <em><i class="fa fa-angle-down"></i></em>
                    <select>
                        <option value="murah">Murah</option>
                        <option value="iOS" name="">Sedang</option>
                        <option value="Linux" name="">Mahal</option>
                    </select>
                </div>
            </div>

            <div class="fasilitas">
                <p>Fasilitas</p>
                <div class="checkboxes-demo">
                    <div class="fac fac-checkbox fac-blue"><span></span>
                        <input id="ac" name="ac" type="checkbox" value="1" checked="">
                        <label for="ac">AC</label>
                    </div>
                    <div class="fac fac-checkbox fac-blue"><span></span>
                        <input id="temp_tidur" name="temp_tidur" type="checkbox" value="2" checked="">
                        <label for="temp_tidur">Tempat tidur</label>
                    </div>
                    <div class="fac fac-checkbox fac-blue"><span></span>
                        <input id="kmr_dalam" name="kmr_dalam" type="checkbox" value="3" checked="">
                        <label for="kmr_dalam">Kamar mandi dalam</label>
                    </div>
                    <div class="fac fac-checkbox fac-blue"><span></span>
                        <input id="wifi" name="wifi" type="checkbox" value="4" checked="">
                        <label for="wifi">Wifi</label>
                    </div>
                    <div class="fac fac-checkbox fac-blue"><span></span>
                        <input id="kmr_luar" name="kmr_luar" type="checkbox" value="5" checked="">
                        <label for="kmr_luar">Kamar mandi luar</label>
                    </div>
                </div>
            </div>

            <div class="search">
                <div class="search-box search-color bg-highlight shadow-tiny round-small bottom-10">
                    <i class="fas fa-map-marker-alt"></i>
                    <input type="text" placeholder="ketik pencarian..">
                </div>  
                <form action="#" method="post">
                    <a href="#" class="button button-m shadow-small bg-blue2-dark">Search</a>
                </form>
            </div>
           

        </div>
            
        <!-- <div class="divider divider-margins"></div> -->          
    </div>

    <div id="footer-menu" class="footer-menu-3-icons">
        <a href="<?= base_url('home') ?>" class="active-menu link"><i class="fa fa-home"></i><span>Home</span></a>
        <a href="<?= base_url('lists') ?>" class="link"><i class="far fa-list-alt"></i><span>List</span></a>
        <a href="<?= base_url('profile') ?>" class="link"><i class="fas fa-user-circle"></i><span>Profile</span></a>
        <div class="clear"></div>
    </div>

<!-- </div> -->

    
    