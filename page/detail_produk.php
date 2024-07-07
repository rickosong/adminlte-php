<?php
    include "./koneksi.php";
    $idproduk=$_GET['idproduk'];
    $ambildata=mysqli_query($koneksi,"SELECT * FROM product WHERE id='$idproduk'");

    $tampildata=mysqli_fetch_array($ambildata);

    $kategori=mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM category WHERE id='$tampildata[id_category]'"));
?>
<div class="container">
    <h3>DETAIL PRODUK</h3>
   
   
   <div class="row">
       <div class="col-9">
        <h1><?php echo $tampildata['product_name']; ?>
         <a href="?page=proses_order&&idproduk=<?php echo $tampildata['id']; ?>">Add To Cart</a>
        </h1>
        Stok <b><?php echo $tampildata['stok']; ?></b> Kategori <b><?php echo $kategori['category'] ?></b> Harga Rp. <b><?php echo number_format($tampildata['price'],2); ?></b><br>
        <center><img src="./Admin/pages/product/gambar/<?php echo $tampildata['image']; ?>" width="100%"></center>
        <?php echo $tampildata['deskripsi']; ?>
    </div
    >
    <div class="col-3">
        KATEGORI PRODUK
        <ul>
            <?php
            $kategori=mysqli_query($koneksi,"SELECT * FROM category");
            while($kategori_tampil=mysqli_fetch_array($kategori)){
            ?>
                <li><a href="?page=kategori_produk&idkategoriproduk=<?php echo $kategori_tampil['id']?>"><?php echo $kategori_tampil['category']; ?></a></li>
            <?php } ?>
        </ul>
    </div>
   </div>
