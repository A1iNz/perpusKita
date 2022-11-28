<?php

	$judul = $_POST['judul'];
	$idJenis = $_POST['id_jenis'];
	$status = $_POST['status'];
	$pengarang = $_POST['pengarang'];
	$tanggalTerbit = $_POST['tanggal_terbit'];
	$penerbit = $_POST['penerbit'];


	// ambil data file
	$namaFile = $_FILES['file']['name'];
	$namaSementara = $_FILES['file']['tmp_name'];

	// tentukan lokasi file akan dipindahkan
	$dirUpload = "assets/terupload/";

	// pindahkan file
	$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

	$db = mysqli_connect("localhost", "root", "", "perpuskita");
	
	// Get all the submitted data from the form
	$sql = "INSERT INTO buku (judul, id_jenis, status, pengarang, tanggal_terbit, penerbit, cover) VALUES ('$judul', '$idJenis', '$status','$pengarang','$tanggalTerbit', '$penerbit', '$namaFile')";
	mysqli_query($db, $sql);

	if ($terupload) {
		header("Location: daftarbuku.php");
	} else {
		echo "Upload Gagal!";
	}
	// header("Location : daftarbuku.php");
	print_r($_FILES);
?>