<?php 

// update Keranjang
if (isset($_POST['Update'])) {
    $id_keranjang = $_GET['idpesanproduk'];
    $jumlah = $_POST['jumlah'];
    
    $update_query = "UPDATE keranjang SET qty='$jumlah', subtotal=harga*'$jumlah' WHERE id_keranjang='$id_keranjang'";
    $result = mysqli_query($koneksi, $update_query);
    
    if ($result) {
        echo '<script>alert("Data Berhasil Diubah !!!");
        window.location.href="index.php?page=keranjang_belanja"</script>
        ';
    } else {
        echo "Gagal memperbarui jumlah: " . mysqli_error($koneksi);
    }
}


// hapus keranjang
if (isset($_GET['proses']) && $_GET['proses'] == 'hapus') {
    $id_keranjang = $_GET['idpesanproduk'];
    
    $delete_query = "DELETE FROM keranjang WHERE id_keranjang='$id_keranjang'";
    $result = mysqli_query($koneksi, $delete_query);
    
    if ($result) {
        echo '<script>alert("Data Berhasil Dihapus !!!");
        window.location.href="index.php?page=keranjang_belanja"</script>
        ';
    } else {
        echo "Gagal memperbarui tabel: " . mysqli_error($koneksi);
    }
}



// checkout barang
if (isset($_GET['proses']) && $_GET['proses'] == 'checkout') {
    $totalakhir = $_POST['totalakhir'];
    $daftarbelanja = mysqli_query($koneksi, "SELECT * FROM keranjang a LEFT JOIN product b ON a.id_product = b.id");
    
    while ($item = mysqli_fetch_array($daftarbelanja)) {
        $id_product = $item['id_product'];
        $qty = $item['qty'];
        $subtotal = $item['subtotal'];
        
        // Simpan ke dalam tabel pesanan
        $insert_order = "INSERT INTO orders (id_product, qty, subtotal) VALUES ('$id_product', '$qty', '$subtotal')";
        $result_order = mysqli_query($koneksi, $insert_order);
        
        if (!$result_order) {
            echo "Gagal menyimpan pesanan: " . mysqli_error($koneksi);
            exit;
        }
    }
    
    // Hapus semua item dari keranjang setelah checkout berhasil
    $delete_cart = "DELETE FROM keranjang";
    $result_delete_cart = mysqli_query($koneksi, $delete_cart);
    
    if ($result_delete_cart) {
        echo "Checkout berhasil. Semua item telah dihapus dari keranjang.";
    } else {
        echo "Gagal menghapus item dari keranjang: " . mysqli_error($koneksi);
    }
}

?>

<div class="container">
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
                <td><?php echo number_format($daftarbeli1['harga'],2); ?></td>
                <td>
                    <form method="post" action="?page=keranjang_belanja&idpesanproduk=<?php echo $daftarbeli1['id_keranjang']; ?>&&proses=update">
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

        <center><a href="?page=checkout" onclick="return prompt('Masukkan Nama Pemesan')">CHECKOUT / SELESAI PEMBELIAN </a></center>

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