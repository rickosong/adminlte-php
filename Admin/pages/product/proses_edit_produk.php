<?php
include "../../conf/conn.php";
if($_POST) {
    $id_product = $_POST['id_product'];
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $stok = $_POST['stok'];
    $id_category = $_POST['id_category'];
    $deskripsi = $_POST['deskripsi'];
    $lama=$_POST['foto_lama']; //variabel foto lama
    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['foto']['name'];
    $ukuran = $_FILES['foto']['size'];
    $file=$_FILES['foto']['tmp_name'];    //temporary foto
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if(empty($file)){
        $query = $db->query("UPDATE product SET
        product_name = '".$product_name."',
        price = '".$price."',
        stok = '".$stok."',
        id_category = '".$id_category."',
        deskripsi = '".$deskripsi."'
        WHERE id = '".$id_product."'
        "); 
        if($query) { 
            echo '<script>alert("Data Berhasil Diubah !!!");
            window.location.href="../../index.php?page=data_produk"</script>
            ';
        } else {
            echo "Data Gagal Ditambah = ".$db->error;
        }
    }elseif(!in_array($ext,$ekstensi) ) {
            header("location:index.php?alert=gagal_ekstensi");
    }else{
        if($ukuran < 1044070){      
            $xx = $filename;
            unlink('gambar/'.$lama); //hapus foto lama
            
            move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.$filename);//upload foto baru
            $query = $db->query("UPDATE product SET
            product_name = '".$product_name."',
            price = '".$price."',
            id_category = '".$id_category."',
            deskripsi = '".$deskripsi."',
            image = '".$xx."'
            WHERE id = '".$id_product."'
            ");

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
