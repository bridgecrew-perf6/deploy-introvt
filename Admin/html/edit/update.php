<?php 

include 'koneksi.php';
	$user_id = $_POST['user_id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $alamat = $_POST['alamat'];
    
mysqli_query($koneksi, "UPDATE tbl_user SET user_id='$user_id', username='$username', email='$email', password='$password', alamat='$alamat' WHERE user_id='$user_id'");


header("location:../index.php");
?>