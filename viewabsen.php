<?php
  $title = "DAFTAR HADIR";
  include "./layouts/header.php";
  $sql = "SELECT tb_absen.No, data_karyawan.NIP, data_karyawan.nama, data_karyawan.hp, tb_absen.absen,
  tb_absen.tgl,tb_absen.ket FROM tb_absen INNER JOIN data_karyawan ON tb_absen.NIP = data_karyawan.NIP";
          $tanggalmulai = "";
          $tanggalakhir = "";
          if (isset($_GET["tanggalmulai"])) {
            $tanggalmulai = @$_GET["tanggalmulai"];
            $tanggalakhir = @$_GET["tanggalmulai"];
          }
          if (isset($_GET["tanggalakhir"])) {
            $tanggalakhir = @$_GET["tanggalakhir"];
          }
          if ($tanggalmulai){
            $sql .= " WHERE tgl BETWEEN '$tanggalmulai' AND '$tanggalakhir' ";
          }
?>

<body style="display: grid; gap: 1rem; padding-top: 6rem">

<?php
  include "./layouts/navbar.php";
?>
<script>
  function handletanggalmulai(data){
    const tanggalmulai = data.target.value
    const query = new URLSearchParams(window.location.search)
    query.set("tanggalmulai",tanggalmulai)
    window.location.search = query
  }
  function handletanggalakhir(data){
    const tanggalakhir = data.target.value
    const query = new URLSearchParams(window.location.search)
    query.set("tanggalakhir",tanggalakhir)
    window.location.search = query
  }
  function resetfiltertanggal(){
    window.location.search = ""

  }
  
</script>
<div>
<div>
  <label >Filter Tanggal : </label>
  <input type="date" name="tanggalmulai" id="tanggalmulai" onchange="handletanggalmulai(event)" 
  value= "<?php echo $tanggalmulai ?>">
  <label >--</label>
  <input type="date" name="tanggalakhir" id="tanggalakhir" onchange="handletanggalakhir(event)" 
  value= "<?php echo $tanggalakhir ?>">
  <button onclick="resetfiltertanggal()" class="btn btn-secondary">
     Reset Filter Tanggal
  </button>
</div>
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
          $tampil = mysqli_query($koneksi,$sql);
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