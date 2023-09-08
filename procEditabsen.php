<?php
include "koneksi.php";


$id = $_POST['No'];
$mmerek = mysqli_real_escape_string($koneksi, $_POST['absen']);
$kt = mysqli_real_escape_string($koneksi, $_POST['Ket']);

$tampil = mysqli_query($koneksi, "UPDATE tb_absen SET absen='$mmerek', Ket='$kt' WHERE No='$id'");
if ($tampil === false) {
    echo "<script>alert('Data Gagal Diubah!! " . mysqli_error($koneksi) . "'); location.href='editabsen.php';</script>";
} else {
    $jumlah_rows = mysqli_affected_rows($koneksi);
    if ($jumlah_rows > 0) {
        echo "<script>alert('Data Berhasil Diubah'); location.href='viewabsen.php';</script>";
    } else {
        echo "<script>alert('Tidak ada perubahan data'); location.href='viewabsen.php';</script>";
    }
}
?>
