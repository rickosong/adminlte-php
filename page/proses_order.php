
    <h3>PROSES PEMBELIAN</h3>
   <div class="row">
       <div class="col-9">
        <?php
            $idproduk=$_GET['idproduk'];

            $cekbarang=mysqli_query($koneksi,"SELECT * FROM keranjang WHERE id_product='$idproduk'");
            $cekbarang1=mysqli_fetch_array($cekbarang);
            $cekbarang2=mysqli_num_rows($cekbarang);

            $produk=mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM product WHERE id='$idproduk'"));

            if($cekbarang2==0){
                $simpan=mysqli_query($koneksi,"INSERT INTO keranjang(id_product,qty,harga,subtotal) VALUES('$produk[id]','1','$produk[price]','$produk[price]')");
                    echo "Sukses, Produk yang anda pilih berhasil ditambahkan ke dalam Keranjang Belanja<br>
                        <a href='?page=keranjang_belanja'>Keranjang Belanja</a>
                        <a href='./'>Lanjut Berbelanja</a>
                    ";
            }else{
                $jumlah=$cekbarang1['qty']+1;
                $subtotal=$cekbarang1['harga']*$jumlah;
                $update=mysqli_query($koneksi,"UPDATE keranjang SET qty='$jumlah',subtotal='$subtotal' WHERE id_product='$idproduk'");
                echo "Sukses!! Barang ini sudah anda pesan sebelumnya, dan jumlah Pemesan Berhasil Perbarui
                <br>
                        <a href='?page=keranjang_belanja'>Keranjang Belanja</a>
                        <a href='./'>Lanjut Berbelanja</a>";
            }
        ?>
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
