<?php
include "koneksi.php";
$nis = $_GET['Id_lap'];
$hapus = "delete from lap_keg where Id_lap='$nis'";
$hasil=mysqli_query($koneksi,$hapus);
if ($hasil === false):
    echo "<script>alert('Gagal Dihapus'); location.href='laporan.php';</script>";
else :
    echo "<script>alert('Berhasil Dihapus'); location.href='laporan.php';</script>";
endif;
?>