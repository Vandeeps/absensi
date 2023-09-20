<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Sistem Data Pegawai Serta Daftar Hadir dan Laporan</a>
    <div>
    <a class="navbar-brand" href="tambahabsen.php"> Daftar Hadir </a>
    <a class="navbar-brand" href="tambahlaporan.php"> Laporan Kerja </a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </div>
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
 
label {
  font-size: 16px; 
}


input[type="date"] {
  padding: 5px 5px; 
  border: 1px solid #ccc; 
  border-radius: 4px; 
  cursor: pointer;
}


.btn-secondary {
  background-color: #ccc; 
  color: black; 
  border: none; 
  border-radius: 4px;
  padding: 7px 5px; 
  cursor: pointer; 
}


.btn-secondary:hover {
  background-color: #999; 
}

</style>