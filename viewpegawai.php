<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DATA PEGAWAI</title>
  <link rel="stylesheet" href="style1.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <link rel="icon" type="image/png" href="icon.jpg">
  <style>
  body {
      background-image: url('mantap.png'); /* Ganti dengan path gambar Anda */
      background-size:cover;
      background-position: center;
      background-repeat: repeat;
    }
    </style>
</head>
<body>
<a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
  Pindah Halaman
</a>
<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Data Pegawai</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Pilihan Halaman</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Index.php">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="viewpegawai.php">Data Pegawai</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="viewabsen.php">Data Kehadiran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="laporan.php">Data Laporan</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Input
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="tambahpegawai.php">Masukan Data Pegawai</a></li>
              <li><a class="dropdown-item" href="tambahabsen.php">Isi Daftar Hadir</a></li>
              <li><a class="dropdown-item" href="tambahlaporan.php">Masukan Laporan Kerja</a></li>

            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
  <style>
  body {
   
    background-color: #f0f0f0;
  }

  table{
    margin-top:15px;
  }
  
</style>
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
      <tbody bgcolor="gray" style="text-align: center; width=80% color:white;">
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



</body>
</html>