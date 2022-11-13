<?php
	include '../template/navbarauth.php';
?>

<body>
	<link rel="stylesheet" href="../assets/css/haldep.css">
	<div class="container">
		<div class="row">
			<div class="col-6 offset-md-3 mt-5">
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
				<div class="card d-flex justify-content-between">
					<div class="card-title text-center">
						<h1>Register Form</h1>
					</div>
					<div class="card-body">
						<form action="process-register.php" method="POST">
							<div class="form-group">
								<label for="username">Nama Lengkap</label>
								<input type="text" name="nama" class="form-control" id="name" aria-describedby="name" placeholder="Nama lengkap" autocomplete="off" require>
							</div>
							<div class="form-group">
								<label for="username">Username</label>
								<input type="text" name="username" class="form-control" id="username" value="<?php echo @$_SESSION['username']?>" aria-describedby="username" placeholder="username" autocomplete="off" require>
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" name="pass" class="form-control" id="password" value="<?php echo @$_SESSION['password']?>" placeholder="Password" require>
							</div>
							<div class="form-group">
								<label for="password">Konfirmasi Password</label>								
								<input type="password" name="password_confirmation" class="form-control" id="password_confirmation" value="<?php echo @$_SESSION['password_confirmation']?>"  placeholder="Konfirmasi Password" require>
							</div>
							<div class="form-group">
								<label for="ttl">Tempat tanggal Lahir</label>
								<input type="text" name="ttl" class="form-control" id="ttl" aria-describedby="ttl" placeholder="Tempat tanggal Lahir" require>
							</div>
							<div class="form-group">
								<label for="gender">Jenis Kelamin</label>	
								<input type="text" name="gender" class="form-control" id="gender" aria-describedby="Jenis Kelamin" placeholder="Jenis Kelamin" require>
							</div>
							<div class="form-group">
								<label for="kelas">kelas</label>
								<input type="kelas" name="kelas" class="form-control" id="kelas" placeholder="kelas" require>
							</div>
							<div class="form-group">
								<label for="alamat">alamat</label>
								<textarea name="alamat" class="form-control" id="alamat" placeholder="alamat" require></textarea>
							</div>
							<div class="form-group">
								<label for="no_telp">no_telp</label>
								<input type="tel" name="no_telp" class="form-control" id="no_telp" placeholder="no_telp" require>
							</div>
							<button type="submit" class="btn btn-primary" require>Register</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

<?php
	session_destroy();
?>
