<?php 
    include "koneksi.php";
    $cek_user=mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username='$_POST[username]'"));
    if ($cek_user > 0) {
        echo '<script language="javascript">
              alert ("Username atau Email Sudah Ada Yang Menggunakan");
              window.location="index.html";
              </script>';
              exit();
    }
    else {

        mysqli_query($koneksi,"INSERT INTO tbl_user (username, password, alamat, email, user_level)
        VALUES ('$_POST[username]','$_POST[password]','$_POST[alamat]','$_POST[email]','user')");

        echo '<script language="javascript">
              alert ("Registrasi Berhasil Di Lakukan!");
              window.location="User/index.php";
              </script>';
              exit();
    }
?>