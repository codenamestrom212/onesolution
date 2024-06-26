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
    <title>Kontak Kami</title>
    <style>
        body {
            background: url('assets/image/frame 3.jpg') no-repeat center center fixed;
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
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .card-body {
            padding: 30px;
            width: 100%;
        }
        .card-header {
            font-weight: bold;
            text-align: center;
            padding: 10px;
        }
        .contact-row {
            margin-top: 10px;
            display: flex;
            align-items: center;
        }
        .contact-row img {
            margin-right: 10px;
        }
        .contact-link {
            color: #000;
            text-decoration: none;
        }
        .contact-link:hover {
            text-decoration: underline;
        }
        h2 {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 mx-auto">
                <div class="card">
                    <div class="card-header">
                        Kontak Kami
                    </div>
                    <div class="card-body">
                        <center>
                            <p>Ada pertanyaan atau butuh bantuan? Tim kami siap membantu Anda.<br>Hubungi kami dengan meng-klik kontak di bawah ini.</p>
                        </center>
                        <div class="row contact-row">
                            <div class="col-sm-3">
                                <img src="assets/image/kontak/gmaps.png" alt="Alamat" style="width: 25px; height: 25px;"> Alamat
                            </div>
                            <div class="col-sm-8">
                                <a href="https://maps.app.goo.gl/ibHdxNj9VzAunQvCA" class="contact-link">: Pekalongan, Tirto, Kec. Pekalongan Bar. Kota Pekalongan, Jawa Tengah 51151</a>
                            </div>
                        </div>
                        <div class="row contact-row">
                            <div class="col-sm-3">
                                <img src="assets/image/kontak/gmail.png" alt="Email" style="width: 30px; height: 25px;"> Email
                            </div>
                            <div class="col-sm-8">
                                <a href="mailto:onesolution309@gmail.com" class="contact-link">: onesolution309@gmail.com</a>
                            </div>
                        </div>
                        <div class="row contact-row">
                            <div class="col-sm-3">
                                <img src="assets/image/kontak/wa.png" alt="Telepon" style="width: 25px; height: 25px;"> Telepon
                            </div>
                            <div class="col-sm-8">
                                <a href="https://wa.me/085647773475" class="contact-link">: 085647773475</a>
                            </div>
                        </div>
                        <div class="row contact-row">
                            <div class="col-sm-3">
                                <img src="assets/image/kontak/ig.png" alt="Instagram" style="width: 25px; height: 25px;"> Instagram
                            </div>
                            <div class="col-sm-8">
                                <a href="https://www.instagram.com/onesolution.consultant/?authuser=0" class="contact-link">: @onesolution.consultant</a>
                            </div>
                        </div>
                        <div class="row contact-row">
                            <div class="col-sm-3">
                                <img src="assets/image/kontak/fb.png" alt="Facebook" style="width: 25px; height: 25px;"> Facebook
                            </div>
                            <div class="col-sm-8">
                                <a href="https://www.facebook.com/profile.php?id=61560497837507&authuser=0" class="contact-link">: One Solution</a>
                            </div>
                        </div>
                        <div class="row contact-row">
                            <div class="col-sm-3">
                                <img src="assets/image/kontak/dana.jpg" alt="No Rekening" style="width: 25px; height: 25px;"> No Rekening
                            </div>
                            <div class="col-sm-8">
                                <a href="https://link.dana.id/minta/2u3nfv2qvv3" class="contact-link">: <?= $info_web->no_rek; ?></a>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <?php include 'footer.php';?>
</body>
</html>
