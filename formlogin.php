<!DOCTYPE html>
<html>
	<head>
		<title>log in</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<br/>
		<!-- cek pesan notifikasi -->
		<?php 
		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "gagal"){
				echo "Login gagal! username dan password salah!";
			}else if($_GET['pesan'] == "logout"){
				echo "Anda telah berhasil logout";
			}else if($_GET['pesan'] == "belum_login"){
				echo "Anda harus login untuk mengakses halaman admin";
			}
		}
		?>

		<br/>
		<br/>
		
		<form method="POST" action="ceklog.php">
			<div class="container">
				<h1>Login</h1>
				<form>
					<label>Username</label><br>
					<input type="text" name="username"><br>
					<label>Password</label><br>
					<input type="password" name="pass"><br><br>
					<button>Log in</button>
					<p style="color : white;"> Belum punya akun?<a href="register.php" style="color: white;">Daftar di sini</a></p>
				</form>
			</div>			
		</form>
	</body>
</html>