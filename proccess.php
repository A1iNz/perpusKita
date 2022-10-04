<?php
session_start();

//list user yang valid
//selain user ini tidak bisa login.
$list_user = [
	[
		'username' => 'john',
		'password' => '123456'
	],
	[
		'username' => 'admin',
		'password' => 'admin'
	]
];


//dapatkan data user dari form
$user = [
	'username' => $_POST['username'],
	'password' => $_POST['password'],
];


//cocokan data user dengan list user yang valid.
//misalnya pakai looping saja.

foreach ($list_user as $key => $value) {

	//login success
	if($value['username'] == $user['username'] && $value['password'] == $user['password']){

		$_SESSION['login'] = true;
		$_SESSION['username'] =  $data['username'];
		$_SESSION['message']  = 'Berhasil login ke dalam sistem.';

		header("Location: index.php");

	}

	//password salah
	else if($value['username'] == $user['username'] && $value['password'] !== $user['password']){
		$_SESSION['error'] = 'Password anda salah';
		header("Location: login.php");

	}

	//username salah
	else if($value['username'] !== $user['username']){
		$_SESSION['error'] = 'Username anda tidak ditemukan.';
		header("Location: login.php");
	}


}

?>