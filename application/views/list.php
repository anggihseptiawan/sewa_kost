<div class="content">
	<?php
	print_r($kostan);
	foreach ($kostan as $key => $kost) :?>
	<a href="#" data-dropdown="dropdown-1" class="dropdown-style-1">
		<i class="fas fa-map-marker-alt"></i>
		<p class="color-theme"><?=$kost->nama ?>></p>
		<i class="fa dropdown-icon fa-angle-down color-theme"></i>
	</a>
	<div class="dropdown-content" id="dropdown-1">
		<div class="link-list link-list-1 link-list-no-border">
			<a href="#"><i class="fas fa-street-view"></i><span>18 kilometer dari sini</span><i
					class="fa fa-angle-right"></i></a>
			<a href="#"><i class="fas fa-map-marker"></i><span>Status available</span><i class="fa fa-angle-right"></i></a>
			<a href="#"><i class="fas fa-dollar-sign"></i><span>RP. 800.000,-</span><i
					class="fa fa-angle-right"></i></a>
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15866.597351791315!2d106.7911065!3d-6.1776733!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe816d65037c3207a!2sCentral+Park!5e0!3m2!1sid!2sid!4v1564816479974!5m2!1sid!2sid"
				width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
	<?php endforeach;?>

	<!--            <a href="#" data-dropdown="dropdown-2" class="dropdown-style-1">-->
	<!--                <i class="fas fa-map-marker-alt"></i>-->
	<!--                <p class="color-theme">Kost Pak Casmo</p>-->
	<!--                <i class="fa dropdown-icon fa-angle-down color-theme"></i>-->
	<!--            </a>-->
	<!--            <div class="dropdown-content" id="dropdown-2">-->
	<!--                <div class="link-list link-list-1 link-list-no-border">-->
	<!--                    <a href="#"><i class="fas fa-street-view"></i><span>18 kilometer dari sini</span><i class="fa fa-angle-right"></i></a>-->
	<!--                    <a href="#"><i class="fas fa-check-square"></i><span>Status tidak tersedia</span><i class="fa fa-angle-right"></i></a>-->
	<!--                    <a href="#"><i class="fas fa-dollar-sign"></i><span>Rp. 750.000,-</span><i class="fa fa-angle-right"></i></a>-->
	<!--                </div>-->
	<!--            </div>   -->
</div>
<!--</div>-->

<div id="footer-menu" class="footer-menu-3-icons">
	<a href="<?= base_url('home') ?>" class="active-menu link"><i class="fa fa-home"></i><span>Home</span></a>
	<a href="<?= base_url('lists') ?>" class="link"><i class="far fa-list-alt"></i><span>List</span></a>
	<a href="<?= base_url('profile') ?>" class="link"><i class="fas fa-user-circle"></i><span>Profile</span></a>
	<div class="clear"></div>

</div>
