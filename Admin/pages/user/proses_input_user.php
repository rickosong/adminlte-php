<?php
include "../../conf/conn.php";
if($_POST) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $email = $_POST['email'];
    $level = $_POST['level'];
    $query = $db->query("INSERT INTO user(id_user,password,email,level) VALUES ('".$user."','".$pass."','".$email."','".$level."')");

    if($query) { 
        echo '<script>alert("Data Berhasil Ditambahkan !!!");
        window.location.href="../../index.php?page=data_user"</script>
        ';
    } else {
        echo "Data Gagal DiUbah = ".$db->error;
    }
}
?>
