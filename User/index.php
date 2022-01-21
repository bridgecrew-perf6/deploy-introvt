<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to Introvt !</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/3.2.89/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <nav class="navbar forum" role="navigation" aria-label="main navigation">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="">
                    <img src="assets/img/logo.png" width="100px">
                </a>
                <a role="button" class="navbar-burger burger " aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>
            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-start">
                    <a href="#" class="navbar-item">
                      Publik
                    </a>
                    <a href="#login_form" class="navbar-item " id="login_pop">
                      Buat Postingan
                    </a>
                </div>
                <!-- panel with buttons -->
    
        <!-- popup form #1 -->
        <a href="#x" class="overlay" id="login_form"></a>
        <div class="popup">
            <img src="assets/img/logo.png" width="90px">
            <p>Tambah Postingan</p>
            <div>
                <form action="postingan.php" method="POST">
                <label for="login" ></label>
                <input type="text" id="judul" placeholder="Judul" name="judul" />

                <div class="form-group">
                <label for="exampleFormControlTextarea1"></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Deskripsi" name="konten"></textarea></div>
            </div>
            <input type="submit" class="btn btn-danger btn-block" value="Posting" />
            <a class="close" href="#close"></a>
        </div>
        </form>
                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            
                            <div>
                                <form method="POST" action="logout.php">
                                <input type="submit" name="logout" value="Keluar" class="button is-danger">
                          
                        </div></form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!--PopUp Postingan-->
    <section class="hero is-danger">
        <div class="hero-body">
            <div class="container hero-forum has-text-centered">
                <img src="assets/img/logo1.png" width="200px">
                <h2 class="subtitle">
                  Cari sesuatu yang kamu tanyakan :)
                </h2>
                <div class="field is-grouped">
                    <p class="control is-expanded">
                        <input class="input is-medium" type="text" placeholder="Ketik sesuatu...">
                    </p>
                    <p class="control">
                        <a class="button is-medium is-light">
                      Cari
                    </a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <br/>
    <div class="container">
        <div class="columns">
            <div class="column is-three-quarters">
                <div class="tabs forum">
                    <ul>
                        <li class="is-active"><a>All</a></li>
                    </ul>
                </div>
                <div class="box forum">
                    <article class="media">
                        <div class="media-left">
                            <figure class="image avatar is-64x64">
                                <img src="assets/img/1.png" alt="Image" class="is-rounded">
                            </figure>
                        </div>
                         <?php
include 'koneksi.php';
$result = mysqli_query($koneksi, "SELECT * FROM tbl_postingan limit 0,3");
$data = mysqli_fetch_assoc($result);
?>

                        <div class="media-content">
                            <div class="content list-forum">
                                <div class="is-pulled-right has-text-centered ">
                                    <a href="#" class="love">
                                        <span>
                                    <i class="mdi mdi-heart-outline"></i>   
                                  </span>
                                    </a>
                                    <span>15</span>
                                </div>
                                <p class="text-content">
    
                                    <p><a href="#"><?php echo $data["judul"];?></a><br><p style="font-size: 14px"><?php echo $data["konten"];?></p>

                                <span class="solved" title="Solved">
                                  <i class="mdi mdi-checkbox-marked-circle"></i>
                                </span>
                              </a>
                                </p>

                                <p class="info-content">
                                    <a>
                                        <i class="mdi mdi-eye-outline"></i>
                                        <small>100k</small>
                                    </a>
                                    <a>
                                        <i class="mdi mdi-comment-text-multiple-outline"></i>
                                        <small>70</small>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </article>
</table>
                <div class="box">
                    <nav class="pagination is-rounded" role="navigation" aria-label="pagination">
                        <a class="pagination-previous">Previous</a>
                        <a class="pagination-next">Next page</a>
                        <ul class="pagination-list">
                            <li><a class="pagination-link" aria-label="Goto page 1">1</a></li>
                            <li><span class="pagination-ellipsis">&hellip;</span></li>
                            <li><a class="pagination-link" aria-label="Goto page 45">45</a></li>
                            <li><a class="pagination-link is-current" aria-label="Page 46" aria-current="page">46</a></li>
                            <li><a class="pagination-link" aria-label="Goto page 47">47</a></li>
                            <li><span class="pagination-ellipsis">&hellip;</span></li>
                            <li><a class="pagination-link" aria-label="Goto page 86">86</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

        </div>
        <footer class="footer">
            <div class="content has-text-centered">

            </div>
        </footer>
    </div>
    <script src="js/script.js"></script>
</body>
</html>
