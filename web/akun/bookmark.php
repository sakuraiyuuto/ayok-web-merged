<?php
include("../sistem/cek_session.php");
include("../sistem/koneksi_database.php");
?>
<html>
<head>
<title>Ayo Kerja !</title>
<link rel="stylesheet" href="../sistem/style.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/8c5a0c8768.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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
				<form name=form1 method=post action=carijasa.php onsubmit="return validate()">
					<input class=input type=text name=cari maxlength=100 placeholder="Cari jasa disini">
					<input class=submit type=submit value="Cari">
				</form>
		</div>

	<div class="topnav" id="myTopnav">
	
		<img src="../gambar/logo/ayok.png">
		<div class="menu">
		<a href="../index.php"><b>Home</b></a>
		<a href="bookmark.php"><b>Bookmark</b></a>
		<a href="profil.php"><b>Profile</b></a>
		<a href="../sistem/logout.php"><b>Log Out</b></a>
		<a href="javascript:void(0);" class="icon" onclick="myFunction()">
			<i class="fa fa-bars"></i>
		</a>
		</div>
	</div>

	<div class="main-content">
		<div class="content">
			<div class="block6">
				<div class="font3">
					<h2>Jasa Tersimpan</h2>
					</div>
					<div class="block2">
			<h3><center>Daftar jasa  :</center></h3>

			<div class="block7">
			<?php		
			$_SESSION['id_akun_utama']=$_SESSION['id_akun'];
			$id_akun=$_SESSION['id_akun_utama'];
			$perintah6="SELECT * FROM bookmark where id_akun='$id_akun'";
			$hasil6=mysqli_query($konek, $perintah6);
			if($row6=mysqli_fetch_array($hasil6))
			{

			$perintah5="SELECT * FROM bookmark where id_akun='$id_akun' ORDER BY id DESC";
			$hasil5=mysqli_query($konek, $perintah5);
			while($row5=mysqli_fetch_array($hasil5))
			{	

			$jasa=$row5[1];
			$perintah="SELECT * FROM jasa where id_jasa='$jasa'";
			$hasil=mysqli_query($konek, $perintah);
			while($row=mysqli_fetch_array($hasil))
			{	
				
				$perintah2="SELECT * FROM kategori WHERE id_kategori2='$row[0]'";
								$hasil2=mysqli_query($konek, $perintah2);
								while($row2=mysqli_fetch_array($hasil2)){

					$perintah3="SELECT * FROM foto where id_jasa='$row5[1]'";
					$hasil3=mysqli_query($konek, $perintah3);
						while($row3=mysqli_fetch_array($hasil3)){
						$imageURL='../../database/akun/foto_jasa/'.$row3[1];
			}
			echo "<a href=\"tampilanjasa.php?data1=$row[2]&data2=$row[3]\">";
					echo "<div class=\"box8\">";
					if($row[10]>'0'){
						echo "<div class=\"verified\">Verifikasi ✔️</div>";
					}
					else  {
						echo "<div class=\"notverified\">Belum verifikasi</div>";
					}
					
					$perintah4="SELECT * FROM ratingjasa where id_jasa='$row[1]'";
					$hasil4=mysqli_query($konek, $perintah4);
					if($row4=mysqli_fetch_array($hasil4)){
						$ratingfinalround=$row4[1];
						if($ratingfinalround<1){
					$ratingfinal="☆";
				}
				else if($ratingfinalround==1){
					$ratingfinal="★";
					}
				else if($ratingfinalround<2){
					$ratingfinal="★☆";
				}
				else if($ratingfinalround==2){
					$ratingfinal="★★";
					}
					else if($ratingfinalround<3){
					$ratingfinal="★★☆";
					}
					else if($ratingfinalround==3){
						$ratingfinal="★★★";
					}
					else if($ratingfinalround<4){
					$ratingfinal="★★★☆";
					}
					else if($ratingfinalround==4){
						$ratingfinal="★★★★";
					}
					else if($ratingfinalround<5){
					$ratingfinal="★★★★☆";
					}
				else if($ratingfinalround==5){
					$ratingfinal="★★★★★";
					}
					
					if($row[10]>'0'){
					echo "<div class=\"ratingverified\">";
					echo $ratingfinal;
					echo "</div>";}
					
					else {
						echo "<div class=\"ratingnotverified\">";
					echo $ratingfinal;
					echo "</div>";}
					}
								
					
					echo "<img src=\"$imageURL\"><br>";	
			echo "<b>$row[3]";
			echo " - ".$row2[3]."</b><br>";
			echo "📞";echo "$row[8]";echo "<br>";
			echo "<b>Alamat :<br></b>";
			echo "$row[5]";echo "<br>";
			$_SESSION['nama_jasa']=$row[3];
			echo "</div>";	
			echo "</a>";
								}
								
			}
			}
			} 
			else {
				echo "<h5><center>Tidak ada jasa tersimpan..</center></h5>";
			}

						


						?>
						
						
				</div>
				</div>
				</div>
			<?php
				include("../footer.php");
			?>
		</div>
	</div>	
</body>
</hmtl>