<?php
include "koneksi.php";
$nis = $_GET['No'];
$hapus = "delete from tb_absen where No='$nis'";
$hasil=mysqli_query($koneksi,$hapus);
if ($hasil === false):
    echo "<script>alert('Gagal Dihapus'); location.href='viewabsen.php';</script>";
else :
    echo "<script>alert('Berhasil Dihapus'); location.href='viewabsen.php';</script>";
endif;
?>