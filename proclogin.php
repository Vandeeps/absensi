<?php

include "koneksi.php";
$ari = $_POST['user'];
$su = $_POST['pass'];
$roguin = "SELECT * FROM login WHERE user = '$ari' AND pass = '$su';";
$sql = mysqli_query($koneksi, $roguin);
$data = mysqli_fetch_array($sql);

session_start();

if (mysqli_num_rows($sql) == 1){
    $_SESSION['login'] = true;
    echo "<script>location.href='index.php';</script>";
}
else {
    echo "<script>alert('Username Atau Password Salah!!');location.href='login.php';</script>";
}

?>