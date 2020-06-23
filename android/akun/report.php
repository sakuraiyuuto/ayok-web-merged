<?php
include("../sistem/cek_session.php");
include("../sistem/koneksi_database.php");

$id_akun=$_SESSION['id_akun_utama'];
$id_jasa=$_SESSION['id_jasa'];

$perintah1="SELECT * FROM report WHERE id_akun='$id_akun' and id_jasa='$id_jasa'";
$result1=mysqli_query($konek, $perintah1);
if($row1=mysqli_fetch_array($result1)){
	echo "<script>
					alert ('Anda sudah melaporkan jasa ini!');
					 window.history.back();
				</script>";
}
else {
?>
<html>
<head>
<title>Ayo Kerja !</title>
<link rel="stylesheet" href="../sistem/report.css">
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
		<h3><center>Laporkan Jasa*</center></h3>
		</div>
		<div class="block2">
		<form name="form1" method="post" action="../sistem/reportproses.php">
		<h5>Apa penyebab anda melaporkan jasa ini?<br><br>
		<select class="selected" name="jenis_laporan" required>
			<option></option>
			<option>Jasa tidak sesuai keterangan di aplikasi</option>
			<option>Jasa melakukan pelayanan yang sangat buruk</option>
			<option>Jasa melakukan penipuan</option>
			<option>Penyedia Jasa melakukan tindak kriminal</option>
			<option>Jasa mengandung SARA dan kata-kata tidak pantas</option>
			<option>Lain-lain</option>
			</select><BR><br>
		Deskripsikan laporan anda<br><br>
		<input type="text" class="laporan" name="laporan" placeholder="Deskripsi Laporan" size="40" required><br><br><br>
		<input type="submit" class="submit" value="Laporkan" style="width:90px"><br><br>
		</form>
		<p>
		*Dengan melaporkan jasa ini, anda sepenuhnya sadar dan yakin bahwa jasa yang dimaksud melakukan pelanggaran hak konsumen (dalam hal ini pengguna jasa) dan melakukan hal-hal yang
		tidak seharusnya dilakukan sehingga merugikan pihak pengguna jasa. Anda juga siap bertanggung jawab atas laporan yang anda berikan.</p>
		</div>
		</div>
<?php
}
?>
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
			