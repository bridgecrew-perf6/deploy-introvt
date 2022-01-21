<?php 
    include "koneksi.php";
    $cek_user=mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tbl_postingan WHERE judul='$_POST[judul]'"));
    if ($cek_user > 0) {
        echo '<script language="javascript">
              alert ("Data Tidak Boleh Kosong");
              window.location="index.php";
              </script>';
              exit();
    }
    else {

        mysqli_query($koneksi,"INSERT INTO tbl_postingan (judul, konten)
        VALUES ('$_POST[judul]','$_POST[konten]')");

        echo '<script language="javascript">
              alert ("Berhasil Menambahkan Postingan");
              window.location="index.php";
              </script>';
              exit();
    }
?>