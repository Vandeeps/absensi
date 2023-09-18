<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UBAH DATA</title>
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
    <a class="navbar-brand" href="#">Ubah Data Laporan</a>
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

select {
  width: 100%; 
  padding: 10px; 
  border: 1px solid #ccc; 
  border-radius: 4px; 
  font-size: 14px; 
  background-color: #fff; 
  color: #333; 
}


select:focus {
  border-color: #007bff; 
  box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); 
}


select:disabled {
  background-color: #f2f2f2; 
  cursor: not-allowed; 
}


  </style>
</head>

<body>
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