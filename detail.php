<?php
    session_start();
    require 'koneksi/koneksi.php';
    include 'header.php';
    $id = strip_tags($_GET['id']);
    $hasil = $koneksi->query("SELECT * FROM produk WHERE id_produk = '$id'")->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <style>
        body {
            background: url('assets/image/p2.jpg') no-repeat center center fixed;
            background-size: cover;
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
            background: rgba(255, 255, 255, 0.8); /* Slightly transparent background for readability */
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .card-body {
            padding: 20px;
        }
        .img {
            border-radius: 50%;
        }
        h2{
            font-weight: bold;
        }
        h4{
            font-weight: bold;
        }
    </style>
</head>
<div class="container mt-5">
<div class="row">
    <div class="col-sm-6">
        <img class="card-img-top w-100" 
            style="object-fit:cover;" 
            src="assets/image/<?php echo $hasil['gambar'];?>" alt="">
            <li class="list-group-item bg-dark text-white">
                <i class="fa fa-money"></i> Rp. <?php echo($hasil['harga']);?>
            </li>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><?php echo $hasil['merk'];?></h4>
                <p class="card-text">
                    <?php echo $hasil['deskripsi'];?>
                </p>
                <hr/>
                <center>
                    <a href="booking.php?id=<?php echo $hasil['id_produk'];?>" class="btn btn-success">Purchase now!</a>
                    <a id="backButton" href="#" class="btn btn-info">Back</a>
                </center>
            </div>
         </div> 
    </div>
</div>
</div>
<script>
     document.getElementById('backButton').addEventListener('click', function() {
            window.history.back();
        });
</script>

<?php include 'footer.php';?>