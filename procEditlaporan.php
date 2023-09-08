<?php
include "koneksi.php";


$id = $_POST['Id_lap'];
$mmerek = mysqli_real_escape_string($koneksi, $_POST['laporan']);
$kt = mysqli_real_escape_string($koneksi, $_POST['ket']);

$tampil = mysqli_query($koneksi, "UPDATE lap_keg SET laporan='$mmerek', ket='$kt' WHERE Id_lap='$id'");
if ($tampil === false) {
    echo "<script>alert('Data Gagal Diubah!! " . mysqli_error($koneksi) . "'); location.href='editlaporan.php';</script>";
} else {
    $jumlah_rows = mysqli_affected_rows($koneksi);
    if ($jumlah_rows > 0) {
        echo "<script>alert('Data Berhasil Diubah'); location.href='laporan.php';</script>";
    } else {
        echo "<script>alert('Tidak ada perubahan data'); location.href='laporan.php';</script>";
    }
}
?>
