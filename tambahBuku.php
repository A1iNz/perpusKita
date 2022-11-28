<?php
    include 'template/navbar.php';
?>

<div class="card container col-sm-7 mt-5">
		<div class="card-body ms-3">
			<form method="POST" action="uploadBuku.php" enctype='multipart/form-data'>
				<h1 class="text-center fs-1">Tambah Buku</h1><br>
				<div class="row mb-3">
					<div class="col-sm-12">
						<input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Buku">
					</div>
				</div>
                <div class="input-group mb-3">
                    <select type="number" class="form-select" id="id_jenis" name="id_jenis" placeholder="Jenis Buku" aria-label="Jenis Buku" require>
                        <option selected><p class="text-secondary">Jenis Buku</p</option>
                        <option value="1">Fiksi</option>
                        <option value="2">Ilmiah</option>
                    </select>
                </div>
				<div class="input-group mb-3">
                    <select type="number" class="form-select" id="status" name="status" placeholder="status Buku" aria-label="status Buku" require>
                        <option selected><p class="text-secondary">status Buku</p</option>
                        <option value="1">Ada</option>
                        <option value="0">Kosong</option>
                    </select>
                </div>
                <div class="row mb-3">
					<div class="col-sm-12">
						<input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="Pengarang">
					</div>
				</div>
                <div class="row mb-3">
					<div class="col-sm-12">
						<input type="text" class="form-control" id="tanggal_terbit" name="tanggal_terbit" placeholder="Tanggal Terbit Buku">
					</div>
				</div>
                <div class="row mb-3">
					<div class="col-sm-12">
						<input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Penerbit">
					</div>
				</div>
				<div class="input-group mb-3">
					<input type="file" class="form-control" id="file" name="file" placeholder="file">
				</div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" name="simpan" class="btn btn-primary fs-5" value="simpan">Tambah</button>
                </div>
			</form>
		</div>
	</div>