<?php
  $title = "DATA LAPORAN";
  include "./layouts/header.php";
?>
<body style="display: grid; gap: 1rem; padding-top: 6rem">


<?php
  include "./layouts/navbar.php";
  $status = @$_GET["status"];
?>
<script>
  function handleselect(){
    const statusSelect = document.getElementById("status")
    const query = new URLSearchParams(window.location.search)
    query.set("status",statusSelect.value)
    window.location.search = query
  }
</script>
</style>
  <div>
  <div>
  <label>Status : </label>
  <select name="status" id="status" style="width: 200px; padding: 5px" >
    <option value="">Semua</option>
    <option value="Selesai">Keterangan Selesai</option>
    <option value="Proses">Keterangan Proses</option>
    <option value="Belum">Keterangan Belum</option>
  </select>
    <button class="btn btn-secondary" onclick="handleselect()" >Filter</button>
  </div>
<table class="table table-dark table-striped-columns"  align="right" bgcolor="gray">
  <thead bgcolor="gray" align="center">
      <tr>
          <th>Nomor Laporan</th>
          <th>NIP</th>
          <th>NAMA PEGAWAI</th>
          <th>NOMOR TELEPON</th>
          <th>LAPORAN KERJA</th>
          <th>KETERANGAN</th>
          <th colspan="2">AKSI</th>
      </tr>
  </thead>
  <tbody bgcolor="gray" style="text-align: center; width:80%; color:white;">
      <?php
      include "koneksi.php";
      $sql = "SELECT lap_keg.Id_lap, data_karyawan.NIP, data_karyawan.nama, 
      data_karyawan.hp, lap_keg.laporan, lap_keg.ket FROM lap_keg INNER JOIN data_karyawan 
      ON lap_keg.NIP = data_karyawan.NIP";
       if(isset($_GET['status'])){
        $sql .= " WHERE ket LIKE '%$status%'";

      }
      
      $tampil = mysqli_query($koneksi,$sql );
      while ($row = mysqli_fetch_array($tampil)) {
          echo "<tr>
          <td>" . $row[0] . "</td>
          <td>" . $row[1] . "</td> 
          <td>" . $row[2] . "</td> 
          <td>" . $row[3] . "</td>
          <td>" . $row[4] . "</td>
          <td>" . $row[5] . "</td>
          <td bgcolor='gray'>
          <a href='editLaporan.php?Id_lap=" . $row[0] . "' id='butViewEdit'>Ubah</a>
          <a href='procDeletelaporan.php?Id_lap=" . $row[0] . "' id='butViewDelete'>Hapus</a>
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