<?php
  $title = "DAFTAR HADIR";
  include "./layouts/header.php";
?>
<body style="display: grid; gap: 1rem; padding-top: 6rem">
<?php
  include "./layouts/navbar.php";
?>
  <?php 

  include "koneksi.php";

  $nip = @$_GET['NIP'] ?? '';

  $data = mysqli_fetch_assoc(mysqli_query($koneksi, "select * from data_karyawan where NIP = '$nip'"));

  ?>

    <form action="procabsen.php" method="post">
    <table>
    
      <tbody>
        <tr>
            <td>NIP</td>
            <td><select name="NIP" onchange="changeNIP(this)">
                <option>--PILIH--</option>
                <?php
                
                $jurusan = "SELECT * FROM data_karyawan";
                $sql_jurusan = mysqli_query($koneksi, $jurusan);
                while ($data_jurusan = mysqli_fetch_array($sql_jurusan)) {
                    $i++;
                ?>
                    <option value="<?php echo $data_jurusan['NIP']; ?>"  <?= $nip == $data_jurusan['NIP'] ? 'selected' : '' ?>>
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
          <td><input type="text" name="nama" value="<?php echo @$data['nama'] ?? '' ?>"></td>
        </tr>
        <tr>
          <td>Nomor Telepon</td>
          <td><input type="text" name="hp" value="<?php echo @$data['hp'] ?? '' ?>"></td>
        </tr>
        <tr>
          <td>Kehadiran</td>
            <td><select name="absen" >
              <option value="Hadir">Hadir</option>
              <option value="Izin">Izin</option>
              <option value="Sakit">Sakit</option>
            </select>
            </td>
        </tr>
        <tr>
          <td>Tanggal</td>
          <td><input type="text" name="tgl" id="tanggal"></td>
        </tr>
        <tr>
          <td>Keterangan</td>
          <td><input type="text" name="Ket"></td>
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

  <script>
    function changeNIP(ev) {
      location.href = '?NIP=' + ev.value
    }
  $(function() {
    $( "#tanggal" ).datepicker({
      dateformat : "yy-mm-dd",
      dateMonth : true,
      dateYear : true   
  }).datepicker('setDate','0');
  } );
  </script>
  <?php
  include "./layouts/footer.php";
  ?>