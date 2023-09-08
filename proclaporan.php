<?php
include "koneksi.php";
$id = $_POST['Id_lap'];
$nnama = addslashes($_POST['NIP']);
$mmerek = $_POST['laporan'];
$ket = $_POST['ket'];
$tampil = mysqli_query($koneksi, "INSERT INTO lap_keg VALUES('$id', '$nnama', '$mmerek', '$ket')");
if ($tampil == false) :
    echo "<script>alert('Gagal Input');
    location.href='tambahlaporan.php';</script>";
else :
    echo "<script>alert('Berhasil Input');
    location.href='laporan.php';</script>";
endif;
?>