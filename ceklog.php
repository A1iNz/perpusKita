<?php
	session_start();
	include 'koneksi.php';

	$username = $_POST['username'];
    $password = $_POST['pass'];
    
    $data=mysqli_query($koneksi,"select * from users where username='$username' and pass='$password'");

    $cek = mysqli_num_rows($data);

    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:index.php");
    }else{
        var_dump($username);
        
        var_dump($password);
        var_dump($_SESSION);
    }
    session_destroy();

?>
