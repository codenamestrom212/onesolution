<!doctype html>
<html lang="en">

<head>
    <title>ONE SOLUTION | F&B CONSULTANTS</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">

    <style>
        .navbar-nav .nav-link {
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
        }

        .nav-item.active .nav-link {
            background-color: #d3d3d3; /* Warna abu-abu */
            border-radius: 5px; /* Opsional: untuk membuat sudut sedikit melengkung */
        }
        .nav-link {
            color: #000;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="jumbotron pt-4 pb-4">
        <div class="row">
            <div class="col-sm-8">
                <h2><img src="assets/image/logo-black.png" alt="" style="height: 50px; width: 90px">
                <b style="text-transform:uppercase;"><?= $info_web->nama_jasa; ?> </b></h2>
            </div>
            <div class="col-sm-4">
                <form class="form-inline" method="get" action="blog.php">
                    <input class="form-control mr-sm-2" type="search" name="cari" placeholder="Cari Nama Paket"
                        aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
    <div style="margin-top:-2pc"></div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#"></a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <?php
                $current_page = basename($_SERVER['PHP_SELF']);
                ?>
                <li class="nav-item <?= ($current_page == 'index.php') ? 'active' : ''; ?>">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?= ($current_page == 'latar.php') ? 'active' : ''; ?>">
                    <a class="nav-link" href="latar.php">Latar Belakang</a>
                </li>
                <li class="nav-item <?= ($current_page == 'visimisi.php') ? 'active' : ''; ?>">
                    <a class="nav-link" href="visimisi.php">Visi & Misi</a>
                </li>
                <li class="nav-item <?= ($current_page == 'team.php') ? 'active' : ''; ?>">
                    <a class="nav-link" href="team.php">Our Team</a>
                </li>
                <li class="nav-item <?= ($current_page == 'galeri.php') ? 'active' : ''; ?>">
                    <a class="nav-link" href="galeri.php">Galeri</a>
                </li>
                <li class="nav-item <?= ($current_page == 'client.php') ? 'active' : ''; ?>">
                    <a class="nav-link" href="client.php">Our Clients</a>
                </li>
                <li class="nav-item <?= ($current_page == 'blog.php') ? 'active' : ''; ?>">
                    <a class="nav-link" href="blog.php">Price List</a>
                </li>
                <li class="nav-item <?= ($current_page == 'kontak.php') ? 'active' : ''; ?>">
                    <a class="nav-link" href="kontak.php">Contact</a>
                </li>
            </ul>
            <?php if (!empty($_SESSION['USER'])) { ?>
                <ul class="navbar-nav my-2 my-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa fa-user"> </i> Hallo, <?php echo $_SESSION['USER']['nama_pengguna']; ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="return confirm('Apakah anda ingin logout ?');"
                            href="<?php echo $url; ?>admin/logout.php">Logout</a>
                    </li>
                </ul>
            <?php } else { ?>
                <ul class="navbar-nav my-2 my-lg-0">
                <li class="nav-item">
                <!-- Jika pengguna belum login -->
                <a class="nav-link" href="#login-section">
                    Login
                </a>
                </li>
            </ul>
            <?php } ?>
        </div>
    </nav>
</body>
</html>