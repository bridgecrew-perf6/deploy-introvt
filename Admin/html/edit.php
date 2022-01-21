<!DOCTYPE html>
<html>
<head>
 <title>Edit Data Surat Masuk</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900"> 
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style2.css">
</head>
<body>

<?php 
  include "koneksi.php";
  $user_id = $_GET['user_id'];
  $query_mysql = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE user_id='$user_id'")or die(mysqli_error());
  $nomor = 1;
  while($data = mysqli_fetch_array($query_mysql)){
  ?>

  <div class="site-section">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-md-5 mb-5">
            <a href="http://localhost/dashboard/introvt/admin/html/index.php">Kembali</a><br>
            <h3 class="mb-5">Edit Data Pengunjung</h3>
            <form action="update.php" method="post" class="bg-white">
              <div class="">
                  <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_fname" class="text-black"><span class="text-danger"></span></label>
                    <input type="hidden" class="form-control" id="c_fname" name="user_id" value="<?php echo $data['user_id'] ?>">
                  </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_fname" class="text-black">Username <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="username" value="<?php echo $data['username'] ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_ema" class="text-black">Alamat <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data['alamat'] ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_fname" class="text-black">Email<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="email" value="<?php echo $data['email'] ?>">
                  </div>
                </div>  
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_pass" class="text-black">Password <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_pass" name="password" value="<?php echo $data['password'] ?>">
                  </div>
                </div>  
                
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg" value="Submit">

                  </div>
                </div>
              </div>
              <?php } ?>
            </form>
          </div>
</body>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/mediaelement-and-player.min.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

      for (var i = 0; i < total; i++) {
        new MediaElementPlayer(mediaElements[i], {
          pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
          shimScriptAccess: 'always',
          success: function () {
            var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
            for (var j = 0; j < targetTotal; j++) {
              target[j].style.visibility = 'visible';
            }
          }
        });
      }
    });
  </script>
  <script src="js/main.js"></script>
</html>