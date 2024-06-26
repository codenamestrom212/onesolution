<?php
    session_start();
    require 'koneksi/koneksi.php';
    include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-10">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <title>Latar Belakang</title>
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
            height: 150%;
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
            padding: 20px; /* Increased padding for card body */
            width: 100%; /* Ensures card body takes full width of the container */
        }
        .card-header {
            font-weight: bold;
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
        h2{
            font-weight: bold;
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
        p{
            margin: 12px;
            font-size: 18px; /* Added this line to set font size to 12px */
        }
    </style>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-sm-12 mx-auto"> <!-- Changed col size to 8 for a wider card -->
            <h1 style="font-weight: bold; color: white;">Latar Belakang <br>One Solution</h1>
                <div class="card">
                    <div class="card-header"><br><p>Di tengah dinamika industri modern yang terus berkembang, kebutuhan akan bimbingan profesional dalam mengelola dan mengembangkan bisnis semakin tinggi. Onesolution hadir sebagai mitra terpercaya dalam mengelola dan mengembangkan bisnis Anda. Dengan pengalaman selama 4 tahun di industri makanan dan minuman (FnB), kami menawarkan layanan konsultasi yang terintegrasi dan berfokus pada solusi praktis untuk berbagai tantangan bisnis.</p>
                    </div>

                    </div>
                </div> 
            </div>
        </div>
    </div>
    <?php include 'footer.php';?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
