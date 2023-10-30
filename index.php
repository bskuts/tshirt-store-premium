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
                <a class="nav-link" href="index.php?page=home"><b>Home</b></a>
            </li>
            <li class="nav-item <?php echo $pilihan == 'products' ? 'active' : ''; ?>">
                <a class="nav-link" id="act-btn" href="index.php?page=products">Products</a>
            </li>
            <li class="nav-item <?php echo $pilihan == 'about' ? 'active' : ''; ?>">
                <a class="nav-link" href="index.php?page=about">About</a>
            </li>
            <li class="nav-item" id="log-btn" <?php echo $pilihan == 'login' ? 'active' : ''; ?>">
                <a class="nav-link" id="log-bt" href="https://myaccount.google.com/"><b>Login</b></a>
            </li>
        </ul>
    </div>
</nav>

<div class="kontain1">
    <div class="text1">
        <h1><b>Super Deals</b></h1>
        <h1><b>On All Product</b></h1>
    </div>
    <img src="png1.png" alt="Gambar Baju">
</div>

<div class="text2"><b>T-Shirt Collection</b></div>

<div class="container mt-2">
    <div class="row">
        <?php
        $produk = array(
            array("Baju Lengan Panjang", 80000, "Baju lengan panjang adalah pakaian dengan lengan yang menutupi area tangan hingga pergelangan tangan, 
            ideal untuk menjaga kenyamanan dan gaya Anda dalam berbagai situasi. Tersedia dalam beragam gaya, bahan, dan warna untuk berbagai cuaca dan aktivitas. 
            Dari gaya kasual hingga formal, baju lengan panjang adalah elemen dasar dalam lemari pakaian Anda yang selalu bergaya dan nyaman.", "baju/baju_1.png", "gambar baju lengan panjang"),
            
            array("Baju Lengan Pendek", 40000, "Baju lengan pendek adalah pakaian yang memiliki lengan yang berakhir di sekitar area bahu atau siku. 
            Produk ini adalah pilihan yang nyaman dan cocok untuk cuaca hangat atau untuk tampilan santai. Baju lengan pendek tersedia dalam berbagai gaya, 
            bahan, dan warna, sehingga Anda dapat menyesuaikannya dengan kebutuhan Anda. Pakaian ini adalah pilihan yang serbaguna untuk sehari-hari atau aktivitas santai, 
            memberikan kesejukan dan gaya yang tak pernah ketinggalan zaman dalam lemari pakaian Anda.", "baju/baju_2.png", "gambar baju lengan pendek"),
            
            array("Baju Polo", 80000, "Baju polo adalah pakaian dengan kerah V dan kancing di leher, cocok untuk tampilan santai maupun semi-formal. 
            Nyaman dan tersedia dalam berbagai warna dan desain.", "baju/baju_3.png", "gambar baju polo"),
        );

        foreach ($produk as $item) {
            echo '<div class="col-md-4" id="data1">
                    <div class="card">
                    <img src="'.$item[3].'" class="card-img-top" alt="'.$item[4].'">
                        <div class="card-body">
                            <h5 class="card-title">' . $item[0] . '</h5>
                            <p class="card-text">' . $item[2] . '</p>
                            <h6><b>Harga: Rp '. number_format($item[1], 0, ',', '.').'</b></h6>
                            <a href="#" class="btn btn-primary">Beli</a>
                        </div>
                    </div>
                </div>';
        }
        ?>
    </div>
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
