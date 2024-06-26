<?php
session_start();
require 'koneksi/koneksi.php';
include 'header.php';
?>
<!doctype html>
<html lang="en">

<head>
    <title>Galeri | ONE SOLUTION</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">

    <style>
        body {
            background: url('assets/image/frame 1.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
            color: #3a3b39;
            margin: 0;
            padding: 0;
            height: 150%;
        }
        h1 {
            text-align: center;
            position: relative;
            padding-top: 40px;
        }

        h1::before {
            content: "";
            position: absolute;
            top: 10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 5px;
            background-color: white;
            border-radius: 5px;
        }

        .card {
            margin-bottom: 20px;
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-img-top {
            width: 100%;
            height: 400px;
            object-fit: cover;
            transition: transform 0.3s ease-in-out;
        }

        .card:hover .card-img-top {
            transform: scale(1.1);
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
        h1{
            font-weight: bold;
            color: white;
        }
    </style>
</head>

<body>

    <div class="container mt-4">
        <center>
            <h1>Food Menu and Photography</h1>
        </center>
        <br>
        <div class="row">
            <?php
            $images = glob("assets/image/galeri/design/1.jpeg", GLOB_BRACE);
            foreach ($images as $image) {
            ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= $image ?>" class="card-img-top" alt="Galeri Image">
                    </div>
                </div>
            <?php
            }
            ?>
            <?php
            $images = glob("assets/image/galeri/design/2.jpeg", GLOB_BRACE);
            foreach ($images as $image) {
            ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= $image ?>" class="card-img-top" alt="Galeri Image">
                    </div>
                </div>
            <?php
            }
            ?>
            <?php
            $images = glob("assets/image/galeri/design/3.jpeg", GLOB_BRACE);
            foreach ($images as $image) {
            ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= $image ?>" class="card-img-top" alt="Galeri Image">
                    </div>
                </div>
            <?php
            }
            ?>
            <?php
            $images = glob("assets/image/galeri/design/4.jpeg", GLOB_BRACE);
            foreach ($images as $image) {
            ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= $image ?>" class="card-img-top" alt="Galeri Image">
                    </div>
                </div>
            <?php
            }
            ?>
            <?php
            $images = glob("assets/image/galeri/design/5.jpeg", GLOB_BRACE);
            foreach ($images as $image) {
            ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= $image ?>" class="card-img-top" alt="Galeri Image">
                    </div>
                </div>
            <?php
            }
            ?>
            <?php
            $images = glob("assets/image/galeri/design/6.jpeg", GLOB_BRACE);
            foreach ($images as $image) {
            ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= $image ?>" class="card-img-top" alt="Galeri Image">
                    </div>
                </div>
            <?php
            }
            ?>
            <?php
            $images = glob("assets/image/galeri/menu/1.jpeg", GLOB_BRACE);
            foreach ($images as $image) {
            ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= $image ?>" class="card-img-top" alt="Galeri Image" style="width: 100%;
            height: 300px;">
                    </div>
                </div>
            <?php
            }
            ?>
            <?php
            $images = glob("assets/image/galeri/menu/2.jpeg", GLOB_BRACE);
            foreach ($images as $image) {
            ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= $image ?>" class="card-img-top" alt="Galeri Image" style="width: 100%;
            height: 300px;">
                    </div>
                </div>
            <?php
            }
            ?>
            <?php
            $images = glob("assets/image/galeri/menu/3.jpeg", GLOB_BRACE);
            foreach ($images as $image) {
            ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= $image ?>" class="card-img-top" alt="Galeri Image" style="width: 100%;
            height: 300px;">
                    </div>
                </div>
            <?php
            }
            ?>
            <?php
            $images = glob("assets/image/galeri/menu/4.jpeg", GLOB_BRACE);
            foreach ($images as $image) {
            ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= $image ?>" class="card-img-top" alt="Galeri Image">
                    </div>
                </div>
            <?php
            }
            ?>
            <?php
            $images = glob("assets/image/galeri/menu/5.jpeg", GLOB_BRACE);
            foreach ($images as $image) {
            ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= $image ?>" class="card-img-top" alt="Galeri Image">
                    </div>
                </div>
            <?php
            }
            ?>
            <?php
            $images = glob("assets/image/galeri/menu/6.jpeg", GLOB_BRACE);
            foreach ($images as $image) {
            ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= $image ?>" class="card-img-top" alt="Galeri Image">
                    </div>
                </div>
            <?php
            }
            ?>
            <?php
            $images = glob("assets/image/galeri/menu/7.jpeg", GLOB_BRACE);
            foreach ($images as $image) {
            ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= $image ?>" class="card-img-top" alt="Galeri Image">
                    </div>
                </div>
            <?php
            }
            ?>
            <?php
            $images = glob("assets/image/galeri/menu/8.jpeg", GLOB_BRACE);
            foreach ($images as $image) {
            ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= $image ?>" class="card-img-top" alt="Galeri Image">
                    </div>
                </div>
            <?php
            }
            ?>
            <?php
            $images = glob("assets/image/galeri/menu/9.jpeg", GLOB_BRACE);
            foreach ($images as $image) {
            ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= $image ?>" class="card-img-top" alt="Galeri Image">
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

        <center>
            <h1>Design and Branding</h1>
        </center>
        <br>
        <div class="row">
            <?php
            $images = glob("assets/image/galeri/mockup/1.jpeg", GLOB_BRACE);
            foreach ($images as $image) {
            ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= $image ?>" class="card-img-top" alt="Galeri Image">
                    </div>
                </div>
            <?php
            }
            ?>
            <?php
            $images = glob("assets/image/galeri/mockup/6.jpeg", GLOB_BRACE);
            foreach ($images as $image) {
            ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= $image ?>" class="card-img-top" alt="Galeri Image">
                    </div>
                </div>
            <?php
            }
            ?>
            <?php
            $images = glob("assets/image/galeri/mockup/3.jpeg", GLOB_BRACE);
            foreach ($images as $image) {
            ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= $image ?>" class="card-img-top" alt="Galeri Image">
                    </div>
                </div>
            <?php
            }
            ?>
            <?php
            $images = glob("assets/image/galeri/mockup/2.jpeg", GLOB_BRACE);
            foreach ($images as $image) {
            ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= $image ?>" class="card-img-top" alt="Galeri Image">
                    </div>
                </div>
            <?php
            }
            ?>
            <?php
            $images = glob("assets/image/galeri/mockup/4.jpeg", GLOB_BRACE);
            foreach ($images as $image) {
            ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= $image ?>" class="card-img-top" alt="Galeri Image">
                    </div>
                </div>
            <?php
            }
            ?>
            <?php
            $images = glob("assets/image/galeri/mockup/5.jpeg", GLOB_BRACE);
            foreach ($images as $image) {
            ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= $image ?>" class="card-img-top" alt="Galeri Image">
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

        <center>
            <h1>Our Experience</h1>
        </center>
        <br>
        <div class="row">
            <?php
            $images = glob("assets/image/galeri/experience/1.jpeg", GLOB_BRACE);
            foreach ($images as $image) {
            ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= $image ?>" class="card-img-top" alt="Galeri Image">
                    </div>
                </div>
            <?php
            }
            ?>
            <?php
            $images = glob("assets/image/galeri/experience/2.jpeg", GLOB_BRACE);
            foreach ($images as $image) {
            ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= $image ?>" class="card-img-top" alt="Galeri Image">
                    </div>
                </div>
            <?php
            }
            ?>
            <?php
            $images = glob("assets/image/galeri/experience/3.jpeg", GLOB_BRACE);
            foreach ($images as $image) {
            ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= $image ?>" class="card-img-top" alt="Galeri Image">
                    </div>
                </div>
            <?php
            }
            ?>
            <?php
            $images = glob("assets/image/galeri/experience/4.jpeg", GLOB_BRACE);
            foreach ($images as $image) {
            ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= $image ?>" class="card-img-top" alt="Galeri Image">
                    </div>
                </div>
            <?php
            }
            ?>
            <?php
            $images = glob("assets/image/galeri/experience/5.jpeg", GLOB_BRACE);
            foreach ($images as $image) {
            ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= $image ?>" class="card-img-top" alt="Galeri Image">
                    </div>
                </div>
            <?php
            }
            ?>
            <?php
            $images = glob("assets/image/galeri/experience/6.jpeg", GLOB_BRACE);
            foreach ($images as $image) {
            ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= $image ?>" class="card-img-top" alt="Galeri Image">
                    </div>
                </div>
            <?php
            }
            ?>
            <?php
            $images = glob("assets/image/galeri/experience/7.jpeg", GLOB_BRACE);
            foreach ($images as $image) {
            ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= $image ?>" class="card-img-top" alt="Galeri Image" style="height:450px;">
                    </div>
                </div>
            <?php
            }
            ?>
            <?php
            $images = glob("assets/image/galeri/experience/8.jpeg", GLOB_BRACE);
            foreach ($images as $image) {
            ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= $image ?>" class="card-img-top" alt="Galeri Image" style="height:450px;">
                    </div>
                </div>
            <?php
            }
            ?>
            <?php
            $images = glob("assets/image/galeri/experience/9.jpeg", GLOB_BRACE);
            foreach ($images as $image) {
            ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= $image ?>" class="card-img-top" alt="Galeri Image" style="height:450px;">
                    </div>
                </div>
            <?php
            }
            ?>
            <?php
            $images = glob("assets/image/galeri/experience/10.jpeg", GLOB_BRACE);
            foreach ($images as $image) {
            ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= $image ?>" class="card-img-top" alt="Galeri Image">
                    </div>
                </div>
            <?php
            }
            ?>
            <?php
            $images = glob("assets/image/galeri/experience/11.jpeg", GLOB_BRACE);
            foreach ($images as $image) {
            ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= $image ?>" class="card-img-top" alt="Galeri Image">
                    </div>
                </div>
            <?php
            }
            ?>
            <?php
            $images = glob("assets/image/galeri/experience/12.jpeg", GLOB_BRACE);
            foreach ($images as $image) {
            ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= $image ?>" class="card-img-top" alt="Galeri Image">
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <!-- Scroll Arrows -->
    <div class="scroll-arrow">
        <i class="fa fa-arrow-up" id="scrollTop" onclick="scrollToTop()"></i>
        <i class="fa fa-arrow-down" id="scrollBottom" onclick="scrollToBottom()"></i>
    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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
