<?php
	session_start();
	include 'koneksi.php';

	$username = $_POST['username'];
    // $id = $_POST['id'];
    // $id = $_POST['id'];
    // $data=mysqli_query($koneksi,"select * from users where username='$username' and pass='$password'");

    // $cek = mysqli_num_rows($data);

    // $username=$_SESSION['username'];
    $ses_sql=mysqli_query($koneksi,"select * from users where username='$username'");
    // $assoc = MYSQLI_ASSOC();
    // mysqli_fetch_assoc($result);
    $row=mysqli_fetch_array($ses_sql);
    $loggedin_session=$row['username'];
    $loggedin_id=$row['iduser'];

    if(!isset($loggedin_session) || $loggedin_session==NULL) {
        echo "Go back";
        header("Location: formlogin.php");
    }else{
        $_SESSION['username'] = $loggedin_session;
        $_SESSION['iduser'] = $loggedin_id;
        $_SESSION['status'] = "login";
        header("Location: ../index.php");
    }
    // if($cek > 0){
    //     $_SESSION['username'] = $username;
    //     $_SESSION['id'] = $id;
    //     $_SESSION['status'] = "login";
    //     header("location: ../index.php");
    // }else{
    //     var_dump($username);
        
    //     var_dump($password);
    //     var_dump($_SESSION);
    // }
?>
