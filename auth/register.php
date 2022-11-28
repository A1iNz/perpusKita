<?php
	include '../template/navbarauth.php';
	session_destroy();
?>

<body>
	<link rel="stylesheet" href="../assets/css/haldep.css">
		<div class="card container col-sm-7 mt-5">
			<div class="card-body ms-3">
				<?php
					session_start();
					if(isset($_SESSION['error'])) {
				?>
				<div class="alert alert-warning" role="alert">
					<?php echo $_SESSION['error']?>
				</div>
				<?php
					}
				?>
				<?php
					if(isset($_SESSION['message'])) {
				?>
				<div class="alert alert-success" role="alert">
					<?php echo $_SESSION['message']?>
				</div>
				<?php
					}
				?>
				<h1 class="text-center">Register Form</h1>
				<div class="card-body">
					<form action="process-register.php" method="POST">
						<div class="input-group mb-3">
							<span class="input-group-text" id="basic-addon1"></span>
							<input type="text" class="form-control" placeholder="Nama Lengkap" aria-label="Nama Lengkap" aria-describedby="basic-addon1" id="nama" name="nama" value="<?php echo @$_SESSION['username']?>" require>
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text" id="basic-addon1"></span>
							<input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="username" name="username" value="<?php echo @$_SESSION['username']?>" require>
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text"></span>
							<input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" id="pass" name="pass" value="<?php echo @$_SESSION['password']?>" require>
							<span class="input-group-text"></span>
							<input type="password" class="form-control" placeholder="Konfirmasi Password" aria-label="Konfirmasi Password" aria-describedby="basic-addon1" id="password_confirmation" name="password_confirmation" value="<?php echo @$_SESSION['password_confirmation']?>" require>
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text" id="basic-addon1"></span>
							<input type="text" class="form-control" placeholder="kota, hh/bb/tttt" aria-label="Tempat Tanggal lahir" aria-describedby="basic-addon1" id="ttl" name="ttl" require>
						</div>
						<div class="input-group mb-3">
							<label class="input-group-text" for="gender"></label>
							<select class="form-select" id="gender" name="gender" placeholder="Jenis Kelamin" aria-label="Jenis Kelamin" require>
								<option selected><p class="text-secondary">Jenis Kelamin</p</option>
								<option value="L">Laki Laki</option>
								<option value="P">Perempuan</option>
							</select>
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text" id="basic-addon1"></span>
							<input type="tel" class="form-control" placeholder="No telepon" aria-label="No telepon" aria-describedby="basic-addon1" id="no_telp" name="no_telp" require>
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text"></span>
							<textarea class="form-control" aria-label="alamat" placeholder="Alamat" name="alamat" id="alamat" require></textarea>
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text" id="basic-addon1"></span>
							<input type="text" class="form-control" placeholder="Kelas" aria-label="Kelas" aria-describedby="basic-addon1" id="kelas" name="kelas" require>
						</div>
						<div class="input-group row mt-5">
							<button type="submit" class="mt-3 col-sm-2 ms-2 btn btn-primary">Register</button>
							<p class="text-end col mt-3 ms-5" style="">Sudah punya akun?<a href="formlogin.php" style="">Klik di sini!!</a></p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
<?php
	session_destroy();
?>
