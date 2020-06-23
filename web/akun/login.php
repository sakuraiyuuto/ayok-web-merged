<?php
	session_start();
	include_once("../sistem/koneksi_database.php");

	//jika sudah login
	if (isset($_SESSION["login"]))
	{
		header("Location: ../index.php");
		exit;
	}

	//cek akun terdaftar
	if(isset($_POST["login"]))
	{
		$email = $_POST["email"];
		$password = $_POST["password"];
	
		$perintah = "SELECT * FROM user WHERE email = '$email'";
		$result = mysqli_query($konek , $perintah);

		//cek username
		if (mysqli_num_rows($result) === 1)
		{
			//cek password
			$row = mysqli_fetch_assoc($result);
			if (password_verify($password, $row["password"]))
			{
				//set session akun		
				$_SESSION["login"] = true;
				$_SESSION['id_akun']=$row['id_akun'];
				$_SESSION['nama']=$row['nama'];
				$_SESSION['email']=$row['email'];
				$_SESSION['nomor_telepon']=$row['nomor_telepon'];
				$_SESSION['password']=$row['password'];
				header('location: ../index.php');
				exit;
			}
		}
		$error = true;
	}
?>

<html lang="en" dir="ltr">
<head>
<style>
	@media(max-width:800px){
		body{
			background: url('../gambar/poster.jpg');
	background-repeat: no-repeat;
	background-position: 50%;
	background-size : cover;

		}
	}
</style>
	<meta charset="utf-8">
	<title>Ayo Kerja !</title>
	<link rel="stylesheet" href="../sistem/style.css">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

	<script type="text/javascript">
		//form tidak boleh kosong
		function validate()
		{
			obj = document.form1;
			email = obj.email.value;
			submitOK="True";

			if (email =="")
			{
				alert("Email harus diisi!");
				obj.email.focus();
				return false;
			}
					
			if (password =="")
			{
				alert("Password harus diisi!");
				obj.password.focus();
				return false;
			}

			if (submitOK == false)
			{
				return false;
			}
		}
	</script>		
<body>


	<!--form login -->
	<image id="vid_grad">
	</image>
	<div class = "block4_wrap">
	

	<video id='videobg' poster ="..gambar/poster.jpg" autoplay muted loop>
		<source src="../gambar/pontianak.mp4" type="video/mp4" >
	</video>
	
	<div id='img'>
	<img src="../white.png">
	</div>
	
	<div class="block4">
	
		<p>ayo <b>kerja !</b></p>
		<h1>Login</h1>
		<form name="form1" action="" method="post" onsubmit="return validate()">
			<?php 
				//pesan error
				if(isset($error)) : 
			?>
			<p style="font-size:90%;color :red; font-style: italic;">Email / Password Salah</p>
			<?php endif; ?>

					<div class="input-box">
						<input 	type="text" name="email" placeholder="Email" class="form-control" required=""
						oninvalid="this.setCustomValidity('Masukkan Email Anda')"
						oninput="setCustomValidity('')"></input>
					</div>
					<div class="input-box">
						<input type="password" name="password" placeholder="Password" class="form-control" required=""
						oninvalid="this.setCustomValidity('Masukkan Password Anda')"
						oninput="setCustomValidity('')"></input>
					</div>
					<div class="submit">
						<input type="submit" name="login" value="Login">
					</div>
		</form>
		<p> Belum punya akun? <a href="../akun/registrasi.php" style="text-align:center"> Daftar sekarang. </a></p>
	</div>
	</div>
</body>

</html>
