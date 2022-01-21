<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * FROM tbl_user WHERE username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan

$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['user_level']=="admin"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['user_level'] = "admin";
		   if (isset($_POST['remember'])) {
    			setcookie('username', $username, time() + 3600);
		}
		// alihkan ke halaman dashboard admin
		header("location:admin/html/index.php");

	// cek jika user login sebagai userbiasa
	}else if($data['user_level']=="user"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['user_level'] = "user";

				   if (isset($_POST['remember'])) {
    			setcookie('username', $username, time() + 3600);
		}
		// alihkan ke halaman dashboard user
		header("location:User/index.php");

	}else{

		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal1");
	}	
}else{
	header("location:index.php?pesan=gagal2");
}

?>