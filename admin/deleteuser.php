<?php
include("koneksi.php");

$idusr  = $_GET['id'];
$idjasa = mysqli_query($link,"SELECT id_jasa FROM jasa WHERE id_akun = '$idusr'");
$row = mysqli_fetch_assoc($idjasa);
$id_jasa = $row['id_jasa'];

$delete = mysqli_query($link,"DELETE FROM user WHERE id_akun = '$idusr'");
$sql = mysqli_fetch_assoc($delete);

$deletejasa = mysqli_query($link,"DELETE FROM jasa WHERE id_akun = '$idusr'");
$sqljasa = mysqli_fetch_assoc($deletejasa);

$deletefoto = mysqli_query($link,"DELETE FROM foto WHERE id_jasa = '$id_jasa'");
$sqlfoto = mysqli_fetch_assoc($deletefoto);

$deletereview = mysqli_query($link,"DELETE FROM reviews WHERE id_akun = '$idusr'");
$sqlreview = mysqli_fetch_assoc($deletereview);

$deletebookmark = mysqli_query($link,"DELETE FROM bookmark WHERE id_akun = '$idusr'");
$sqlbookmark = mysqli_fetch_assoc($deletebookmark);

$deletereport = mysqli_query($link,"DELETE FROM report WHERE id_akun = '$idusr'");
$sqlreport = mysqli_fetch_assoc($deletereport);

echo"<script>
		alert('Data User Berhasil Dihapus');
		document.location.href = 'manajemen_akun_user.php';
	</script>";
?>