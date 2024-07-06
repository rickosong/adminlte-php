<?php
if(isset($_GET['page'])){
  $page = $_GET['page'];
switch ($page) {
// Beranda
  case 'data_user':
    include 'pages/user/data_user.php';
    break;

  case 'input_user':
    include 'pages/user/input_user.php';
    break;
      
  case 'edit_user';
    include 'pages/user/edit_user.php';
    break;

  case 'data_kategori':
    include 'pages/category/data_kategori.php';
    break;

  case 'input_kategori':
    include 'pages/category/input_kategori.php';
    break;
      
  case 'edit_kategori';
    include 'pages/category/edit_kategori.php';
    break;

  case 'data_produk':
    include 'pages/product/data_produk.php';
    break;

  case 'input_produk':
    include 'pages/product/input_produk.php';
    break;
      
  case 'edit_produk';
    include 'pages/product/edit_produk.php';
    break;
      
  case 'logout';
    include 'pages/logout_process.php';
    break;
  }
}else{
    include "pages/home.php";
  }
?>
