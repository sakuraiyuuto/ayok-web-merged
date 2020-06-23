<?php 
	include("sistem/koneksi_database.php");
	include("sistem/cek_session_login.php");
	$_SESSION['index'] = true;
?>

<html>
<head>
	<title>Ayo Kerja !</title>
	<script src="https://kit.fontawesome.com/8c5a0c8768.js" crossorigin="anonymous"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="sistem/style.css">
</head>
<body>
		<script type="text/javascript">
			function validate()
			{
				obj = document.form1;
				cari = obj.cari.value;
				submitOK="True";

				if (cari =="")
				{
					alert("Masukkan kata kunci untuk cari!");
					obj.cari.focus();
					return false;
				}

				if (submitOK == false)
				{
					return false;
				}
			}
		</script>
		<script>
			function myFunction() 
			{
				var x = document.getElementById("myTopnav");
				if (x.className === "topnav") 
				{
					x.className += " responsive";
				} 
				else 
				{
					x.className = "topnav";
				}
			}
		</script>


	<!--navigation bar-->
	
	<div class="pencarian">
				<form name=form1 method=post action=akun/carijasa.php onsubmit="return validate()">
					<input class=input type=text name=cari maxlength=100 placeholder="Cari jasa disini">
					<input class=submit type=submit value="Cari">
				</form>
	</div>

	<div class="topnav" id="myTopnav">
	
		<img src="gambar/logo/ayok.png">
		<div class="menu">
			<a href="index.php"><b>Home</b></a>
			<a href="akun/bookmark.php"><b>Bookmark</b></a>
			<a href="akun/profil.php"><b>Profile</b></a>
			<a href="sistem/logout.php"><b>Log Out</b></a>
			<a href="javascript:void(0);" class="icon" onclick="myFunction()">
				<i class="fa fa-bars"></i>
			</a>
		</div>
	</div>

	<!--Main Content -->
	
	<div class="main-content">
		<div class="content">
			<div class="block1">
				<div class="font1">
					<h1>Hot Offers !</h1>
					Cari jasa terbaik dan<br>
					terverifikasi yang kami <br>
					rekomendasikan !
					<br>
					<a href="akun/iklanrekomendasi.php">
						<div class="button1">
							Cek rekomendasi !
						</div>
					</a>
				</div>
			</div>

				<br>
				<div class="container">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner">

							<div class="item active">
								<img src="gambar/banner/ban1.jpg" alt="ban1" style="width:100%;">
								<div class="carousel-caption">
								
								</div>
							</div>

							<div class="item">
								<img src="gambar/banner/ban2.jpg" alt="ban2" style="width:100%;">
								<div class="carousel-caption">
								
								</div>
							</div>
							
							<div class="item">
								<img src="gambar/banner/ban3.jpg" alt="BAN3" style="width:100%;">
								<div class="carousel-caption">
								
								</div>
							</div>
					
						</div>

						<!-- Left and right controls -->
						<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
				
				<div class="block2">
					<h3><center>Pilihan Kategori Jasa</center></h3>
					
					<div class="block7">
					<!--Reparasi-->
						<a href="jasa/elektronik.php">
							<div class="box7">
							<div class='jasa_icon'>
							<i class="fas fa-charging-station"></i> 
							</div>
							<br>
								Elektronik
							
							</div>
						</a>
						
						<a href="jasa/bengkel.php">
							<div class="box7">
							<div class='jasa_icon'>
							<i class="fas fa-tools"></i> 
							</div><br>		
								Bengkel
							</div>
						</a>
						
					<!--konstruksi-->
						<a href ="jasa/arsitek.php">
							<div class="box7">
							<div class='jasa_icon'>
							<i class="fas fa-home"></i> 
							</div><br>		 
								Arsitek
							</div>
						</a>
					
						<a href ="jasa/tukang.php">
							<div class="box7">
							<div class='jasa_icon'>
							<i class="fas fa-hammer"></i> 
							</div><br>	
								Tukang
							</div>
						</a>
						
					<!--desain-->
						<a href ="jasa/logoposterbanner.php">
							<div class="box7">
							<div class='jasa_icon'>
							<i class="fas fa-object-ungroup"></i> 
							</div><br>	
								Logo, Poster dan Banner
							</div>
						</a>
				
						<a href ="jasa/pakaian.php">
							<div class="box7">
							<div class='jasa_icon'>
							<i class="fas fa-tshirt"></i> 
							</div><br>	
								Pakaian
							</div>
						</a>
						
						<a href ="jasa/lukisan.php">
							<div class="box7">
							<div class='jasa_icon'>
							<i class="fas fa-palette"></i> 
							</div><br>	
								Lukisan
							</div>
						</a>
						
					<!--kesehatan-->
						<a href ="jasa/dokter.php">
							<div class="box7">
							<div class='jasa_icon'>
							<i class="fas fa-heartbeat"></i> 
							</div><br>	
								Dokter
							</div>
						</a>
						
						<a href ="jasa/pijat.php">
							<div class="box7">
							<div class='jasa_icon'>
							<i class="fas fa-sign-language"></i> 
							</div><br>	
								Pijat
							</div>
						</a>
						
						<a href ="jasa/terapi.php">
							<div class="box7">
							<div class='jasa_icon'>
							<i class="fas fa-spa"></i> 
							</div><br>	
								Terapi
							</div>
						</a>
						
					<!--rumah tangga-->
						<a href ="jasa/asistenrumahtangga.php">
							<div class="box7">
							<div class='jasa_icon'>
							<i class="fas fa-broom"></i> 
							</div><br>	
								Asisten Rumah Tangga
							</div>
						</a>
						
						<a href ="jasa/tukangkebun.php">
							<div class="box7">
							<div class='jasa_icon'>
							<i class="fas fa-tree"></i> 
							</div><br>	
								Tukang Kebun
							</div>
						</a>
						
						<a href ="jasa/pengasuhbayidananak.php">
							<div class="box7">
							<div class='jasa_icon'>
							<i class="fas fa-child"></i> 
							</div><br>	
								Pengasuh Bayi dan Anak
							</div>
						</a>
						
						<a href ="jasa/angkutanpindahrumah.php">
							<div class="box7">
							<div class='jasa_icon'>
							<i class="fas fa-people-carry"></i> 
							</div><br>	
								Angkutan Pindah Rumah
							</div>
						</a>
						
					<!--penampilan-->
						<a href ="jasa/perawatantubuh.php">
							<div class="box7">
							<div class='jasa_icon'>
							<i class="fas fa-hot-tub"></i> 
							</div><br>	
								Perawatan Tubuh
							</div>
						</a>
						
						<a href ="jasa/salon.php">
							<div class="box7">
							<div class='jasa_icon'>
							<i class="fas fa-female"></i> 
							</div><br>	
								Salon
							</div>
						</a>
						
						<a href ="jasa/pangkasrambut.php">
							<div class="box7">
							<div class='jasa_icon'>
							<i class="fas fa-cut"></i> 
							</div><br>	
								Pangkas Rambut
							</div>
						</a>
						
						<a href ="jasa/makeupacara.php">
							<div class="box7">
							<div class='jasa_icon'>
							<i class="fab fa-jenkins"></i> 
							</div><br>	
								Make Up Acara
							</div>
						</a>
						
					<!--kebersihan-->	
						<a href ="jasa/layanankebersihanrumah.php">
							<div class="box7">
							<div class='jasa_icon'>
							<i class="fas fa-pump-soap"></i> 
							</div><br>	
								Layanan Kebersihan Rumah
							</div>
						</a>
						
						<a href ="jasa/cucikendaraan.php">
							<div class="box7">
							<div class='jasa_icon'>
							<i class="fas fa-soap"></i> 
							</div><br>	
								Cuci Kendaraan
							</div>
						</a>
						
					<!--transportasi-->
						<a href ="jasa/supir.php">
							<div class="box7">
							<div class='jasa_icon'>
							<i class="fas fa-car"></i> 
							</div><br>	
								Supir
							</div>
						</a>
						
					<!--Layanan IT-->
						<a href ="jasa/appsistemweb.php">
							<div class="box7">
							<div class='jasa_icon'>
							<i class="fas fa-laptop-house"></i> 
							</div><br>	
								App, Sistem dan Web
							</div>
						</a>
						
						<a href ="jasa/dataoriented.php">
							<div class="box7">
							<div class='jasa_icon'>
							<i class="fas fa-database"></i> 
							</div><br>	
								Data Oriented
							</div>
						</a>
					
					<!--Layanan IT-->
						<a href ="jasa/gurules.php">
							<div class="box7">
							<div class='jasa_icon'>
							<div class='jasa_icon'>
							<i class="fas fa-chalkboard-teacher"></i> 
							</div></i> 
							</div><br>	
								Guru Les
							</div>
						</a>
						
						<a href ="jasa/personaltrainer.php">
							<div class="box7">
							<div class='jasa_icon'>
							<i class="fas fa-dumbbell"></i> 
							</div><br>	
								Personal Trainer
							</div>
						</a>
					<!--Semua Jasa-->
					
						<a href ="jasa/semuajasa.php">
							<div class="box7">
							<div class='jasa_icon'>
							<i class="fas fa-plus"></i> 
							</div><br>	
								Lihat Semua Jasa
							</div>
						</a>
					</div>
				</div>
				<div class="footer">
					<!--info soal terkait ayok-->
					<div class ="info">
						<div class="info_box">
							<div class="category">
								<h2>Category</h2>
								<a href="" class="">Desain</a>
								<a href="" class="">Kesehatan</a>
								<a href="" class="">Reparasi</a>
								<a href="" class="">Desain</a>
								<a href="" class="">Kesehatan</a>
								<a href="" class="">Reparasi</a>
								<a href="" class="">Desain</a>
								<a href="" class="">Kesehatan</a>
								<a href="" class="">Reparasi</a>
							</div>
							<div class="info_blok1">
							<div class="about">
								<h2>About Us</h2>
								<a href="" class="">Tentang AYOK</a>
								<a href="" class="">AYOK Verified Users</a>
								<a href="" class="">Bergabung Menjadi Servicer</a>
							</div>
							<div class="contact">
								<br>
								<h2> Contact Us </h2>
								<p> Email Us : ayok@bisnis.com <br>
									Contact Our CS : <br>
									+6281349609866
								</p>
								</div>
							</div>
						</div>
							<div class='illust'>
								<img src ="illustration ayok.png">
							</div>
					</div>

					<div class="bottom">
						<img src="white.png">
						<p>© 2020, Kelompok AYOK
						Universitas Tanjungpura. All rights reserved. </p>
					</div>
				</div>
		</div>
	</div>
	
</body>
</html>