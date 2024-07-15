<div class="row">
        <div class="col-12">
            <h2>Checkout</h2>
            <?php
                    $totalakhir = 0;
                    $daftarbeli = mysqli_query($koneksi, "SELECT * FROM orders a LEFT JOIN product b ON a.id_product = b.id");
                    while ($daftarbeli1 = mysqli_fetch_array($daftarbeli)) {
            ?>
            <div class="box-barang">
                <div class="row box">                    
                    <div class="col-3">
                        <br>
                        <img src="./Admin/pages/product/gambar/<?php echo $daftarbeli1['image']; ?>" width="50" height="200">
                    </div>
                    <div class="col-9">
                        <div class="barang-judul">
                            <?php echo ($daftarbeli1['product_name']); ?>
                            <div class="barang-deskripsi"><?php echo ($daftarbeli1['deskripsi']); ?></div> 
                            <br>
                            <div class="barang-harga">Rp. <?php echo number_format($daftarbeli1['price'],2); ?></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                        // $totalakhir += $daftarbeli1['subtotal'];
                        // $i++;
                    }
                    ?>
</div>
</div>