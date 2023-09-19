<?php
  $title = "DAFTAR HADIR";
  include "./layouts/header.php";
?>
<body>
<?php
  include "./layouts/navbar.php";
?>
<h3 align="center">Ubah Data</h3>
    <?php
    include "koneksi.php";
    if(isset($_GET['NIP'])){
    $a = $_GET['NIP'];
    $data =  "SELECT * FROM data_karyawan WHERE NIP = '$a'";
    $sql = mysqli_query($koneksi,$data);
    while ($data = mysqli_fetch_array($sql)){
        ?>

  <form action="proceditpegawai.php" method="post">
    <table>
    
      <tbody>
      <tr>
                <td>NIP : </td>
                <td><input type="text" name="NIP" maxlength="11" value="<?php echo $data['NIP']?>" readonly=""></td>
            </tr>
            <tr>
                <td>Nama Pegawai : </td>
                <td><input type="text" name="nama" maxlength="100" value="<?php echo $data['nama']?>"></td>
            </tr>
            <tr>
                <td>Alamat : </td>
                <td><input type="text" name="alamat" maxlength="100" value="<?php echo $data['alamat']?>"></td>
            </tr>
            <tr>
                <td>Nomor Telepon : </td>
                <td><input type="text" name="hp" maxlength="100" value="<?php echo $data['hp']?>"></td>
            </tr>
            <tr>
                <td><input class="button-simpan" type="submit" value="Ubah"></td>
                <td><input class="button-kembali" type="button" value="Kembali" onclick="history.go(-1);"></td>
            </tr>
    </table>
    </form>
    <?php
    }
}
    ?>
<?php
  include "./layouts/footer.php";
  ?>