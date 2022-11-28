<?php
	include 'auth/koneksi.php';
	include 'template/navbar.php';
	$username = $_SESSION['username'];
	$id = $_SESSION['iduser'];
	$sql = "SELECT * FROM users where username = '$username'";
	$result = mysqli_query($koneksi, $sql);
	$rows = mysqli_fetch_assoc($result);

	$sql1 = "SELECT * FROM kategoriSaya";
	$result1 = mysqli_query($koneksi, $sql1);
	error_reporting(0);
				
?>

<div class="m-5 card">
	<div class="m-5 row">
	<center><h1><?php echo($rows['username']); ?></h1></center>
		<div class="mt-5 col-sm-3">
			<div class="card">
			<?php while ($row = mysqli_fetch_assoc($result1)) :?>
				<div class="mt-4 ms-4 mb-2">
					<a href="?category=<?php echo $row['idkategori']; ?>"><?php echo $row['kategori'] ?></a>
				</div>
			<?php endwhile; ?>
				<!-- <div class="card-body row">
					<a href="#" onclick="pinjam()" class="mt-2" id="text">Buku Yang Dipinjam</a>
					<a href="#" class="mt-2">Buku Yang Sudah Dikembalikan</a>
					<a href="#" class="mt-2">Settings</a>
					<a href="#" class="mt-2">Logout</a>
				</div> -->
			</div>
		</div>
		<div class="mt-5 col-sm-8" >
			<div class="card">
				<?php 
					$kat = $_GET["category"];
					// var_dump($kat);
					if($kat == "1") { 
				?>
				<div class="col-sm-8" id="topmenu">
					<div class="">
						<div class="card-body">
							<h5 class="card-title">Special title treatment</h5>
							<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
			</div>
			<?php }elseif($kat == "2") { ?>
				<div class="col-sm-8" id="topmenu">
					<div class="">
						<div class="card-body">
							<h5 class="card-title">Special title treatment</h5>
							<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
			</div>
			<?php }elseif($kat == "3"){ ?>
				<div class="card-body">
					<div class="row">
						<label for="nama" class="col-sm-4 col-form-label">Nama</label>
						<div class="col-sm-6">
							<input type="text" readonly class="form-control-plaintext" id="nama" value="<?php echo($rows['username']); ?>">
						</div>
					</div>
					<div class="row">
						<label for="ttl" class="col-sm-4 col-form-label">Tempat, Tanggal Lahir</label>
						<div class="col-sm-6">
							<input type="text" readonly class="form-control-plaintext" id="ttl" value="<?php echo($rows['ttl']); ?>">
						</div>	
					</div>
					<div class="row">
						<label for="gender" class="col-sm-4 col-form-label">Jenis Kelamin</label>
						<div class="col-sm-6">
							<input type="text" readonly class="form-control-plaintext" id="gender" value="<?php echo($rows['gender']); ?>">
						</div>
					</div>
					<div class="row">
						<label for="kelas" class="col-sm-4 col-form-label">Kelas</label>
						<div class="col-sm-6">
							<input type="text" readonly class="form-control-plaintext" id="kelas" value="<?php echo($rows['kelas']); ?>">
						</div>
					</div>
					<div class="row">
						<label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
						<div class="col-sm-6">
							<input type="text" readonly class="form-control-plaintext" id="alamat" value="<?php echo($rows['alamat']); ?>">
						</div>
					</div>
					<div class="row">
						<label for="no_telp" class="col-sm-4 col-form-label">Nomor Telepon</label>
						<div class="col-sm-6">
							<input type="text" readonly class="form-control-plaintext" id="no_telp" value="<?php echo($rows['no_telp']); ?>">
						</div>
					</div>
				</div>
			<?php }elseif($kat == "4"){
				session_destroy();
				header("Location: index.php");
			}else{?>
			<div class="card-body">
					<div class="row">
						<label for="nama" class="col-sm-4 col-form-label">Nama</label>
						<div class="col-sm-6">
							<input type="text" readonly class="form-control-plaintext" id="nama" value="<?php echo($rows['username']); ?>">
						</div>
					</div>
					<div class="row">
						<label for="ttl" class="col-sm-4 col-form-label">Tempat, Tanggal Lahir</label>
						<div class="col-sm-6">
							<input type="text" readonly class="form-control-plaintext" id="ttl" value="<?php echo($rows['ttl']); ?>">
						</div>	
					</div>
					<div class="row">
						<label for="gender" class="col-sm-4 col-form-label">Jenis Kelamin</label>
						<div class="col-sm-6">
							<input type="text" readonly class="form-control-plaintext" id="gender" value="<?php echo($rows['gender']); ?>">
						</div>
					</div>
					<div class="row">
						<label for="kelas" class="col-sm-4 col-form-label">Kelas</label>
						<div class="col-sm-6">
							<input type="text" readonly class="form-control-plaintext" id="kelas" value="<?php echo($rows['kelas']); ?>">
						</div>
					</div>
					<div class="row">
						<label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
						<div class="col-sm-6">
							<input type="text" readonly class="form-control-plaintext" id="alamat" value="<?php echo($rows['alamat']); ?>">
						</div>
					</div>
					<div class="row">
						<label for="no_telp" class="col-sm-4 col-form-label">Nomor Telepon</label>
						<div class="col-sm-6">
							<input type="text" readonly class="form-control-plaintext" id="no_telp" value="<?php echo($rows['no_telp']); ?>">
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>

<script>
	function pinjam() {
		if (document.getElementById('text').innerHTML === 'Buku Yang Dipinjam') {
			document.getElementById('text').innerHTML = 'Buku Yang ';
			document.getElementById('topmenu').setAttribute('style', 'display:block');
			document.getElementById('default').setAttribute('style', 'visibility:hidden');
		} else {
			document.getElementById('text').innerHTML = 'Buku Yang Dipinjam';
			document.getElementById('topmenu').setAttribute('style', 'visibility:hidden');
		}
	}
</script>
<!-- <div class="mt-5 container card">
	<div class="row">
		<div class="col">
			<div class="col-3 card text-center h5 mb-3 ms-5 mt-5 content w-25">
				<div class="row">
					<div class="col">
						<div class="col-sm-4">History</div>
						<hr>
						<div class="col-sm-4">History</div>
					</div>
				</div>
			</div>
			<div class="col col-3  card">
				<div class="h1 mb-5 card-title text-center">Profile</div> -->
				
				<!-- <div class="h mb-3 ms-5 mt-5 content">
					<div class="row">
						<label for="nama" class="col-sm-2 col-form-label">Nama</label>
						<div class="col-sm-6">
							<input type="text" readonly class="form-control-plaintext" id="nama" value="<?php echo($rows['username']); ?>">
						</div>
					</div>
					<div class="row">
						<label for="nama" class="col-sm-4 col-form-label">Nama</label>
						<div class="col-sm-6">
							<input type="text" readonly class="form-control-plaintext" id="nama" value="<?php echo($rows['username']); ?>">
						</div>
					</div>
					<div class="row">
						<label for="ttl" class="col-sm-4 col-form-label">Tempat, Tanggal Lahir</label>
						<div class="col-sm-6">
							<input type="text" readonly class="form-control-plaintext" id="ttl" value="<?php echo($rows['ttl']); ?>">
						</div>	
					</div>
					<div class="row">
						<label for="gender" class="col-sm-4 col-form-label">Jenis Kelamin</label>
						<div class="col-sm-6">
							<input type="text" readonly class="form-control-plaintext" id="gender" value="<?php echo($rows['gender']); ?>">
						</div>
					</div>
					<div class="row">
						<label for="kelas" class="col-sm-4 col-form-label">Kelas</label>
						<div class="col-sm-6">
							<input type="text" readonly class="form-control-plaintext" id="kelas" value="<?php echo($rows['username']); ?>">
						</div>
					</div>
					<div class="row">
						<label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
						<div class="col-sm-6">
							<input type="text" readonly class="form-control-plaintext" id="alamat" value="<?php echo($rows['alamat']); ?>">
						</div>
					</div>
					<div class="row">
						<label for="no_telp" class="col-sm-4 col-form-label">Nomor Telepon</label>
						<div class="col-sm-6">
							<input type="text" readonly class="form-control-plaintext" id="no_telp" value="<?php echo($rows['no_telp']); ?>">
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</div>
</div>