<?php
include "../conf/conn.php";
$username = mysqli_real_escape_string($db, $_POST['username']);
$password = mysqli_real_escape_string($db, $_POST['password']);
$check    = mysqli_query($db,"SELECT * FROM admin WHERE username = '$username' AND password = md5('$password')") or die(mysqli_error());
if(mysqli_num_rows($check) >= 1){
    while($row = mysqli_fetch_array($check)){
        session_start();
        $_SESSION['id_admin'] = $row['id_admin'];
        $_SESSION['nama'] = $row['nama'];
        ?>
        <script>alert("Selamat Datang <?= $row['username']; ?> Kamu Telah Login Ke Halaman Admin !!!");
        window.location.href="../index.php"</script>
        <?php
    }
}else{
    echo '<script>alert("Masukan Username dan Password dengan Benar !!!");
    window.location.href="login.php"</script>';
}
?>
