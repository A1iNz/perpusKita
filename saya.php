<?php
	session_start();
	include 'auth/koneksi.php';
	include 'template/navbar.php';

	$username = $_SESSION['username'];
	$idUser = $_SESSION['iduser'];
	$id = 1;


	$sql = "SELECT * FROM users where username = '$username'";
	$result = mysqli_query($koneksi, $sql);
	$rows = mysqli_fetch_assoc($result);
	
	$sql2 = "SELECT * FROM pinjam INNER JOIN buku ON  buku.id_buku = pinjam.id_buku where id_user = '$idUser'";
	$result2 = mysqli_query($koneksi, $sql2);

	$sql1 = "SELECT * FROM kategoriSaya";
	$result1 = mysqli_query($koneksi, $sql1);
	error_reporting(0);
?>

<div class="m-5 card">
	<div class="m-5 row">
		<center><h1><?php echo($rows['username']); ?></h1></center>
		 <div class="mt-5 col-sm-2">
			<div class="card mb-5">
			<?php while ($row = mysqli_fetch_assoc($result1)) :?>
				<center>
					<div class="mt-4 pb-2 ">
						<a class="btn btn-outline-warning" href="?category=<?php echo $row['idkategori']; ?>"><?php echo $row['kategori'] ?></a>
					</div>
				</center>
			<?php endwhile; ?>
			</div>
		</div>
		<div class="mt-5 col-sm-10" >
			<div class="card">
				<?php 
					$kat = $_GET["category"];
					// var_dump($kat);
					if($kat == "1") { 
				?>
				<div class="col">
					<div class="card-body">
						<table id="pinjam" class="display">
							<thead>
								<tr>
									<th>No.</th>
									<th>Judul</th>
									<th>Kode Peminjaman</th>
									<th>Tanggal Peminjaman</th>
									<th>Tenggat Pengembalian</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<?php while ($row2 = mysqli_fetch_assoc($result2)) :?>
									<center>
										<tr>
											<th><?php echo $id++ ?></th>
											<th><?php echo $row2['judul'] ?></th>
											<th><?php echo $row2['noPeminjaman'] ?></th>
											<th><?php echo $row2['tanggalPinjam'] ?></th>
											<th><?php echo $row2['tanggalKembali'] ?></th>
											<th>
												<div>
													<!-- Button trigger modal -->
													<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Lihat</button>

													<!-- Modal -->
													<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered modal-lg">
															<div class="modal-content">
															<div class="modal-header">
																<h1 class="modal-title fs-3" id="staticBackdropLabel">Modal title</h1>
																<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
															</div>
															<?php
																if($row2['id_jenis'] = 1){
																	$jenisBuku = 'Fiksi';
																}elseif($row2['id_jenis'] = 2){
																	$jenisBuku = 'Ilmiah';
																}elseif($row2['id_jenis'] = 3){
																	$jenisBuku = 'Sastra';
																}elseif($row2['id_jenis'] = 4){
																	$jenisBuku = 'Pengetahuan Umum';
																}elseif($row2['id_jenis'] = 5){
																	$jenisBuku = 'Saintek';
																}elseif($row2['id_jenis'] = 6){
																	$jenisBuku = 'Sejarah';
																}elseif($row2['id_jenis'] = 7){
																	$jenisBuku = 'Seni';
																}else{
																	$jenisBuku = '-';
																}
															?>
															<div class="modal-body"><div class="mb-3">
																<form>
																	<fieldset disabled>
																		<div class="mb-3 fs-5">
																			<label for="judul" class="col-form-label">Judul Buku :</label>
																			<input type="text" class="form-control" id="judul" value="<?php echo $row2['judul'] ?>">
																		</div>
																		<div class="mb-3 fs-5">
																			<label for="genre" class="col-form-label">Jenis Buku :</label>
																			<input type="text" class="form-control" id="genre" value="<?php echo $jenisBuku ?>">
																		</div>
																		<div class="mb-3 fs-5">
																			<label for="pengarang" class="col-form-label">pengarang :</label>
																			<input type="text" class="form-control" id="pengarang" value="<?php echo $row2['pengarang'] ?>">
																		</div>
																		<div class="mb-3 fs-5">
																			<label for="TahunTerbit" class="col-form-label">Tahun Terbit :</label>
																			<input type="text" class="form-control" id="TahunTerbit" value="<?php echo $row2['tanggal_terbit'] ?>">
																		</div>
																		<div class="mb-3 fs-5">
																			<label for="Penerbit" class="col-form-label">Penerbit :</label>
																			<input type="text" class="form-control" id="Penerbit" value="<?php echo $row2['penerbit'] ?>">
																		</div>
																		<div class="mb-3 fs-5">
																			<label for="recipient-name" class="col-form-label">Recipient:</label>
																			<input type="text" class="form-control" id="recipient-name" value="<?php echo $row2['judul'] ?>"> 
																		</div>
																	</fieldset>
																</form>
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
															</div>
															</div>
														</div>
													</div>
												</div>
											</th>
										</tr>
									</center>
								<?php endwhile; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<?php }elseif($kat == "2") { ?>
				<div class="col">
					<div class="card-body">
						<table id="kembali" class="display">
						<thead>
								<tr>
									<th>No.</th>
									<th>Judul</th>
									<th>Tanggal Peminjaman</th>
									<th>Tenggat Pengembalian</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php while ($row2 = mysqli_fetch_assoc($result2)) :?>
									<center>
										<tr>
											<th><?php echo $id++ ?></th>
											<th><?php echo $row2['judul'] ?></th>
											<th><?php echo $row2['tanggalPinjam'] ?></th>
											<th><?php echo $row2['tanggalKembali'] ?></th>
											<th>
												<div>
													<a href="" class="btn btn-primary">View</a>
												</div>
											</th>
										</tr>
									</center>
								<?php endwhile; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<?php }elseif($kat == "3"){ ?>
				<div class="card-body">
					<div class="row">
						<label for="nama" class="col-sm-3 col-form-label">Nama</label>
						<div class="col-sm-9">
							<input type="text" readonly class="form-control-plaintext" id="nama" value="<?php ?> :	 <?php echo($rows['username']); ?>">
						</div>
					</div>
					<div class="row">
						<label for="ttl" class="col-sm-3 col-form-label">Tempat, Tanggal Lahir</label>
						<div class="col-sm-9">
							<input type="text" readonly class="form-control-plaintext" id="ttl" value="<?php ?> :	 <?php echo($rows['ttl']); ?>">
						</div>	
					</div>
					<div class="row">
						<label for="gender" class="col-sm-3 col-form-label">Jenis Kelamin</label>
						<div class="col-sm-9">
							<input type="text" readonly class="form-control-plaintext" id="gender" value="<?php ?> :	 <?php echo($rows['gender']); ?>">
						</div>
					</div>
					<div class="row">
						<label for="kelas" class="col-sm-3 col-form-label">Kelas</label>
						<div class="col-sm-9">
							<input type="text" readonly class="form-control-plaintext" id="kelas" value="<?php ?> :	 <?php echo($rows['kelas']); ?>">
						</div>
					</div>
					<div class="row">
						<label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
						<div class="col-sm-9">
							<input type="text" readonly class="form-control-plaintext" id="alamat" value="<?php ?> :	 <?php echo($rows['alamat']); ?>">
						</div>
					</div>
					<div class="row">
						<label for="no_telp" class="col-sm-3 col-form-label">Nomor Telepon</label>
						<div class="col-sm-9">
							<input type="text" readonly class="form-control-plaintext" id="no_telp" value="<?php ?> :	 <?php echo($rows['no_telp']); ?>">
						</div>
					</div>
				</div>
			<?php }else{?>
				<div class="card-body">
					<div class="row">
						<label for="nama" class="col-sm-3 col-form-label">Nama</label>
						<div class="col-sm-9">
							<input type="text" readonly class="form-control-plaintext" id="nama" value="<?php ?> :	 <?php echo($rows['username']); ?>">
						</div>
					</div>
					<div class="row">
						<label for="ttl" class="col-sm-3 col-form-label">Tempat, Tanggal Lahir</label>
						<div class="col-sm-9">
							<input type="text" readonly class="form-control-plaintext" id="ttl" value="<?php ?> :	 <?php echo($rows['ttl']); ?>">
						</div>	
					</div>
					<div class="row">
						<label for="gender" class="col-sm-3 col-form-label">Jenis Kelamin</label>
						<div class="col-sm-9">
							<input type="text" readonly class="form-control-plaintext" id="gender" value="<?php ?> :	 <?php echo($rows['gender']); ?>">
						</div>
					</div>
					<div class="row">
						<label for="kelas" class="col-sm-3 col-form-label">Kelas</label>
						<div class="col-sm-9">
							<input type="text" readonly class="form-control-plaintext" id="kelas" value="<?php ?> :	 <?php echo($rows['kelas']); ?>">
						</div>
					</div>
					<div class="row">
						<label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
						<div class="col-sm-9">
							<input type="text" readonly class="form-control-plaintext" id="alamat" value="<?php ?> :	 <?php echo($rows['alamat']); ?>">
						</div>
					</div>
					<div class="row">
						<label for="no_telp" class="col-sm-3 col-form-label">Nomor Telepon</label>
						<div class="col-sm-9">
							<input type="text" readonly class="form-control-plaintext" id="no_telp" value="<?php ?> :	 <?php echo($rows['no_telp']); ?>">
						</div>
					</div>
				</div>
				<?php }
				?>
				<script>
					$(document).ready( function () {
						$('#pinjam').DataTable();
					} );

					$(document).ready( function () {
						$('#kembali').DataTable();
					} );

					function pinjam() {
						if (document.getElementById('text').innerHTML === 'Buku Yang Dipinjam') {
							document.getElementById('pinjam').setAttribute('style', 'display:block');
							document.getElementById('default').setAttribute('style', 'visibility:hidden');
						} else {
							document.getElementById('topmenu').setAttribute('style', 'visibility:hidden');
						}
					}
				</script>
			</div>
		</div>
	</div>
</div>