<?php
session_start();
require 'koneksi/koneksi.php';
include 'header.php';
if ($_GET['cari']) {
    $cari = strip_tags($_GET['cari']);
    $query = $koneksi->query('SELECT * FROM produk WHERE merk LIKE "%' . $cari . '%" ORDER BY id_produk DESC')->fetchAll();
} else {
    $query = $koneksi->query('SELECT * FROM produk ORDER BY id_produk DESC')->fetchAll();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Paket | ONE SOLUTION</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <title>Produk</title>
    <style>
        body {
            background: url('assets/image/frame 3.jpg') no-repeat center center fixed;
            background-size: cover;
            background-attachment: fixed;
            font-family: arial;
            color: #3a3b39;
            margin: 0;
            padding: 0;
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
            margin-bottom: 20px;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 18px;
            font-weight: bold;
        }

        .list-group-item {
            font-size: 14px;
        }

        .btn {
            margin: 5px;
        }

        h2 {
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
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php
                if (isset($_GET['cari'])) {
                    echo '<h4 style="color: white; text-align: center;">Keyword Pencarian : <strong>' . $_GET['cari'] . '</strong></h4>';
                } else {
                    echo '<h4 style="color: white; text-align: center;"><strong>All Available Plans</strong></h4>';
                }
                ?>

                <div class="row mt-3">
                    <?php
                    $no = 1;
                    foreach ($query as $isi) {
                        ?>
                        <div class="col-sm-4">
                            <div class="card">
                                <img src="assets/image/<?php echo $isi['gambar']; ?>" class="card-img-top"
                                    style="height:200px;object-fit:cover;">
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
                        </div>
                        <?php $no++;
                    } ?>
                </div>
            </div>
        </div>
        <div class="scroll-arrow">
            <i class="fa fa-arrow-up" id="scrollTop" onclick="scrollToTop()"></i>
            <i class="fa fa-arrow-down" id="scrollBottom" onclick="scrollToBottom()"></i>
        </div>
    </div>
    <br>
    <br>
    <br>

    <?php include 'footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
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