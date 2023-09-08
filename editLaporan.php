<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UBAH DATA</title>
    <link rel="stylesheet" href="style.css">
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
    

    form {
      width: 800px;
      margin: 0 auto;  
      margin-top:20px;
      margin-left:300px;   
      margin-bottom: 20px; 
      padding: 125px;
      border: 1px solid #ccc;
      background-color: #333;
      border-radius: 5px;
      color:white;
      
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
  <h2 class="semijudul" align="center">UBAH DATA LAPORAN</h2>
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

</body>
</html>