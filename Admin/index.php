<?php
session_start();
include "conf/conn.php";
if(isset($_SESSION['id_admin'])==0){
  echo '<script>alert("Anda Harus Login Terlebih Dahulu !!!");
  window.location.href="pages/login.php"</script>';
  }else{
?>

<?php include 'template_header.php' ?>
<?php include 'template_footer.php' ?>

<?php } ?>

<!-- REQUIRED SCRIPTS -->
<?php include 'partials/js-file.php' ?>

</body>
</html>
