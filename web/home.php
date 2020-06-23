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
    <div class="topnav-frame">
        <div class="pencarian">
                <form name=form1 method=post action=carijasa.php onsubmit="return validate()">
                    <input class=input type=text name=cari maxlength=100 placeholder="Cari jasa disini"style="height:30px;border-radius:30px;padding-left:10px;border:1px solid gray;">
                    <input type=submit style="border-radius:10px;border:none;cursor:pointer;border:none;background-color:white;margin-left:1px;" value="Cari">
                </form>
         </div>
         <!--navigation bar-->
        <div class="topnav" id="myTopnav">
            
            <img src="gambar/logo/ayok.png">
            <div class="menu">
            <a href="index.php"><b>Home</b></a>
            <a href="index.php"><b>Bookmark</b></a>
            <a href="akun/profil.php"><b>Profile</b></a>
            <a href="sistem/logout.php"><b>Log Out</b></a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
            </div>
        </div>

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
    </div>
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
                        Cek rekomendasi ! >>
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>
</html>