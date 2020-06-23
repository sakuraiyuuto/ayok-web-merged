<?php
include("koneksi.php");

$idjasa  = $_GET['id'];

$delete = mysqli_query($link,"DELETE FROM jasa WHERE id_jasa = '$idjasa'");
$sql = mysqli_fetch_assoc($delete);

$deletefoto = mysqli_query($link,"DELETE FROM jasa WHERE id_jasa = '$idjasa'");
sqlfoto = mysqli_fetch_assoc($deletefoto);

$deletereview = mysqli_query($link,"DELETE FROM reviews WHERE id_jasa = '$idjasa'");
$sqlreview = mysqli_fetch_assoc($deletereview);

$deletereport = mysqli_query($link,"DELETE FROM report WHERE id_jasa = '$idjasa'");
$sqlreport = mysqli_fetch_assoc($deletereport);

echo"<script>
		alert('Data Jasa Berhasil Dihapus');
		document.location.href = 'manajemen_jasa.php';
	</script>";
?>