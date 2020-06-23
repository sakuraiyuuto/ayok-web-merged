<?php 

error_reporting(0);

ini_set('display_errors', 0);


$server_database  = "sql304.epizy.com";
$username_database = "epiz_26042887";
$password_database = "YIt3nf0yROCaBMd";
$nama_database = "epiz_26042887_ayok";

//koneksi dan memilih database di server 
$konek = mysqli_connect($server_database , $username_database, $password_database , $nama_database);

?>