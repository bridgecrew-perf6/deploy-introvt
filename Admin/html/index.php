<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/spur.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="../js/chart-js-config.js"></script>
    <title>Dashboard Introvt Admin</title>
</head>

<body>
    <div class="dash">
        <div class="dash-nav dash-nav-red">
            <header>
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="index.html" class="spur-logo"><img src="../img/logo.png" width="120px"></a>
            </header>
            <nav class="dash-nav-list">
                <a href="index.php" class="dash-nav-item">
                    <i class="fas fa-home"></i> Dashboard </a>
                    <a href="user.php" class="dash-nav-item">
                        <i class="fas fa-user-friends"></i> User </a>
                    <a href="#" class="dash-nav-item">
                        <i class="far fa-edit"></i> Postingan </a>
                    <a href="#" class="dash-nav-item">
                        <i class="far fa-comment-dots"></i> Komentar </a>

            </nav>
        </div>

        <div class="dash-app">
            <header class="dash-toolbar">
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="#!" class="searchbox-toggle">
                    <i class="fas fa-search"></i>
                </a>
                <form class="searchbox" action="#!">
                    <a href="#!" class="searchbox-toggle"> <i class="fas fa-arrow-left"></i> </a>
                    <button type="submit" class="searchbox-submit"> <i class="fas fa-search"></i> </button>
                    <input type="text" class="searchbox-input" placeholder="type to search">
                </form>
                <div class="tools">
                    <a href="https://github.com/HackerThemes/spur-template" target="_blank" class="tools-item">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="#!" class="tools-item">
                        <i class="fas fa-bell"></i>
                        <i class="tools-item-count">4</i>
                    </a>
                    <div class="dropdown tools-item">
                        <a href="#" class="" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                            <a class="dropdown-item" href="#!">Profile</a>
                            <a class="dropdown-item" href="login.html">Logout</a>
                        </div>
                    </div>
                </div>
            </header>

            <main class="dash-content ">
                <div class="container-fluid ">
                    <div class="row dash-row">
                        
                        <div class="col-xl-3">
                            <div class="stats stats-primary">
                                <h3 class="stats-title"> Jumlah Pendaftar </h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div class="stats-data">
                                       
                                        <?php
include 'koneksi.php';
$result = mysqli_query($koneksi, "SELECT count(username) as total from tbl_user");
$data = mysqli_fetch_assoc($result);

?>

                                        <div class="stats-number"><?php echo $data['total'] ?></div>
                                        <div class="stats-change">
                                            <?php
include 'koneksi.php';
$result = mysqli_query($koneksi, " SELECT count(username)/30*100 as total from tbl_user ");

$data = mysqli_fetch_assoc($result);

?>
                                            <span class="stats-percentage"><?php echo $data['total'] ?>%</span>
                                            <span class="stats-timeframe">rata-rata</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="stats stats-success ">
                                <h3 class="stats-title"> Pendaftar Terakhir </h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div class="stats-data">
                                         <?php
