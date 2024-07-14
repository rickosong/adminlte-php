<?php
include 'conf/conn.php';
$sess_admin = $_SESSION['id_admin'];
if (isset($sess_admin)){
    session_destroy();
    echo '<script>alert("Anda Telah Logout !!!");
    window.location.href="pages/login.php"</script>';
}
?>
