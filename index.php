<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DATA LAPORAN</title>
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
    width:80%;
    border: 1px solid #ccc;
    margin-left: 180px;

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
  <h2 class="judulor" align="center">TABEL DATA LAPORAN KERJA</h2>
      <div>
        <table border="1"bgcolor="gray">
            <thead bgcolor="gray">
                  <tr>
                      <th>NIP</th>
                      <th>NAMA PEGAWAI</th>
                      <th>NOMOR KEHADIRAN</th>
                      <th>KEHADIRAN</th>
                      <th>KETERANGAN KEHADIRAN</th>
                      <th>ALAMAT</th>
                      <th>HP</th>
                      <th>NOMOR LAPORAN</th>
                      <th>LAPORAN</th>
                      <th>KETERANGAN LAPORAN</th>
                  </tr>
            </thead>
            <tbody bgcolor="gray" style="text-align: center; width=80% color:white;">
                  <?php
                  include "koneksi.php";
                  $tampil = mysqli_query($koneksi, "SELECT data_karyawan.nip, data_karyawan.nama, tb_absen.No, tb_absen.absen,
                  tb_absen.Ket, data_karyawan.alamat, data_karyawan.hp, lap_keg.id_lap, lap_keg.laporan, lap_keg.ket
                  FROM data_karyawan INNER JOIN tb_absen ON data_karyawan.NIP = tb_absen.NIP 
                                      INNER JOIN lap_keg ON data_karyawan.NIP = lap_keg.NIP");
                  while ($row = mysqli_fetch_array($tampil)) {
                      echo "<tr>
                      <td>" . $row[0] . "</td>
                      <td>" . $row[1] . "</td> 
                      <td>" . $row[2] . "</td> 
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                      <td>" . $row[5] . "</td>
                      <td>" . $row[6] . "</td>
                      <td>" . $row[7] . "</td>
                      <td>" . $row[8] . "</td>
                      <td>" . $row[9] . "</td>

                  </tr>";
                  }
                  ?>
            </tbody>
        </table>
</div>
  
 

</body>
</html>