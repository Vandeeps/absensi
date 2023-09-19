<?php
  $title = "DATA KEHADIRAN";
  include "./layouts/header.php";
?>

<body style="display: grid; gap: 1rem; padding-top: 6rem">
<?php
  include "./layouts/navbar.php";
?>
  <div class="container-fluid">
    <table class="table table-dark table-striped-columns"  align="right" bgcolor="gray">
    <thead bgcolor="gray" align="center">
      <tr>
          <th>NO</th>
          <th>NIP</th>
          <th>NAMA PEGAWAI</th>
          <th>NOMOR TELEPON</th>
          <th>KEHADIRAN</th>
          <th>TANGGAL</th>                     
          <th>KETERANGAN</th>
          <th colspan="2">AKSI</th>
      </tr>
    </thead>
    <tbody bgcolor="gray" style="text-align: center; width:80%; color:white;">
      <?php
          include "koneksi.php";
          $tampil = mysqli_query($koneksi, "SELECT tb_absen.No, data_karyawan.NIP, data_karyawan.nama, data_karyawan.hp, tb_absen.absen,
          tb_absen.tgl,tb_absen.ket FROM tb_absen INNER JOIN data_karyawan ON tb_absen.NIP = data_karyawan.NIP");
          while ($row = mysqli_fetch_array($tampil)) {
              echo "<tr>
              <td>" . $row[0] . "</td>
              <td>" . $row[1] . "</td> 
              <td>" . $row[2] . "</td> 
              <td>" . $row[3] . "</td>
              <td>" . $row[4] . "</td>
              <td>" . $row[5] . "</td>
              <td>" . $row[6] . "</td>
              <td bgcolor='gray'>
              <a href='editabsen.php?No=" . $row[0] . "' id='butViewEdit'>Ubah</a>
              <a href='DeleteAbsen.php?No=" . $row[0] . "' id='butViewDelete'>Hapus</a>
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