<!DOCTYPE html>
<html>
<head>
    <title>Penjualan Baju Premium</title>
    <!-- Tambahkan link ke Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
// Mendapatkan nilai pilihan
$pilihan = isset($_GET['pilihan']) ? $_GET['pilihan'] : 'home';

switch ($pilihan){
    case 'home':
        include('index.php');
        break;
    case 'products':
        include('index_products.php');
        break;
    case 'about':
        include('index_about.php');
        break;
    default:
        include('404.php');
        break;
}
?>

<nav class="navbar navbar-expand-lg custom-navbar">
    <a class="navbar-brand" href="#"><b>E-Commerce</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item <?php echo $pilihan == 'home' ? 'active' : ''; ?>">
                <a class="nav-link" href="index.php?page=home">Home</a>
            </li>
            <li class="nav-item <?php echo $pilihan == 'products' ? 'active' : ''; ?>">
                <a class="nav-link" id="act-btn" href="index.php?page=products">Products</a>
            </li>
            <li class="nav-item <?php echo $pilihan == 'about' ? 'active' : ''; ?>">
                <a class="nav-link" href="index.php?page=about"><b>About</b></a>
            </li>
            <li class="nav-item" id="log-btn" <?php echo $pilihan == 'login' ? 'active' : ''; ?>">
                <a class="nav-link" id="log-bt" href="https://myaccount.google.com/"><b>Login</b></a>
            </li>
        </ul>
    </div>
</nav>

<div class="about">
    <h1><b>About</b></h1>
</div>

<div class="about1">
    <p>Kami adalah bisnis penjualan baju segala jenis yang berkomitmen untuk menyediakan koleksi terbaik dan beragam untuk Anda. Kami menawarkan berbagai macam pakaian, mulai dari pakaian kasual hingga pakaian formal, serta aksesoris fashion yang sesuai dengan gaya Anda.</p>
    <p>Kami bangga memberikan layanan pelanggan yang luar biasa dan produk berkualitas tinggi. Kami selalu berusaha untuk memenuhi kebutuhan fashion Anda dengan beragam pilihan baju yang up-to-date dan trendi.</p>
    <p>Kami menghargai setiap pelanggan kami dan selalu berusaha memberikan pengalaman belanja yang memuaskan. Terima kasih telah memilih kami sebagai destinasi fashion Anda. Kami berharap dapat terus melayani Anda dengan koleksi terbaik kami.</p>
</div>

<footer>
    <div class="ft">
        <div class="row" id="ft1">
            <div class="col-md-6" id="ft2">
                <h3>Tentang Kami</h3>
                <p>Deskripsi singkat tentang perusahaan atau situs web Anda.</p>
            </div>
            <div class="col-md-6" id="ft2">
                <h3>Hubungi Kami</h3>
                <address>
                    <p>Alamat Perusahaan</p>
                    <p>Email: <a href="mailto:info@example.com">info@example.com</a></p>
                    <p>Telepon: +1234567890</p>
                </address>
            </div>
        </div>
    </div>
    <div class="cp">
        &copy; 2023 Nama Perusahaan. Hak Cipta Dilindungi.
    </div>
</footer>

<!-- Tambahkan link ke Bootstrap JavaScript dan jQuery -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
