<?php
session_start();
require 'koneksi/koneksi.php';
include 'header.php';
?>
<!doctype html>
<html lang="en">

<head>
    <title>Our Clients | ONE SOLUTION</title>
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
            background: url('assets/image/frame 2.jpg') no-repeat center center fixed;
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
            margin-bottom: 40px;
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
            background-color: #fff; /* Added background color */
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
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

        .card-body {
            text-align: center; /* Center-align the text */
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

    <div class="container mt-4">
        <h1 style="font-weight: bold; color: white;">OUR CLIENTS</h1>
        <br>
        <div class="row">
            <?php
            $clients = [
                ["path" => "assets/image/clients/1.jpeg", "name" => "Juragan Coffe & Eatry - Pekalongan"],
                ["path" => "assets/image/clients/2.jpeg", "name" => "Teman Cerita - Pekalongan"],
                ["path" => "assets/image/clients/3.jpeg", "name" => "New Mangrove Ocean - Batang"],
                ["path" => "assets/image/clients/4.jpeg", "name" => "Candu Coffe & Eatry - Pekalongan"],
                ["path" => "assets/image/clients/5.jpeg", "name" => "Reedbox - Batang"],
                ["path" => "assets/image/clients/6.jpeg", "name" => "Sekirane Coffe & Eatry - Pemalang"]
            ];

            foreach ($clients as $client) {
                ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= $client['path'] ?>" class="card-img-top" alt="Galeri Image">
                        <div class="card-body">
                            <p style="font-weight: bold;"><?= $client['name'] ?></p>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
        <div class="scroll-arrow">
        <i class="fa fa-arrow-up" id="scrollTop" onclick="scrollToTop()"></i>
        <i class="fa fa-arrow-down" id="scrollBottom" onclick="scrollToBottom()"></i>
         </div>
    </div>

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
