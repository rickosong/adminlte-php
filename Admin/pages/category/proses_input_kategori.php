<?php
include "../../conf/conn.php";
if($_POST) {
    $kategori = $_POST['kategori'];
    $query = $db->query("INSERT INTO category(category) VALUES ('".$kategori."')");

    if($query) { 
        echo '<script>alert("Data Berhasil Ditambahkan !!!");
        window.location.href="../../index.php?page=data_kategori"</script>
        ';
    } else {
        echo "Data Gagal DiUbah = ".$db->error;
    }
}
?>
