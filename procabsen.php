<?php

include('function_tgl.php');

include "koneksi.php";
// $id = $_POST['No'];
$nnama = addslashes($_POST['NIP']);
$mmerek = $_POST['absen'];
$tanggal = $_POST['tgl']; 
$tanggalhadir = Inputtgl($tanggal);
$ket = $_POST['Ket'];
$sql = "INSERT INTO tb_absen VALUES('', '$nnama', '$mmerek','$tanggalhadir', '$ket')";
// var_dump($tanggalhadir);
// die;
$tampil = mysqli_query($koneksi,$sql);
if ($tampil == false) :
    echo "<script>alert('Gagal Input');
    location.href='tambahabsen.php';</script>";
else :
    echo "<script>alert('Berhasil Input');
    location.href='viewabsen.php';</script>";
endif;
?>