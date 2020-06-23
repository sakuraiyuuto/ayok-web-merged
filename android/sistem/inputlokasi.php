<?php 
	include("../sistem/koneksi_database.php");
	include("../sistem/cek_session.php");
	
$lat=$_POST["lat"];
$lng=$_POST["lng"];
$id_jasa=$_SESSION["id_jasa"];

$perintah8="SELECT * FROM lokasi WHERE id_jasa = '$id_jasa'";
	$hasil8 = mysqli_query($konek , $perintah8);
if($row8=mysqli_fetch_array($hasil8)) {
	
$perintah2="UPDATE lokasi set id_jasa='$id_jasa', lat='$lat', lng='$lng' where id_jasa='$id_jasa'";
	$result2 = mysqli_query($konek , $perintah2);

	if($result2){
		echo "<script>
					window.history.back();
				</script>";
	}
	else {
		echo "gagal update lokasi";
	}

}
else {
	
	$perintah1="INSERT INTO lokasi VALUES ('$id_jasa','$lat','$lng')";
	$result1 = mysqli_query($konek , $perintah1);

	if($result1){
		echo "<script>
					window.history.back();
				</script>";
	}
	else {
		echo "gagal input lokasi";
	}
	
	
}
?>