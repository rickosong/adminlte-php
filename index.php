<?php
include "koneksi.php"; 
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="theme.css" type="text/css" rel="stylesheet">
</head>

<body>
<section id="header">
    <div class="menu-atas"> </div>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <strong style="font-size: 25px; font-weight: bold; color: #000" >Ric<span style="color: #DC143C">komputer</span></strong>
                </div>
                <div class="col-8">
                    <a href="?" class="menu-style">Beranda</a>
                    <a href="?page=kategori_produk&idkategoriproduk=" class="menu-style">Kategori Produk</a>
                    <a href="?page=keranjang_belanja" class="menu-style">Keranjang Belanja</a>
                    <a href="?page=checkout" class="menu-style">Checkout</a>
                    <a href="?page=cara_berbelanja" class="menu-style">Cara Berbelanja</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    $page=@$_GET['page'];
    if($page=="home"){
        include "page/home.php";

    }elseif($page=="detail_produk"){
        include "page/detail_produk.php";

    }elseif($page=="kategori_produk"){
        include "page/kategori_produk.php";

    }elseif($page=="daftar_pembelian"){
        include "page/daftar_pembelian.php";

    }elseif($page=="checkout"){
        include "page/checkout.php";

    }elseif($page=="proses_order"){
        include "page/proses_order.php";

    }elseif($page=="keranjang_belanja"){
        include "page/keranjang_belanja.php";

    }elseif($page=="cara_berbelanja"){
        include "page/cara_berbelanja.php";

    }elseif($page=="order_finish"){
        include "page/order_finish.php";
    
    }else{
        include "page/home.php";
    }
?>
<section id="footer">
    <div class="footer1">
        <div class="container">
            <div class="row">
                <div class="col-4 kolom-footer">
                <strong>Jalan:</strong> Jl. Tiada ujung 
                </div>
                <div class="col-4 kolom-footer">
                    <h2>Kontak Dukungan Pelanggan</h2>
                    <p>Jika Anda memiliki pertanyaan atau masalah selama berbelanja, jangan ragu untuk menghubungi kami melalui email atau telepon.</p>
                </div>
                <div class="col-4 kolom-footer">
                    <p><strong>Email:</strong> support@rickomputer.com</p>
                    <p><strong>Telepon:</strong> 123-456-7890</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer2">Create by Mohammad Ricko Aprilianto &copy; <?= date("Y") ?>. All Right Reserved</div>
</section>
</body>
</html>
