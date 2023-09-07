<?php
include "koneksi.php";
$id = $_POST['No'];
$nnama = addslashes($_POST['NIP']);
$mmerek = $_POST['absen'];
$ket = $_POST['Ket'];
$tampil = mysqli_query($koneksi, "INSERT INTO tb_absen VALUES('$id', '$nnama', '$mmerek', '$ket')");
if ($tampil == false) :
    echo "<script>alert('Gagal Input');
    location.href='tambahabsen.php';</script>";
else :
    echo "<script>alert('Berhasil Input');
    location.href='viewabsen.php';</script>";
endif;
?>