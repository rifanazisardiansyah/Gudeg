<?php
	defined('BASEPATH') or exit('No direct script allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Homepage:GudegBuParto App</title>
</head>
<body>
	<!-- carousel-->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	    <li data-target="#myCarousel" data-slide-to="1"></li>
	    <li data-target="#myCarousel" data-slide-to="2"></li>
	    <li data-target="#myCarousel" data-slide-to="3"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	    <div class="item active">
	      <img class="img-responsive caraousel-img" loading="lazy" src="https://indonesiakaya.com/wp-content/uploads/2023/04/g_Artboard_1.jpg">
	      <div class="carousel-caption">
	        <h3>Gudeg Bu Parto Kuliner Warisan Nusantara</h3>
	        <p>Gudeg buparto merupakan Kuliner khas Jogja yang dibuat dengan bumbu-bumbu pilihan dan telah berjualan sejak tahun 1995 dan telah diwariskan dari generasi ke generasi sehingga terjaga citarasanya</p>
	      </div>
	    </div>

	    <div class="item">
	      <img class="img-responsive caraousel-img" loading="lazy" src="https://sokopawon.com/wp-content/uploads/2023/06/gudeg-sokopawon-besek.jpg" alt="2">
	      <div class="carousel-caption">
	        <h3>Asli</h3>
	        <p>Terjaga keasliannya sehingga Gudeg Bu Parto tetap menjadi ikon kuliner yang memikat hati banyak orang. Resep yang diwariskan dari generasi ke generasi ini, mempertahankan cita rasa tradisional yang khas. Setiap bahan dipilih dengan cermat, diolah dengan teliti, dan dimasak dengan penuh cinta, memastikan setiap porsi gudeg yang disajikan memiliki kualitas dan kelezatan yang konsisten.</p>
	      </div>
	    </div>

	    <div class="item">
	      <img class="img-responsive caraousel-img" loading="lazy" src="https://i.ytimg.com/vi/aRcy3g6X3ak/maxresdefault.jpg" alt="3">
	      <div class="carousel-caption">
	        <h3>Nikmat</h3>
	        <p>Kenikmatan disetiap gigitannya memberikan kesan ak terlupakan, mengingatkan kita akan keindahan sederhana yang hanya bisa ditemukan dalam momen penuh rasa dan kehangatan. Setiap lapis cita rasa yang hadir, menghidupkan kembali kenangan manis dan menciptakan pengalaman baru yang tak tertandingi</p>
	      </div>
	    </div>

	    <div class="item">
	      <img class="img-responsive caraousel-img" loading="lazy" src="https://www.masakapahariini.com/wp-content/uploads/2021/08/Gudeg-Yogyakarta.jpg" alt="4"><div class="carousel-caption">
	        <h3>Autentik</h3>
	        <p>Gudeg Bu Parto adalah bukti nyata bahwa keaslian dan dedikasi dapat menciptakan pengalaman kuliner yang tak terlupakan. Rasa manis, gurih, dan tekstur lembut dari nangka muda berpadu sempurna dengan bumbu khas yang meresap hingga ke setiap serat. Pelanggan setia maupun pendatang baru, semuanya merasakan kehangatan dan kenikmatan dari setiap suapan, seolah-olah mereka sedang menikmati masakan rumah yang autentik.</p>
	      </div>
	    </div>
	  </div>

	  <!-- Left and right controls -->
	  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	<!-- menu bar -->
	<div class="container">
		<div class="pull-left">
			<h3>Paket </h3>
			<p>Pesan berdasarkan paket, mudah dan lebih hemat.</p>	
		</div>
	</div>
	<div class="container">
		<!--menu contains-->
		<div class="row">
		  <div class="menu col-xs-6 col-sm-3">
		    <a href="paket-pagi.html">
		      <img class="img-responsive paket" loading="lazy" src="<?php echo base_url('asset/menu-paket/sarapan1.png')?>" alt="pagi">
		    </a>
		  </div>
		  <div class="menu col-xs-6 col-sm-3">
		    <a href="paket-siang.html">
		      <img class="img-responsive paket" loading="lazy" src="<?php echo base_url('asset/menu-paket/rolasan1.png')?>" alt="siang">
		    </a>
		  </div>
		  <div class="menu col-xs-6 col-sm-3">
		    <a href="paket-malam.html">
		      <img class="img-responsive paket" loading="lazy" src="<?php echo base_url('asset/menu-paket/dinner1.png')?>" alt="malam">
		    </a>
		  </div>
		  <div class="menu col-xs-6 col-sm-3">
		    <a href="paket-ekonomis.html">
		      <img class="img-responsive paket" loading="lazy" src="<?php echo base_url('asset/menu-paket/besek1.png')?>" alt="ekonomis">
		    </a>
		  </div>
		</div>
    </div>
    <!-- menu bar -->
	<div class="container">
		<div class="pull-left">
			<h3>Menu</h3>
			<p>Pesan sekarang juga!.</p>	
		</div>
		<div style="padding-bottom:10px" class="pull-right">
			<a href="lihat-menu.html" class="btn btn-warning btn-sm btn-style">Lihat Semua</a>
		</div>
	</div>
	<div class="container">
		<!--menu contains-->
		<div id="content" class="row">
			<?php foreach ($menu as $menu): ?>
				  <div class="menu col-xs-6 col-sm-3">
				    <div class="thumbnail">
				      <img class="img-responsive" src="<?php echo $menu->pic;?>" alt="test">
				      <div  class="caption">
				        <h4 style="height:30px"><?php echo $menu->nama;?></h4>
				        <p class="ket" style="height:100px"><?php echo $menu->keterangan;?></p>
				        <h5>Rp. <?php echo number_format($menu->harga, 0, '','.').',-';?></h5>
				        <p class="text-center">
				        	<a href="<?php echo 'tambah-cart?id='.$menu->kd_menu.'&nm='.$menu->nama.'&hrg='.$menu->harga;?>" class="btn btn-warning btn-sm btn-style">
				        		<span class="glyphicon glyphicon-shopping-cart"></span> Pesan Sekarang
				        	</a>
				        </p>
				      </div>
				    </div>
				  </div>
			<?php endforeach;?>
		</div>
    </div>
</body>
<script type="text/javascript">
	$( document ).ready(function() {
    	if ($(window).width()<=320) {
    		$(".menu").toggleClass("col-xs-6");
    	}	
	});
</script>
</html>