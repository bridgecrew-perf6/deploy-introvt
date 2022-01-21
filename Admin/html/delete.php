<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$user_id   = $_GET['user_id'];
// query SQL untuk insert data
$query="DELETE from tbl_user where user_id='$user_id'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>