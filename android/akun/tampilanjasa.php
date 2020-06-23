<?php
	include("../sistem/cek_session.php");
	include("../sistem/koneksi_database.php");
	header("tampilanjasa.php");
?>
<html>
<head>
	<title>Ayo Kerja !</title>
	<link rel="stylesheet" href="../sistem/tampilanjasa.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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


	<div class="home">
		<div class="pencarian_jasa">
			<form name=form1 method=post action="../akun/carijasa.php" onsubmit="return validate()">
				<input class="input" type=text name=cari maxlength=100 placeholder="Cari jasa disini"style="width:75%;height:30px;border-radius:30px;padding-left:10px;border:none;">
				<input type=submit style="width:40px;height:30px;border-radius:10px;border:none;cursor:pointer;border:none;background-color:white;margin-left:1px;" value="Cari">
			</form>
		</div>
	<div class="block6">
		<div class="font3">
		</div>
		<div class="block2">
			<h3><center>
			<?php 
			$id_akun=$_GET['data1'];
			$nama_jasa=$_GET['data2'];
			$id_akun_utama=$_SESSION['id_akun_utama'];

			$perintah = "SELECT * FROM jasa where id_akun='$id_akun'";
			$hasil=mysqli_query($konek, $perintah);
			
			echo $nama_jasa;
			if($row=mysqli_fetch_array($hasil))
			{	
				
			}
			
			$id_jasa=$row[1];
			
			?>
			</center></h3>
		</div>
		<div class="box9">
		<?php
		echo "<div class=\"part\">";
			$perintah1 = "SELECT * FROM foto where id_jasa ='$id_jasa'";
			$result = mysqli_query($konek , $perintah1 );
			if(mysqli_fetch_assoc($result))
			{
				$query = $konek->query("SELECT * FROM foto where id_jasa='$id_jasa'");
				if($query->num_rows > 0)
				{
					while($row = $query->fetch_assoc())
					{
						$imageURL = '../../database/akun/foto_jasa/'.$row["nama_foto"];
						// Get images from the database
						?>
						<img src="<?php echo $imageURL; ?>" alt="" />
						</div>
						<?php
					}
				}
				
			}
			else {
				echo "<img src=\"../gambar/akun/jasa.png\">";
				echo "</div>";
			}
						echo "<div class=\"part2\">";
						echo "</div>";
						$perintah = "SELECT * FROM jasa where id_akun='$id_akun'";
		$hasil=mysqli_query($konek, $perintah);
		if($row=mysqli_fetch_array($hasil))
		{	
						if($row[10]>'0')
				{
					echo "<a href=\"iklanrekomendasi.php\"><div class=\"verified\"><div class=\"fontverified\">Verifikasi ✔️</div></div></a>";
				}
				else  
				{
					echo "<div class=\"notverified\">Belum Terverifikasi</div>";
				}
		}
				
				$perintah7 = "SELECT * FROM ratingjasa where id_jasa='$id_jasa'";
			$hasil7=mysqli_query($konek, $perintah7);
			if($row7=mysqli_fetch_array($hasil7))
			{
				$ratingfinaltop=$row7[1];
				if($ratingfinaltop<1)
				{
					$ratingfinalstar="☆";
				}
				else if($ratingfinaltop==1)
				{
					$ratingfinalstar="★";
				}
				else if($ratingfinaltop<2)
				{
					$ratingfinalstar="★☆";
				}
				else if($ratingfinaltop==2)
				{
					$ratingfinalstar="★★";
				}
				else if($ratingfinaltop<3)
				{
					$ratingfinalstar="★★☆";
				}
				else if($ratingfinaltop==3)
				{
						$ratingfinalstar="★★★";
				}
				else if($ratingfinaltop<4)
				{
					$ratingfinalstar="★★★☆";
				}
				else if($ratingfinaltop==4)
				{
					$ratingfinalstar="★★★★";
				}
				else if($ratingfinaltop<5)
				{
					$ratingfinalstar="★★★★☆";
				}
				else if($ratingfinaltop==5)
				{
					$ratingfinalstar="★★★★★";
				}
					
				if($row[10]>'0')
				{
					echo "<div class=\"ratingverified\">";echo $row7[1]."<br>".$ratingfinalstar;echo"</div>";
				}
				else  
				{
					echo "<div class=\"ratingnotverified\">";echo $row7[1]."<br>".$ratingfinalstar;echo"</div>";
				}
			}
			echo "<div class=\"kategorijasa\">";
			$perintah5 = "SELECT * FROM kategori where id_kategori2='$row[0]'";
			$hasil5=mysqli_query($konek, $perintah5);
			if($row5=mysqli_fetch_array($hasil5))
			{
			echo $row5[3];
			}
			
			echo "</div>";
		$perintah = "SELECT * FROM jasa where id_akun='$id_akun'";
		$hasil=mysqli_query($konek, $perintah);
		if($row=mysqli_fetch_array($hasil))
		{	
			$perintah2="SELECT * FROM kategori WHERE id_kategori2='$row[0]'";
			$hasil2=mysqli_query($konek, $perintah2);
			while($row2=mysqli_fetch_array($hasil2))
			{	
				echo "<p><div class=\"box3\">";
				echo "<div class=\"data1\"><b>";
				echo "Kategori jasa</b>";
				echo "</div>";
				echo "<div class=\"data2\">";
				echo "$row2[3]";echo "<br>";
				$nama_kategori="$row2[3]";
				$_SESSION['nama_kategori']=$nama_kategori;
				echo "</div></div>";
			}				
					
			echo "<div class=\"box3\">";
			echo "<div class=\"data1\"><b>";
			echo "ID jasa</b>";
			echo "</div>";
			echo "<div class=\"data2\">";
			echo "$row[1]";echo "<br>";
			$id_jasa="$row[1]";
			$_SESSION['id_jasa']=$id_jasa;
			echo "</div></div>";

			echo "<div class=\"box3\">";
			echo "<div class=\"data1\"><b>";
			echo "Nama Jasa</b>";
			echo "</div>";
			echo "<div class=\"data2\">";
			echo "$row[3]";echo "<br>";
			echo "</div></div>";

			echo "<div class=\"box3\">";
			echo "<div class=\"data1\"><b>";
			echo "Keterangan</b>";
			echo "</div>";
			echo "<div class=\"data2\">";
			echo "$row[4]";echo "<br>";
			echo "</div></div>";

			echo "<div class=\"box3\">";
			echo "<div class=\"data1\"><b>";
			echo "Alamat</b>";
			echo "</div>";
			echo "<div class=\"data2\">";
			echo "$row[5]";echo "<br>";
			echo "</div></div>";

			echo "<div class=\"box3\">";
			echo "<div class=\"data1\"><b>";
			echo "Harga Termurah</b>";
			echo "</div>";
			echo "<div class=\"data2\">";
			echo "$row[6]";echo "<br>";
			echo "</div></div>";

			echo "<div class=\"box3\">";
			echo "<div class=\"data1\"><b>";
			echo "Harga Termahal</b>";
			echo "</div>";
			echo "<div class=\"data2\">";
			echo "$row[7]";echo "<br>";
			echo "</div></div>";

			echo "<div class=\"box3\">";
			echo "<div class=\"data1\"><b>";
			echo "Telepon</b>";
			echo "</div>";
			echo "<div class=\"data2\">";
			echo "$row[8]";echo "<br>";
			echo "</div></div>";

			echo "</div></p>";
			
					}
				
			
		echo "</div>";
		
		$perintah="SELECT * FROM lokasi WHERE id_jasa = '$id_jasa'";
	$hasil = mysqli_query($konek , $perintah);
		if($row=mysqli_fetch_array($hasil)) {
		 include("lokasitampilanjasa.php"); 
		}
		else {
			echo "";
		}
	
		 ?>
	<div class="reportbookmark">
		<a href="report.php">Laporkan</a>
		<?php
		$id_akun=$_SESSION['id_akun_utama'];
		$perintah11="SELECT * FROM bookmark WHERE id_jasa='$id_jasa' AND id_akun='$id_akun'";
		$result11=mysqli_query($konek, $perintah11);
		if($row11=mysqli_fetch_array($result11))
		{
			?>
				<a href="../sistem/bookmarkproses.php" style="color:white;background-color:black;">Tersimpan</a>
			<?php 
		}
		else
		{
			?>
				<a href="../sistem/bookmarkproses.php">Bookmark</a>
			<?php
		}

			?>
	</div>
	
	<div class="reviewbox">
		<h3><center>Rating dan Ulasan</center></h3>
		<?php
			include ("review.php"); 
		?>
	</div>
	</div>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<nav class="nav">
  <a href="../index.php" class="nav__link nav__link--active"">
    <i class="material-icons nav__icon">dashboard</i>
    <span class="nav__text">Home</span>
  </a>
  <a href="../akun/bookmark.php" class="nav__link">
    <i class="material-icons nav__icon">bookmark</i>
    <span class="nav__text">Bookmark</span>
  </a>
  <a href="../akun/profil.php" class="nav__link">
    <i class="material-icons nav__icon">person</i>
    <span class="nav__text">Profile</span>
  </a>
</nav>

<!--<div class="profilbookmark">
				<a href="bookmark.php">Lihat jasa tersimpan</a>
			</div>
-->
		</body>
			</html>
			