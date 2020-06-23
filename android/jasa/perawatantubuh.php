<?php
	include("../sistem/cek_session.php");
	include("../sistem/koneksi_database.php");
?>
<html>
<head>
<title>Ayo Kerja !</title>
<link rel="stylesheet" href="../sistem/jasa.css">
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
		<center><h2>Perawatan Tubuh</h2></center>
		</div>
		<div class="block2">

<div class="block7">
<?php		
$id_kategori2="0503";
$perintah="SELECT * FROM jasa WHERE id_kategorijasa LIKE '%$id_kategori2%' ORDER BY urutan DESC";
$hasil=mysqli_query($konek, $perintah);
if($row=mysqli_fetch_array($hasil))
{	

$perintah="SELECT * FROM jasa WHERE id_kategorijasa LIKE '%$id_kategori2%' ORDER BY urutan DESC";
$hasil=mysqli_query($konek, $perintah);
while($row=mysqli_fetch_array($hasil))
{	
	
	$perintah2="SELECT * FROM kategori WHERE id_kategori2='$row[0]'";
					$hasil2=mysqli_query($konek, $perintah2);
					while($row2=mysqli_fetch_array($hasil2)){

		$perintah3="SELECT * FROM foto where id_jasa='$row[1]'";
		$hasil3=mysqli_query($konek, $perintah3);
			if($row3=mysqli_fetch_array($hasil3)){
			$imageURL='../../database/akun/foto_jasa/'.$row3[1];
}
else {
	$imageURL='../gambar/akun/jasa.png';
}
echo "<a href=\"../akun/tampilanjasa.php?data1=$row[2]&data2=$row[3]\">";
		echo "<div class=\"box8\">";
		
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
		if($row[10]>'0'){
			echo "<div class=\"verified\">✔️</div>";
		}	
		?>
		<div class="subbox1">
		<?php
		echo "<img src=\"$imageURL\"><br>";	
		?>
		</div>
		<div class="subbox2">
		<?php
echo "<b>$row[3]</b><br>";
echo $row2[3]."<br>";
echo "📞";echo "$row[8]";echo "<br>";
echo "$row[5]";echo "<br>";
$_SESSION['nama_jasa']=$row[3];
echo "</div>";	
echo "</div>";	
echo "</a>";
					}
					
}
}
else {
	echo "<h5><center>Maaf, jasa belum ada..</center></h5>";
}
			
			


			?>
			
			
			</div>
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
			