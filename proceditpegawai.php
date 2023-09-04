<?php
include "koneksi.php";

// Mengambil data dari formulir
$id = $_POST['NIP'];
$nnama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$mmerek = mysqli_real_escape_string($koneksi, $_POST['alamat']);
$kt = mysqli_real_escape_string($koneksi, $_POST['hp']);

// Melakukan pernyataan SQL UPDATE
$tampil = mysqli_query($koneksi, "UPDATE data_karyawan SET nama='$nnama', alamat='$mmerek', hp='$kt' WHERE NIP='$id'");

// Memeriksa hasil dari pernyataan SQL
if ($tampil === false) {
    echo "<script>alert('Data Gagal Diubah!! " . mysqli_error($koneksi) . "'); location.href='editpegawai.php';</script>";
} else {
    $jumlah_rows = mysqli_affected_rows($koneksi);
    if ($jumlah_rows > 0) {
        echo "<script>alert('Data Berhasil Diubah'); location.href='viewpegawai.php';</script>";
    } else {
        echo "<script>alert('Tidak ada perubahan data'); location.href='viewpegawai.php';</script>";
    }
}
?>
