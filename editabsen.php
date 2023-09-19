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
    if(isset($_GET['No'])){
    $a = $_GET['No'];
    $data =  "SELECT * FROM tb_absen WHERE No = '$a'";
    $sql = mysqli_query($koneksi,$data);
    while ($data = mysqli_fetch_array($sql)){
        ?>

  <form action="proceditabsen.php" method="post">
    <table>
    
      <tbody>
      <tr>
                <td>NO : </td>
                <td><input type="text" name="No" maxlength="11" value="<?php echo $data['No']?>" readonly=""></td>
            </tr>
      <tr>
                <td>NIP : </td>
                <td><input type="text" name="NIP" maxlength="11" value="<?php echo $data['NIP']?>" readonly=""></td>
            </tr>
            <tr>
            <td>Kehadiran : </td>
<td>
  <select name="absen">
    <option value="Hadir" <?php if ($data['absen'] == "Hadir") echo "selected"; ?>>Hadir</option>
    <option value="Izin" <?php if ($data['absen'] == "Izin") echo "selected"; ?>>Izin</option>
    <option value="Sakit" <?php if ($data['absen'] == "Sakit") echo "selected"; ?>>Sakit</option>
  </select>
</td>
            </tr>
            <tr>
                <td>Ket : </td>
                <td><input type="text" name="Ket" maxlength="100" value="<?php echo $data['Ket']?>"></td>
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