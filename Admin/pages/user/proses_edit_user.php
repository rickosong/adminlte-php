<?php
include "../../conf/conn.php";
if($_POST) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $email = $_POST['email'];
    $level = $_POST['level'];
    $query = $db->query("UPDATE user SET
    id_user = '$user', 
    password = '$pass',
    email = '$email',
    level = '$level'
    WHERE id_user = '$user'
    ");

    if($query) { 
        echo '<script>alert("Data Berhasil Diubah !!!");
        window.location.href="../../index.php?page=data_user"</script>
        ';
    } else {
        echo "Data Gagal DiUbah = ".$db->error;
    }
}
?>