include 'koneksi.php';
$result = mysqli_query($koneksi, "SELECT * FROM tbl_user order by user_id desc limit 1001");
$data = mysqli_fetch_assoc($result);
?>
                                        <div class="stats-number"><?php echo $data["username"];?></div>
                                        <div class="stats-change">
                                            <span class="stats-percentage">+17%</span>
                                            <span class="stats-timeframe">from last month</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="stats stats-danger">
                                <h3 class="stats-title"> Postingan </h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class="fas fa-file"></i>
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number">5</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="stats stats-warning">
                                <h3 class="stats-title"> Komentar </h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class="fas fa-file"></i>
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number">5</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
$query = mysqli_query($koneksi, "SELECT * FROM tbl_user LIMIT 0,3"); ?>
                        <div class="col-lg-12">
                            <div class="card spur-card">
                                <div class="card-header bg-dark">
                                    <div class="spur-card-icon">
                                        <i class="fas fa-table text-white"></i>
                                    </div>
                    <div class="spur-card-title text-white">Table Data User</div>
                                </div>
                                <div class="card-body ">
                                    <table class="table table-hover table-in-card">
                                        <thead>
                                            <tr>
                                                <th scope="col">Username</th>
                                                <th scope="col">Password</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Alamat</th>
                                            </tr>
                                            <?php if (mysqli_num_rows($query) > 0){ ?>
                                    <?php
                                        $no = 1;
                                        while ($data = mysqli_fetch_array($query))
                                        {
                                            ?>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            
                                                <td><?php echo $data["username"] ?></td>
                                                <td><?php echo $data["password"] ?></td>
                                                <td><?php echo $data["email"] ?></td>
                                                <td><?php echo $data["alamat"] ?></td>
                                                <td>
                                                    <a href="edit/edit.php?user_id=<?php echo $data['user_id']; ?>">Edit</a>
                                                    <a href="delete.php?user_id=<?php echo $data['user_id']; ?>">Delete</a></td>
                                            </tr>
                                            <?php $no++; } ?>
        <?php } ?>
                                        </tbody>
                                    </table>

                                </div>
                </div><a href="user.php"><p class="text-primary">Selengkapnya</p></a>

                <!--Tabel 2-->
                
                 </div><?php $query2 = mysqli_query($koneksi, "SELECT * FROM tbl_postingan"); ?>
                        <div class="col-lg-12">
                            <div class="card spur-card">
                                <div class="card-header bg-dark">
                                    <div class="spur-card-icon">
                                        <i class="fas fa-table text-white"></i>
                                    </div>
                    <div class="spur-card-title text-white">Table postingan</div>
                                </div>
                                <div class="card-body ">
                                    <table class="table table-hover table-in-card">
                                        <thead>
                                            <tr>
                                                <th scope="col">Judul</th>
                                                <th scope="col">Konten</th>
                                                <th scope="col">Username</th>
                                            </tr>
                                     <?php if (mysqli_num_rows($query) > 0){ ?>
                                    <?php
                                        $no = 1;
                                        while ($data = mysqli_fetch_array($query))
                                        {
                                            ?>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $data["judul"] ?></td>
                                                <td><?php echo $data["konten"] ?></td>
                                                <td><?php echo $data["username"] ?></td>
                                                <td>
                                                    <a href="edit.php?postingan_id=<?php echo $data['postingan_id']; ?>">Edit</a>
                                                    <a href="delete.php?postingan_id=<?php echo $data['postingan_id']; ?>">Delete</a></td>
                                            </tr>
                                                                                                    <?php $no++; } ?>
        <?php } ?>
                                        </tbody>
                                    </table>

                                </div>
                </div><a href="user"><p class="text-primary">Selengkapnya</p></a>


                 </div><?php $query2 = mysqli_query($koneksi, "SELECT * FROM tbl_komen"); ?>
                        <div class="col-lg-12">
                            <div class="card spur-card">
                                <div class="card-header bg-dark">
                                    <div class="spur-card-icon">
                                        <i class="fas fa-table text-white"></i>
                                    </div>
                    <div class="spur-card-title text-white">Table komentar</div>
                                </div>
                                <div class="card-body ">
                                    <table class="table table-hover table-in-card">
                                        <thead>
                                            <tr>
                                                <th scope="col">Judul</th>
                                                <th scope="col">Komen</th>
                                                <th scope="col">Username</th>
                                            </tr>
                                            <?php if (mysqli_num_rows($query) > 0){ ?>
                                    <?php
                                        $no = 1;
                                        while ($data = mysqli_fetch_array($query))
                                        {
                                            ?>
                                        </thead>
                                        <tbody>
                                                                                        <tr>
                                                <td><?php echo $data["judul"] ?></td>
                                                <td><?php echo $data["komen"] ?></td>
                                                <td><?php echo $data["username"] ?></td>
                                                <td>
                                                    <a href="edit/edit.php?postingan_id=<?php echo $data['postingan_id']; ?>">Edit</a>
                                                    <a href="delete.php?postingan_id=<?php echo $data['postingan_id']; ?>">Delete</a></td>
                                            </tr>
                                                                                                    <?php $no++; } ?>
        <?php } ?>
                                        </tbody>
                                    </table>

                                </div>
                </div><a href="user"><p class="text-primary">Selengkapnya</p></a>
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="../js/spur.js"></script>
</body>

</html>