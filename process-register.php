<?php
session_start();

include "koneksi.php";

//dapatkan data user dari form register
$user = [
	'username' => $_POST['username'],
	'nama' => $_POST['nama'],
	'pass' => $_POST['pass'],
	'password_confirmation' => $_POST['password_confirmation'],
];

//validasi jika password & password_confirmation sama

if($user['pass'] != $user['password_confirmation']){
	$_SESSION['error'] = 'Password yang anda masukkan tidak sama dengan password confirmation.';
	$_SESSION['username'] = $_POST['username'];
	$_SESSION['nama'] = $_POST['nama'];
	header("Location: register.php");
	return;
};

//check apakah user dengan username tersebut ada di table users
$query = "select * from users where username = ? limit 1";
$stmt = $koneksi->stmt_init();
$stmt->prepare($query);
$stmt->bind_param('s', $user['username']);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_array(MYSQLI_ASSOC);

//jika username sudah ada, maka return kembali ke halaman register.
if($row != null){
	$_SESSION['error'] = 'Username: '.$user['username'].' yang anda masukkan sudah ada di database.';
	$_SESSION['nama'] = $_POST['nama'];
	$_SESSION['pass'] = $_POST['pass'];
	$_SESSION['password_confirmation'] = $_POST['password_confirmation'];
	header("Location: register.php");
	return;

}else{
	//hash password
	$passw = $user['pass'];

	//username unik. simpan di database.
	$query = "insert into users (nama, username, pass) values  (?,?,?)";
	$stmt = $koneksi->stmt_init();
	$stmt->prepare($query);
	$stmt->bind_param('sss', $user['nama'],$user['username'],$passw);
	$stmt->execute();
	$result = $stmt->get_result();
	var_dump($result);

	$_SESSION['message']  = 'Berhasil register ke dalam sistem. Silakan login dengan username dan password yang sudah dibuat.';
	header("Location: formlogin.php");
}
session_destroy();

?>
