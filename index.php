<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DATA LAPORAN</title>
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
    .navbar-brand{
      width: 990px;


    }

    
    </style>
</head>
<body>
<a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
  Pindah Halaman
</a>
<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Sistem Data Pegawai Serta Daftar Hadir dan Laporan</a>
    <div>
    <a class="navbar-brand" href="tambahabsen.php"> Daftar Hadir </a>
    <a class="navbar-brand" href="tambahlaporan.php"> Laporan Kerja </a>
    </div>
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

            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
  <style>
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
            <thead bgcolor="gray">
                  <tr>
                      <th>NIP</th>
                      <th>NAMA PEGAWAI</th>
                      <th>KEHADIRAN</th>
                      <th>KETERANGAN KEHADIRAN</th>
                      <th>TANGGAL </th>
                      <th>ALAMAT</th>
                      <th>HP</th>
                      <th>LAPORAN</th>
                      <th>KETERANGAN LAPORAN</th>
                  </tr>
            </thead>
            <tbody bgcolor="gray" style="text-align: center; width=80% color:white;">
                  <?php
                  include "koneksi.php";
                  $tampil = mysqli_query($koneksi, "SELECT data_karyawan.nip, data_karyawan.nama, tb_absen.absen,
                  tb_absen.Ket,tb_absen.tgl, data_karyawan.alamat, data_karyawan.hp, lap_keg.laporan, lap_keg.ket
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

                  </tr>";
                  }
                  ?>
            </tbody>
        </table>
</div>
<Style>
  footer{
    margin-top: 500px;
  }
</Style>
<footer>
		<div class="jumbotron jumbotron-fluid bg-secondary p-4 mt-5 mb-0">
			<div class="container">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 cizgi">
						<div class="card bg-secondary border-0">
							<div class="card-body text-light text-center">
								<h5 class="card-title text-white display-4" style="font-size:30px">Pembuat Web</h5>
							<p class="d-inline lead">Vandeeps Corporation © 2023<br>
							<a href="" class="text-light d-block lead"></a>
							</p>
	
							</div>
						</div>
					</div>
					
					<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 cizgi">
						<div class="card bg-secondary border-0">
							<div class="card-body text-center">
								<h5 class="card-title text-white display-4" style="font-size:30px">Kontak : </h5>
								<a class="text-light d-block lead" style="margin-left: -20px" href="https://wa.me/+62895411192902"><i class="fa fa-phone mr-2"></i>+62-8954-1119-2902</a>
								<a class="text-light d-block lead" href="#"><i class="fa fa-envelope mr-2"></i>Vandeeps@localhost.com</a>
							</div>
						</div>
					</div>
					
					<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
						<div class="card bg-secondary border-0">
							<div class="card-body text-center">
							<h5 class="card-title text-white display-4" style="font-size:30px">Sosial Media</h5>
					
									<a class="text-light" href="#"><i class="fa fa-facebook-square fa-fw fa-2x"></i></a>
								
									<a class="text-light" href="https://wa.me/+62895411192902"><i class="fa fa-twitter-square fa-fw fa-2x">Whatsapp</i></a>
								
									<a class="text-light" href="https://instagram.com/evannsss._?igshid=OGQ5ZDc2ODk2ZA=="><i class="fa fa-instagram fa-fw fa-2x"></i>Instagram</a>
								
									<a class="text-light" href="#"><i class="fa fa-linkedin fa-fw fa-2x"></i></a>
								
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</footer>

  
 

</body>

</html>