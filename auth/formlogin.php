<?php
	include '../template/navbarauth.php';
?>

<body>
	<link rel="stylesheet" href="../assets/css/haldep.css">
	<br/>
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

	<br/><br/>
	<div class="card container col-sm-7">
		<div class="card-body ms-3">
			<form method="POST" action="ceklog.php">
				<h1 class="text-center fs-1">Login</h1><br>
				<div class="row mb-3">
					<label for="username" class="fs-5 col-sm-2  col-form-label-lg">Username</label>
					<div class="col-sm-10">
						<input type="username" class="form-control" id="username" name="username">
						<input type="hidden" name="id" value="<?php echo $d['iduser']; ?>">
					</div>
				</div>
				<div class="row mb-5">
					<label for="password" class="fs-5 col-sm-2 col-form-label-lg">Password</label>
					<div class="col-sm-10">
					<input type="password" class="form-control" id="password" name="password" require>
					</div>
				</div>
				<div class="row ms-2 me-2 mt-5">
					<button type="submit" class="fs-5 col-sm-2 btn btn-primary">Login</button>
					<p class="col-sm-10 fs-5 d-grid gap-2 d-md-flex justify-content-md-end" style=""> Belum punya akun?<a href="register.php" style="">Daftar di sini!!</a></p>
				</div>
			</form>
		</div>
	</div>
</body>