<?php
    $idkategoriproduk=$_GET['idkategoriproduk'];
    if(!empty($idkategoriproduk)){
        $proc_query="WHERE id_category='$idkategoriproduk'";
        $cat_query="WHERE id='$idkategoriproduk'";
    }else{
        $cat_query="";
        $proc_query="";
    }
    $kategori=mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM category $cat_query"));
?>
<div class="container">
    <h3>KATEGORI PRODUK <?php if(!empty($idkategoriproduk)){ ?><font color="red"><?php echo strtoupper($kategori['category']); ?></font> <?php } ?></h3>
   
   
   <div class="row">
       <div class="col-9">
        
        <?php
                $produktebaru=mysqli_query($koneksi,"SELECT * FROM product $proc_query ORDER BY id DESC LIMIT 0,6");
                $cekjmlproduk=mysqli_num_rows($produktebaru);
                if($cekjmlproduk==0){
                    echo "<h3>Maaf!! Produk pada Kategori $kategori[category] Tidak ada.</h3>";
                }
                while($tampilproduk=mysqli_fetch_array($produktebaru)){
            ?>
            <div class="col-4">
                <div class="box-barang">
                    <img src="./Admin/pages/product/gambar/<?php echo $tampilproduk['image']; ?>">
                    <div class="barang-judul">
                        <a href="?page=detail_produk&&idproduk=<?php echo $tampilproduk['id']; ?>">
                            <?php echo $tampilproduk['product_name']; ?>
                        </a>
                    </div>
                    <div class="barang-deskripsi"><?php echo $tampilproduk['deskripsi']; ?> ...</div>
                    <div class="barang-harga">Rp. <?php echo number_format($tampilproduk['price'],2); ?></div>
                </div>
            </div>
            <?php } ?>

    </div>
    <div class="col-3">
        KATEGORI PRODUK
        <ul>
            <?php
            $kategori=mysqli_query($koneksi,"SELECT * FROM category");
            while($kategori_tampil=mysqli_fetch_array($kategori)){
            ?>
                <li><a href="?page=kategori_produk&&idkategoriproduk=<?php echo $kategori_tampil['id']?>"><?php echo $kategori_tampil['category']; ?></a></li>
            <?php } ?>
        </ul>
    </div>
   </div>
 </div>
