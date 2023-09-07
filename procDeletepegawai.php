<?php
include "koneksi.php";
$nis = $_GET['NIP'];
$hapus = "delete from data_karyawan where NIP='$nis'";
$hasil=mysqli_query($koneksi,$hapus);
if ($hasil === false):
    echo "<script>alert('Gagal Dihapus'); location.href='viewpegawai.php';</script>";
else :
    echo "<script>alert('Berhasil Dihapus'); location.href='viewpegawai.php';</script>";
endif;
?>