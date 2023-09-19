<?php
  $title = "TAMBAH DATA PEGAWAI";
  include "./layouts/header.php";
?>
<body style="display: grid; gap: 1rem; padding-top: 6rem">
<?php
  include "./layouts/navbar.php";
?>
 

  <form action="procpegawai.php" method="post">
    <table>
    
      <tbody>
        <tr>
          <td>NIP</td>
          <td><input type="text" name="NIP"></td>
        </tr>
        <tr>
          <td>Nama Pegawai</td>
          <td><input type="text" name="nama"></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
          <td>Nomor Telepon</td>
          <td><input type="text" name="hp"></td>
        </tr>
        <tr>
          <td colspan="2">
          <button class="button-simpan" type="submit" value="simpan">Simpan</button>
            <button class="button-kembali" type="button" value="kembali" onclick="history.go(-1);">Kembali</button>
          </td>
        </tr>
      </tbody>
    </table>
  </form>
  <?php
  include "./layouts/footer.php";
?>