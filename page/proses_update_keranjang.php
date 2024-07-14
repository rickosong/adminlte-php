<?php 
include "../koneksi.php";

if($_POST) {
    $id = $_POST['id'];
    $kategori = $_POST['kategori'];
    $query = $db->query("UPDATE category SET
    id = '$id', 
    category = '$kategori'
    WHERE id = '$id'
    ");

    if($query) { 
        echo '<script>alert("Data Berhasil Diubah !!!");
        window.location.href="../../index.php?page=data_kategori"</script>
        ';
    } else {
        echo "Data Gagal DiUbah = ".$db->error;
    }
}

?>