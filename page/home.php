<section id="slideshow">
    <div class="slideshow"> </div>
</section>
<section id="produk">
    <div class="container">
        <div class="produk-title">PRODUK TERBARU</div> 
        <div class="row">
            <?php
                $produktebaru=mysqli_query($koneksi,"SELECT * FROM product ORDER BY id DESC");
                while($tampilproduk=mysqli_fetch_array($produktebaru)){
            ?>
            <div class="col-4">
                <div class="box-barang">
                    <img src="./Admin/pages/product/gambar/<?php echo $tampilproduk['image']; ?>" width="100" height="300">
                    <div class="barang-judul">
                        <a href="?page=detail_produk&idproduk=<?php echo $tampilproduk['id']; ?>">
                            <?php echo $tampilproduk['product_name']; ?>
                        </a>
                    </div>
                    <div class="barang-deskripsi"><?php echo (substr($tampilproduk['deskripsi'],0,45)."[..]"); ?></div> 
                    <div class="barang-harga">Rp. <?php echo number_format($tampilproduk['price'],2); ?></div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
