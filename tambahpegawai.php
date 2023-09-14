<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH DATA</title>
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
    <a class="navbar-brand" href="index.php">Form Data Pegawai</a>
    <li><a class="navbar-brand" href="tambahabsen.php">Daftar Hadir</a></li>
    <li><a class="navbar-brand" href="tambahlaporan.php">Laporan Kerja</a></li>
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
    

    form {
      width: 100%;
      margin: 0 auto;  
      margin-top:20px;    
      padding: 125px;
      color:white;
      background-image: url('mantap.png');
      
    }

    table {
      width: 100%;
      padding: 10px;
    }

    td {
      padding: 10px;
      vertical-align: top;
    }

    input[type="text"] {
      width: 100%;
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 3px;
      box-sizing: border-box;
    }
    div {
    margin: 20px auto;
    width: 80%;
  }

    button {
      padding: 8px 15px;
      background-color: #007bff;
      border: none;
      color: white;
      border-radius: 3px;
      cursor: pointer;
    }

    button[type="submit"] {
      background-color: #28a745;
    }

    button[type="button"] {
      background-color: #dc3545;
    }
    /* CSS untuk tema gelap pada form */
body {
    background-color: #1f1f1f; /* Warna latar belakang untuk tema gelap */
    color: #fff; /* Warna teks putih */
}

table {
    width: 100%;
    border-collapse: collapse;

}

table td {
    padding: 10px;
}

input[type="text"] {
    background-color: whitesmoke; /* Warna latar belakang input */
    color: black; /* Warna teks putih untuk input */
    border: 1px solid #444; /* Garis tepi input */
    padding: 5px;
    width: 100%;
}

  </style>
</head>

<body>

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
<footer>
		<div class="jumbotron jumbotron-fluid bg-secondary p-4 mt-5 mb-0">
			<div class="container">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 cizgi">
						<div class="card bg-secondary border-0">
							<div class="card-body text-light text-center">
								<h5 class="card-title text-white display-4" style="font-size:30px">Siapa Yang Membuat?</h5>
							<p class="d-inline lead">Vandeeps Corporation © 2023<br>
							<a href="" class="text-light d-block lead"></a>
							</p>
	
							</div>
						</div>
					</div>
					
					<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 cizgi">
						<div class="card bg-secondary border-0">
							<div class="card-body text-center">
								<h5 class="card-title text-white display-4" style="font-size:30px">Nomor Pemilik</h5>
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