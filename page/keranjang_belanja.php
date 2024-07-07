div class="container">
    <h3>KERANJANG BELANJA</h3>
   
   
   <div class="row">
       <div class="col-9">

        <table border="1" cellpadding="5" cellspacing="0" width="100%">
            <tr>
                <td>No</td>
                <td>Nama Barang</td>
                <td>Harga</td>
                <td>Jumlah</td>
                <td>Sub Total</td>
                <td> </td>
            </tr>
            <?php
            $i=1;
            $totalakhir=0;
                $daftarbeli=mysqli_query($koneksi,"SELECT * FROM 
                    keranjang a LEFT JOIN product b 
                    ON a.id_product=b.id");
                while($daftarbeli1=mysqli_fetch_array($daftarbeli)){
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $daftarbeli1['product_name']; ?></td>
                <td><?php echo number_format($daftarbeli1['price'],2); ?></td>
                <td>
                    <form method="post" action="?page=keranjang_belanja&&idpesanproduk=<?php echo $daftarbeli1['id_keranjang']; ?>&&proses=update">
                    <input type="number" name="jumlah" value="<?php echo $daftarbeli1['qty']; ?>">
                    <input type="Submit" name="Update" value="Update">
                    </form>

                    </td>
                <td><?php echo number_format($daftarbeli1['subtotal'],2); ?></td>
                <td><a href="?page=keranjang_belanja&&idpesanproduk=<?php echo $daftarbeli1['id_keranjang']; ?>&&proses=hapus">Hapus</a></td>
            </tr>
        <?php 
                $totalakhir+=$daftarbeli1['subtotal'];
        $i=$i+1; } ?>
            <tr>
                <td colspan="4" align="right">TOTAL</td>
                <td><?php echo number_format($totalakhir,2); ?></td>
                <td> </td>
            </tr>

        </table>

        <center><a href="?page=checkout">CHECKOUT / SELESAI PEMBELIAN </a></center>

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
