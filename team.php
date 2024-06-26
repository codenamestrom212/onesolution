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
    <title>Team</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <!-- Custom Styles -->
    <style>
        body {
            background: url('assets/image/frame 1.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
            padding: 0;
            height: 150%;
        }
        .team-section {
            padding: 80px 0;
        }
        .team-member {
            text-align: center;
            margin-bottom: 30px;
        }
        .team-member img {
            width: 300px; /* Ubah ukuran sesuai kebutuhan */
            height: 300px; /* Ubah ukuran sesuai kebutuhan */
            object-fit: cover;
            border-radius: 50%;
        }
        .team-member h3 {
            margin-top: 20px;
            font-weight: bold;
            color: white;
        }
        p {
            color: white;
            font-size: 20px;
        }
        h1 {
            text-align: center;
            position: relative;
            padding-top: 40px;
            margin-bottom: 40px;
            color: white;
            font-weight: bold;
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
        /* CSS untuk kontrol carousel yang lebih besar */
        .carousel-control-prev,
        .carousel-control-next {
            width: 6%;
        }
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            width: 30px;
            height: 30px;
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
        .img {
            border-radius: 50%;
            width: 100%; /* Ensure image width is 100% of parent */
            max-width: 300px; /* Limit image max width */
            height: auto; /* Maintain aspect ratio */
            display: block; /* Prevents bottom margin gap */
            margin: 0 auto 15px; /* Center image and add bottom margin */
        }
        h2 {
            font-weight: bold;
            margin-bottom: 20px; /* Add bottom margin */
        }
        h3, h4 {
            margin: 10px 0;
        }
        ul {
            padding-left: 20px; /* Indent list for better readability */
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

    <?php include 'navbar.php'; ?>

    <div class="container team-section">
    <div class="row">
        <div class="col-lg-12 mx-auto text-center mb-5">
            <h1 class="section-heading" style="margin-bottom: 90px;">Meet Our Team</h1>
                <div class="card">
                <div class="card-body">
    <p style="color: black; font-weight: light;">
        <strong>Di Onesolution, kami percaya bahwa kesuksesan klien kami adalah hasil dari kerja keras dan dedikasi tim profesional yang berpengalaman. Tim kami terdiri dari para ahli yang memiliki keahlian dan pengalaman luas di berbagai bidang, khususnya dalam industri makanan dan minuman (FnB) serta konsultasi bisnis.</strong>
    </p>
</div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mx-auto">
                <div id="team-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#team-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#team-carousel" data-slide-to="1"></li>
                        <!-- Add more indicators if needed -->
                    </ol>
                    <div class="carousel-inner">
                        <!-- Carousel Item 1 -->
                        <div class="carousel-item active">
                            <div class="row">
                                <!-- Team Member 1 -->
                                <div class="col-md-4">
                                    <div class="team-member">
                                        <img src="assets/image/team/aryo.jpg" class="img-fluid" alt="Team Member 1">
                                        <h3>Rifqih Ario Prasetyo</h3>
                                        <p><strong>CEO & Founder</strong></p>
                                    </div>
                                </div>
                                <!-- Team Member 2 -->
                                <div class="col-md-4">
                                    <div class="team-member">
                                        <img src="assets/image/team/yayak.jpg" class="img-fluid" alt="Team Member 2">
                                        <h3>Mutiara Akhsani</h3>
                                        <p><strong>Operations Manager</strong></p>
                                    </div>
                                </div>
                                <!-- Team Member 3 -->
                                <div class="col-md-4">
                                    <div class="team-member">
                                        <img src="assets/image/team/diba.jpg" class="img-fluid" alt="Team Member 4">
                                        <h3>Adiba Shofwatun Naja</h3>
                                        <p><strong>Human Resources & Administrations</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Carousel Item 2 -->
                        <div class="carousel-item">
                            <div class="row">
                                <!-- Team Member 4 -->
                                <div class="col-md-6">
                                    <div class="team-member">
                                        <img src="assets/image/team/zidan.jpg" class="img-fluid" alt="Team Member 5">
                                        <h3>Muhammad Zidan Amin</h3>
                                        <p><strong>Human Capital</strong></p>
                                    </div>
                                </div>
                                <!-- Team Member 5 -->
                                <div class="col-md-6">
                                    <div class="team-member">
                                        <img src="assets/image/team/yunus.jpg" class="img-fluid" alt="Team Member 3">
                                        <h3>Muhammad Yunus</h3>
                                        <p><strong>FnB Creative</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add more carousel items as needed -->
                    </div>
                    <a class="carousel-control-prev" href="#team-carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#team-carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <center>
                    <h2 style="color: black; font-weight: bold;">OUR CONSULTANT LEADER</h2>
                </center>
                <img class="img" src="assets/image/img.jpeg" alt="">
                <center>
                    <h3 style="font-weight:bold; color: black;">Rifqih Ario Prasetyo</h3>
                    <h4 style="color: black;">Professional Chef | F&B Consultant</h4>
                    </center>
<p style="color: black; font-size: 18px;">Dengan pengalaman selama 5 tahun sebagai Chef, Rifqih Ario Prasetyo memahami seluk beluk dunia FnB dari level Cafe & Resto, termasuk dalam produksi, pelayanan, dan manajemen. Pengalamannya di hotel dan restoran sebelumnya telah membentuk keahlian yang ia tuangkan dalam One Solution Consultant Food & Beverage, membantu pelaku bisnis kuliner untuk menjalankan bisnis secara optimal.</p>
<ul style="color: black; font-size: 18px;">
    <li>Cook 2 di Hotel Shantika Tegal & Pekalongan</li>
    <li>Head kitchen di Juragan Coffee & Eatry Pekalongan</li>
    <li>Head kitchen di Candu Coffee & Eatry Pekalongan</li>
    <li>Chef De Partie di New Mangrove Oceans Batang</li>
</ul>

            </div>
        </div>
    </div>
</div>

    </div>

    <?php include 'footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
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
