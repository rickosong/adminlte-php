<?php
include "../../conf/conn.php";
if($_POST) {
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $id_category = $_POST['id_category'];
    $deskripsi = $_POST['deskripsi'];

    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['foto']['name'];
    $ukuran = $_FILES['foto']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
     
    if(!in_array($ext,$ekstensi) ) {
        header("location:index.php?alert=gagal_ekstensi");
    }else{
        if($ukuran < 1044070){      
            $xx = $filename;
            move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.$filename);
            $query = $db->query("INSERT INTO product(product_name,price,id_category,deskripsi,image) 
            VALUES ('".$product_name."','".$price."','".$id_category."','".$deskripsi."','".$xx."')");
            if($query) { 
                echo '<script>alert("Data Berhasil Ditambahkan !!!");
                window.location.href="../../index.php?page=data_produk"</script>
                ';
            } else {
                echo "Data Gagal Ditambah = ".$db->error;
            }
        }else{
            header("location:index.php?alert=gagal_ukuran");
        }
    }
}
?>
