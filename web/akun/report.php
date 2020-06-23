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
?>
<html>
<head>
	<title>Ayo Kerja !</title>
	<script src="https://kit.fontawesome.com/8c5a0c8768.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../sistem/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
				<form name=form1 method=post action=../akun/carijasa.php onsubmit="return validate()">
					<input class=input type=text name=cari maxlength=100 placeholder="Cari jasa disini">
					<input class=submit type=submit value="Cari">
				</form>
		</div>

	<div class="topnav" id="myTopnav">
	
		<img src="../gambar/logo/ayok.png">
		<div class="menu">
		<a href="../index.php"><b>Home</b></a>
		<a href="../akun/bookmark.php"><b>Bookmark</b></a>
		<a href="../akun/profil.php"><b>Profile</b></a>
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
					<h2>Laporkan Jasa</h2>
				</div>
				<div class="block2">
					<h3><center>Laporan anda terhadap jasa*</center></h3>
					<form name="form1" method="post" action="../sistem/reportproses.php">
					<h5>Apa penyebab anda melaporkan jasa ini?<br><br>
					<select class="input" name="jenis_laporan">
						<option></option>
						<option>Jasa tidak sesuai keterangan di aplikasi</option>
						<option>Jasa melakukan pelayanan yang sangat buruk</option>
						<option>Jasa melakukan penipuan</option>
						<option>Penyedia Jasa melakukan tindak kriminal</option>
						<option>Jasa mengandung SARA dan kata-kata tidak pantas</option>
						<option>Lain-lain</option>
					</select><BR><br>
					Deskripsikan laporan anda<br><br>
					<input type="text" name="laporan" placeholder="Deskripsi Laporan" size="40"><br><br><br>
					<input type="submit" value="Laporkan" style="width:90px"><br><br>
					</form>
					<font><i>*Dengan melaporkan jasa ini, anda sepenuhnya sadar dan yakin bahwa jasa yang dimaksud melakukan pelanggaran hak konsumen (dalam hal ini pengguna jasa) dan melakukan hal-hal yang
					tidak seharusnya dilakukan sehingga merugikan pihak konsumen. Anda juga siap bertanggung jawab atas laporan yang anda berikan.</i></font>
				</div>
			</div>
			<?php include("../footer.php");?>
		</div>
	</div>
</body>
</html>