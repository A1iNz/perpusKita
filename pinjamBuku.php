<?php
    session_start();
    include 'auth/koneksi.php';

    $query = mysqli_query($koneksi, "SELECT max(noPeminjaman) as nomor FROM pinjam");
    $data = mysqli_fetch_array($query);

    $id_buku = $_POST['id_buku'];
	$tanggalPinjam = date("Y-m-d");
	$tanggalKembali = date('Y-m-d', strtotime('+7 days', strtotime($tanggalPinjam)));
    $idUser = $_SESSION['iduser'];
    $noPeminjaman = $data['nomor'];
    $no = (int) substr($noPeminjaman, 5, 5);
    $no++;
    

    $huruf = "P-";
    $noPeminjaman = $huruf . sprintf("%05s", $no);

	// $sql = "INSERT INTO pinjam (id_buku, id_user, noPeminjaman, tanggalPinjam, tanggalKembali) VALUES ('$id_buku', '$idUser', '$noPeminjaman', '$tanggalPinjam','$tanggalKembali')";
	// mysqli_query($koneksi, $sql);
    echo $id_buku;
    // header("Location: daftarbuku.php");
?>