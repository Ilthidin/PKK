<?php 
$server = "localhost";
$user = "root";
$pass = "";
$database = "pkk";
$conn = mysqli_connect($server, $user, $pass, $database);
if (!$conn) {
     die("<script>alert('Gagal tersambung dengan database.')</script>");
}

session_start();

$username = $_POST['username'];
$password = $_POST['password'];
 
$login = mysqli_query($conn,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
	$data = mysqli_fetch_assoc($login);
	//login sebagai admin
	if($data['level']=="admin"){
		$_SESSION['admin'] = true;
		header("location:home-admin.php");
 
	//login sebagai user
	}else if($data['level']=="user"){
		$_SESSION['user'] = true;
		header("location:home.php");

	}else{
		//kembali ke login kembali
        $error = "Username atau password salah. Silakan coba lagi.";
		header("location:login.php");
	}	
}