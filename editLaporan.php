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
    if(isset($_GET['Id_lap'])){
    $a = $_GET['Id_lap'];
    $data =  "SELECT * FROM lap_keg WHERE Id_lap = '$a'";
    $sql = mysqli_query($koneksi,$data);
    while ($data = mysqli_fetch_array($sql)){
        ?>

  <form action="procEditlaporan.php" method="post">
    <table>
    
      <tbody>
      <tr>
                <td>Nomor Laporan : </td>
                <td><input type="text" name="Id_lap" maxlength="11" value="<?php echo $data['Id_lap']?>" readonly=""></td>
            </tr>
      <tr>
                <td>NIP : </td>
                <td><input type="text" name="NIP" maxlength="11" value="<?php echo $data['NIP']?>" readonly=""></td>
            </tr>
            <tr>
                <td>Laporan : </td>
                <td><input type="text" name="laporan" maxlength="100" value="<?php echo $data['laporan']?>"></td>
    </tr>
            <tr>
            <td>Keterangan : </td>
<td>
  <select name="ket">
    <option value="Selesai" <?php if ($data['ket'] == "Selesai") echo "selected"; ?>>Selesai</option>
    <option value="Proses" <?php if ($data['ket'] == "Proses") echo "selected"; ?>>Proses</option>
    <option value="Belum" <?php if ($data['ket'] == "Belum") echo "selected"; ?>>Belum</option>
  </select>
</td>
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