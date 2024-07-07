<?php
include "../../conf/conn.php";

    $id_product = $_GET['id'];
    $query = $db->query("DELETE FROM product WHERE id = '$id_product'");

    if($query) { 
        echo '<script>alert("Data Berhasil Dihapus !!!");
        window.location.href="../../index.php?page=data_produk"</script>
        ';
    } else {
        echo "Data Gagal DiUbah = ".$db->error;
    }
?>
