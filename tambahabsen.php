<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH DATA</title>
    <link rel="stylesheet" href="adek.css">
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
        <a href="absensi.php" class="a-navbar">ISI DAFTAR HADIR</a>
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

button[type="submit"],
button[type="button"] {
    background-color: #007bff; 
    color: #fff; 
    border: none;
    padding: 10px 20px;
    margin-right: 10px; 
    cursor: pointer;
}


button[type="submit"]:hover,
button[type="button"]:hover {
    background-color: #0056b3; 
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

  <form action="procpegawai.php" method="post">
  <h2 class="semijudul" align="center">MASUKAN DATA PEGAWAI</h2>
    <table>
    
      <tbody>
        <tr>
          <td>No</td>
          <td><input type="text" name="NIP"></td>
        </tr>
        <tr>
            <td>NIP</td>
            <td><select name="NIP">
                <option>--PILIH--</option>
                <?php
                include "koneksi.php";
                $jurusan = "SELECT * FROM data_karyawan";
                $sql_jurusan = mysqli_query($koneksi, $jurusan);
                while ($data_jurusan = mysqli_fetch_array($sql_jurusan)) {
                    $i++;
                ?>
                    <option value="<?php echo $data_jurusan['NIP']; ?>">
                        <?php echo $data_jurusan['NIP']; ?>
                    </option>
                <?php
                }
                ?>
            </select>
            </td>
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
            <button type="submit" value="simpan">Simpan</button>
            <button type="button" value="kembali" onclick="history.go(-1);">Kembali</button>
          </td>
        </tr>
      </tbody>
    </table>
  </form>

     

</body>
</html>