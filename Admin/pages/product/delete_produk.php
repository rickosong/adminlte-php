<?php
include "../../conf/conn.php";

    $user = $_GET['id'];
    $query = $db->query("DELETE FROM user WHERE id_user = '$user'");

    if($query) { 
        echo '<script>alert("Data Berhasil Dihapus !!!");
        window.location.href="../../index.php?page=data_user"</script>
        ';
    } else {
        echo "Data Gagal DiUbah = ".$db->error;
    }
?>
