<?php
include "koneksi.php";
$id = $_POST['NIP'];
$nnama = addslashes($_POST['nama']);
$mmerek = $_POST['alamat'];
$ssn = $_POST['hp'];
$tampil = mysqli_query($koneksi, "INSERT INTO data_karyawan VALUES('$id', '$nnama', '$mmerek', '$ssn')");
if ($tampil == false) :
    echo "<script>alert('Gagal Input');
    location.href='tambahpegawai.php';</script>";
else :
    echo "<script>alert('Berhasil Input');
    location.href='viewpegawai.php';</script>";
endif;
?>