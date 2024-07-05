<?php
include "../../conf/conn.php";

    $id = $_GET['id'];
    $query = $db->query("DELETE FROM category WHERE id = '$id'");

    if($query) { 
        echo '<script>alert("Data Berhasil Dihapus !!!");
        window.location.href="../../index.php?page=data_kategori"</script>
        ';
    } else {
        echo "Data Gagal DiUbah = ".$db->error;
    }
?>
