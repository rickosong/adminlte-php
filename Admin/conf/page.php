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
      
      case 'logout';
      include 'pages/logout_process.php';
      break;
  }
}else{
    include "pages/home.php";
  }
?>
