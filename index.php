<?php
  $title = "BERANDA";
  include "./layouts/header.php";
  $sql = "SELECT data_karyawan.nip, data_karyawan.nama, tb_absen.absen,
          tb_absen.Ket,tb_absen.tgl, data_karyawan.alamat, data_karyawan.hp, lap_keg.laporan, lap_keg.ket
          FROM data_karyawan INNER JOIN tb_absen ON data_karyawan.NIP = tb_absen.NIP 
                              INNER JOIN lap_keg ON data_karyawan.NIP = lap_keg.NIP ";
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
            $sql .= "WHERE tb_absen.tgl BETWEEN '$tanggalmulai' AND '$tanggalakhir' ";
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
  <label >---</label>
  <input type="date" name="tanggalakhir" id="tanggalakhir" onchange="handletanggalakhir(event)" 
  value= "<?php echo $tanggalakhir ?>">
  <button onclick="resetfiltertanggal()" class="btn btn-secondary">
     Reset Filter Tanggal
  </button>
</div>
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
  <tbody bgcolor="gray" style="text-align: center; width:80%; color:white;">
  <?php
        include "koneksi.php";
        
        $tampil = mysqli_query($koneksi, $sql);         
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
<?php
  include "./layouts/footer.php";
?>