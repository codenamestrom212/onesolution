<?php
require 'koneksi/koneksi.php';
if (empty($_SESSION['USER'])) {
    session_start();
}
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <!-- Include Bootstrap CSS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background: url('assets/image/frame 1.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: arial;
            color: #3a3b39;
            margin: 0px;
            padding: 0px;
            height: 100%;
        }

        .container {
            padding: 20px;
        }

        .card {
            background: rgba(255, 255, 255, 0.8);
            /* Slightly transparent background for readability */
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 10px;
        }

        .img {
            border-radius: 50%;
        }

        h2 {
            font-weight: bold;
        }

        h5 {
            font-weight: bold;
        }

        .scroll-arrow {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }

        .scroll-arrow i {
            font-size: 24px;
            background-color: #000;
            color: #fff;
            padding: 10px;
            border-radius: 50%;
            margin: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .scroll-arrow i:hover {
            background-color: #555;
        }
    </style>
</head>

<body>
    <div id="carouselId" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
            <?php
            $queryproduk = $koneksi->query('SELECT * FROM produk ORDER BY id_produk DESC')->fetchAll();
            $no = 1;
            foreach ($queryproduk as $isi) {
                ?>
                <li data-target="#carouselId" data-slide-to="<?= $no; ?>"></li>
                <?php $no++;
            } ?>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="assets/image/frame 8.png" alt="First slide" class="img-fluid"
                    style="object-fit:cover;width:100%;height:700px;">
            </div>
            <?php
            $no = 1;
            foreach ($queryproduk as $isi) {
                ?>
                <div class="carousel-item">
                    <img src="assets/image/<?= $isi['gambar']; ?>" alt="Slide <?= $no; ?>" class="img-fluid"
                        style="object-fit:cover;width:100%;height:700px;">
                </div>
                <?php $no++;
            } ?>
        </div>
        <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-sm-3">
                <div class="card" style="background: #ddd">
                    <div class="card-body" id="login-section">
                        <?php if ($_SESSION['USER']) { ?>
                            Selamat Datang, <?php echo $_SESSION['USER']['nama_pengguna']; ?>
                            <br />
                            <br />
                            <center>
                                <?php if ($_SESSION['USER']['level'] == 'admin') { ?>
                                    <a href="admin/index.php" class="btn btn-primary mb-2 btn-block">Dashboard</a>
                                <?php } else { ?>
                                    <a href="blog.php" class="btn btn-primary mb-2 btn-block">Pesan Sekarang!</a>
                                <?php } ?>
                                <a href="admin/logout.php" class="btn btn-danger text-white btn-block">
                                    Logout
                                </a>
                            </center>
                        <?php } else { ?>
                            <form method="post" action="koneksi/proses.php?id=login">
                                <center>
                                    <h5 class="card-title">Login</h5>
                                </center>
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input type="text" name="user" id="" class="form-control" placeholder=""
                                        aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" name="pass" id="" class="form-control" placeholder=""
                                        aria-describedby="helpId">
                                </div>
                                <center><button class="btn btn-primary">Login</button>
                                    <a class="btn btn-danger text-white" data-toggle="modal" data-target="#modelId">
                                        Daftar
                                    </a>
                                </center>
                            </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="row">
                    <?php
                    $query = $koneksi->query('SELECT * FROM produk ORDER BY id_produk DESC')->fetchAll();
                    foreach ($query as $isi) {
                        ?>
                        <div class="col-sm-4">
                            <div class="card">
                                <img src="assets/image/<?php echo $isi['gambar']; ?>" class="card-img-top"
                                    style="height:200px;">
                                <div class="card-body" style="background:#ddd">
                                    <h5 class="card-title"><?php echo $isi['merk']; ?></h5>
                                </div>
                                <div class="card-body">
                                    <center>
                                        <a href="booking.php?id=<?php echo $isi['id_produk']; ?>"
                                            class="btn btn-success">Purchase now!</a>
                                        <a href="detail.php?id=<?php echo $isi['id_produk']; ?>"
                                            class="btn btn-info">Detail</a>
                                    </center>
                                </div>
                            </div>
                            <br>
                        </div>

                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Daftar Pengguna</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="koneksi/proses.php?id=daftar">
                        <div class="form-group">
                            <label for="">Nama Pengguna</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="user" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="pass" class="form-control" required>
                        </div>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-secondary text-white" data-dismiss="modal">Close</a>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <div class="scroll-arrow">
        <i class="fa fa-arrow-up" id="scrollTop" onclick="scrollToTop()"></i>
        <i class="fa fa-arrow-down" id="scrollBottom" onclick="scrollToBottom()"></i>
    </div>

    <?php
    include 'footer.php';
    ?>
    <!-- Include Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        function scrollToBottom() {
            window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' });
        }
    </script>
</body>

</html>