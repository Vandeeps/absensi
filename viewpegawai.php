<?php
  $title = "DATA PEGAWAI ";
  include "./layouts/header.php";
?>
<body style="display: grid; gap: 1rem; padding-top: 6rem">
<?php
  include "./layouts/navbar.php";
?>
<div>
  <table class="table table-dark table-striped-columns"  align="right" bgcolor="gray">
  <thead bgcolor="gray" align="center">
      <tr>
          <th>NIP</th>
          <th>NAMA PEGAWAI</th>
          <th>ALAMAT</th>
          <th>NOMOR TELEFON</th>
          <th colspan="2">AKSI</th>
      </tr>
  </thead>
  <tbody bgcolor="gray" style="text-align: center; width:80%; color:white;">
      <?php
      include "koneksi.php";
      $tampil = mysqli_query($koneksi, "SELECT * FROM data_karyawan");
      while ($row = mysqli_fetch_array($tampil)) {
          echo "<tr>
          <td>" . $row[0] . "</td>
          <td>" . $row[1] . "</td> 
          <td>" . $row[2] . "</td> 
          <td>" . $row[3] . "</td>
          <td bgcolor='gray'>
          <a href='editpegawai.php?NIP=" . $row[0] . "' id='butViewEdit'>Ubah</a>
          <a href='procDeletepegawai.php?NIP=" . $row[0] . "' id='butViewDelete'>Hapus</a>
          </td>
      </tr>";
      }
      ?>
  </tbody>
</table>
</div>
<?php
  include "./layouts/footer.php";
?>