<?php
    session_start();
    require 'koneksi/koneksi.php';
    include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi Misi</title>
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <style>
        body {
            background: url('assets/image/p2.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
            color: #3a3b39;
            margin: 0;
            padding: 0;
            height: 100%;
        }
        .container {
            padding: 80px;
        }
        .card {
            background: rgba(255, 255, 255, 0.8); /* Slightly transparent background for readability */
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .card-body {
            padding: 30px; /* Increased padding for card body */
            width: 100%; /* Ensures card body takes full width of the container */
        }
        .card-header {
            font-weight: bold;
            text-align: center;
            padding: 10px; /* Additional padding for header */
        }
        .contact-row {
            margin-top: 10px;
        }
        .contact-row img {
            margin-right: 20px;
            vertical-align: middle;
        }
        .contact-link {
            color: #000;
            text-decoration: none;
        }
        .contact-link:hover {
            text-decoration: underline;
        }
        h1 {
            text-align: center;
            position: relative;
            padding-top: 40px;
            margin-bottom: 40px;
            color: white;
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
        .list-group-item {
            background: none;
            border: none; /* Remove border to match Bootstrap's .bg-light */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 mx-auto"> <!-- Changed col size to 8 for a wider card -->
                <h1><strong>Visi dan Misi</strong></h1>
                <div class="card">
                    <div class="card-header">
                        <br>
                        <p><strong>One Solution F&B Consultant menjadi konsultan kuliner professional dan terpercaya yang bisa mencakup semua kalangan.</strong></p>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fa fa-check"></i> <strong>Membangun sumber daya manusia yang lebih profesional dan capable dibidangnya.</strong></li>
                            <li class="list-group-item"><i class="fa fa-check"></i> <strong>Menciptakan system kerja yang lebih efektif dan efisien dalam pengelolaan Restoran dan Café.</strong></li>
                            <li class="list-group-item"><i class="fa fa-check"></i> <strong>Mengembangkan bisnis Restoran yang mampu bersaing dengan Restoran dan Café yang lain secara sehat.</strong></li>
                            <li class="list-group-item"><i class="fa fa-check"></i> <strong>Tercapainya target dan tujuan yang diinginkan dari Klien.</strong></li>
                            <li class="list-group-item"><i class="fa fa-check"></i> <strong>Kunci keberhasilan kami pada saat klien kami bisa mengimplementasikan apa yang sudah kami berikan.</strong></li>
                            <li class="list-group-item"><i class="fa fa-check"></i> <strong>Membangun TRUST kepada klien.</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
