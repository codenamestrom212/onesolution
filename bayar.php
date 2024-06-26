<?php

    session_start();
    require 'koneksi/koneksi.php';
    include 'header.php';
    if(empty($_SESSION['USER']))
    {
        echo '<script>alert("Harap login !");window.location="index.php"</script>';
    }
    $kode_booking = $_GET['id'];
$hasil = $koneksi->query("SELECT * FROM booking WHERE kode_booking = '$kode_booking'")->fetch();

$id = $hasil['id_produk'];
$isi = $koneksi->query("SELECT * FROM produk WHERE id_produk = '$id'")->fetch();

$unik = random_int(100, 999);

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Update payment status in the database
    $koneksi->query("UPDATE booking SET konfirmasi_pembayaran = 'Sedang diproses' WHERE kode_booking = '$kode_booking'");
    echo '<script>alert("Pembayaran berhasil dikonfirmasi!"); window.location="bayar.php?id=' . $kode_booking . '";</script>';
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
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
            padding: 20px;
        }
        .card {
            background: rgba(255, 255, 255, 0.8); /* Slightly transparent background for readability */
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .card-body {
            padding: 30px; /* Increased padding for card body */
        }
        .img {
            border-radius: 50%;
        }
        h2 {
            font-weight: bold;
        }
        .btn-primary a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
<br>
<br>
<div class="container">
<div class="row">
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body text-center">
                <h5 style="font-weight: bold;">Pembayaran Dapat Melalui :</h5>
                <hr/>
                <p><?= $info_web->no_rek;?></p>
                <button class="btn btn-primary">
                    <a href="https://link.dana.id/minta/2u3nfv2qvv3">Atau Klik Disini</a>
                </button>
            </div>
        </div>
        <br/>
        <div class="card">
            <div class="card-body" style="background:#ddd">
                <h5 class="card-title" style="font-weight: bold;"><?php echo $isi['merk'];?></h5>
            </div>
            <ul class="list-group list-group-flush">
                <?php if($isi['status'] == 'Tersedia'){ ?>
                    <li class="list-group-item bg-primary text-white">
                        <i class="fa fa-check"></i> Available
                    </li>
                <?php } else { ?>
                    <li class="list-group-item bg-danger text-white">
                        <i class="fa fa-close"></i> Not Available
                    </li>
                <?php } ?>
                <li class="list-group-item bg-dark text-white">
                    <i class="fa fa-money"></i> Rp. <?php echo($isi['harga']);?>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <tr>
                        <td>Kode Transaksi</td>
                        <td>:</td>
                        <td><?php echo $hasil['kode_booking'];?></td>
                    </tr>
                    <tr>
                        <td>Nama Perusahaan / Instansi</td>
                        <td>:</td>
                        <td><?php echo $hasil['nama_perusahaan'];?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?php echo $hasil['nama'];?></td>
                    </tr>
                    <tr>
                        <td>Telepon</td>
                        <td>:</td>
                        <td><?php echo $hasil['no_tlp'];?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Input Transaksi</td>
                        <td>:</td>
                        <td><?php echo $hasil['tanggal'];?></td>
                    </tr>
                    <tr>
                        <td>Total Harga</td>
                        <td>:</td>
                        <td>Rp. <?php echo($isi['harga']);?></td>
                    </tr>
                    <tr>
                        <td>Status Pembayaran</td>
                        <td>:</td>
                        <td><?php echo $hasil['konfirmasi_pembayaran'];?></td>
                    </tr>
                </table>

                <?php if ($hasil['konfirmasi_pembayaran'] == 'Belum Bayar') { ?>
                    <a href="konfirmasi.php?id=<?= $kode_booking; ?>" class="btn btn-primary float-right">Konfirmasi Pembayaran</a>
                <?php } else { ?>
                    <a href="https://wa.me/085647773475" class="btn btn-secondary float-right">Hubungi Admin</a>
                <?php } ?>
            </div>
        </div> 
    </div>
</div>
</div>
<br>
<br>
<br>

<?php include 'footer.php';?>
</body>
</html>
