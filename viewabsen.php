<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DATA KEHADIRAN</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="icon" type="image/png" href="icon.jpg">
  <style>
  body {
      background-image: url('nc.jpg'); /* Ganti dengan path gambar Anda */
      background-size:cover;
      background-position: center;
      background-repeat: repeat;
    }
    </style>
</head>
<body>
  <!-- NAVIGATION BAR -->
  <h1 class="judul" align="center">Sistem Data Pegawai</h1>
  <!-- NAVIGATION BAR -->
  <div class="container-navbar">
    <ul class="ul-navbar">
    <li class="li-navbar">
        <a href="index.php" class="a-navbar">BERANDA</a>
      </li>
      <li class="li-navbar">
        <a href="viewpegawai.php" class="a-navbar">DATA PEGAWAI</a>
      </li>
      <li class="li-navbar">
      <a href="tambahpegawai.php" class="a-navbar">TAMBAH DATA PEGAWAI</a>
      </li>
      <li class="li-navbar">
        <a href="viewabsen.php" class="a-navbar">ABSENSI</a>
      </li>
      <li class="li-navbar">
        <a href="tambahabsen.php" class="a-navbar">ISI DAFTAR HADIR</a>
      </li>
      <li class="li-navbar">
        <a href="laporan.php" class="a-navbar">DATA LAPORAN KERJA</a>
      </li>
      <li class="li-navbar">
        <a href="tambahlaporan.php" class="a-navbar">LAPORAN KERJA</a>
      </li>
    </ul>
  </div>
  <style>
  body {
   
    background-color: #f0f0f0;
  }

  div {
    margin: 20px auto;
    width: 80%;
  }

  table {
    border-collapse: collapse;
    width: 80%;
    border: 1px solid #ccc;

  }

  th, td {
    padding: 8px;
    border: 1px solid #ccc;
  }

  th {
    background-color: #333 ;
    color:white;
  }

  tbody {
    background-color: gray;
    text-align: center;
  }
  
  
</style>
  <h2 class="judulor" align="center">TABEL DATA ABSEN</h2>
      <div>
        <table border="1" align="right" bgcolor="gray">
            <thead bgcolor="gray">
                  <tr>
                      <th>NO</th>
                      <th>NIP</th>
                      <th>NAMA PEGAWAI</th>
                      <th>NOMOR TELEPON</th>
                      <th>KEHADIRAN</th>
                      <th>KETERANGAN</th>
                      <th colspan="2">AKSI</th>
                  </tr>
            </thead>
            <tbody bgcolor="gray" style="text-align: center; width=80% color:white;">
                  <?php
                  include "koneksi.php";
                  $tampil = mysqli_query($koneksi, "SELECT tb_absen.No, data_karyawan.NIP, data_karyawan.nama, data_karyawan.hp, tb_absen.absen,
                  tb_absen.ket FROM tb_absen INNER JOIN data_karyawan ON tb_absen.NIP = data_karyawan.NIP");
                  while ($row = mysqli_fetch_array($tampil)) {
                      echo "<tr>
                      <td>" . $row[0] . "</td>
                      <td>" . $row[1] . "</td> 
                      <td>" . $row[2] . "</td> 
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                      <td>" . $row[5] . "</td>
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
  
 

</body>
</html>