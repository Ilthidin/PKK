<?php
include "session-admin.php";

?>

<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "pkk";

$conn = new mysqli($server, $user, $pass, $db);
if ($conn->connect_error) {
  die("Connection failed:" . $conn->connect_error);
} else {
}

$sql = "SELECT * FROM sertifikat_prestasi_mahasiswa_tif_ver_30012023_rec1";
$result = $conn->query($sql);
?>

<?php include "header-admin.html" ?>

<div id="judul" style="padding-top: 1rem; padding-bottom: 1rem;">
  <h2>Sertifikat Prestasi Mahasiswa</h2>
</div>

<a class='btn text-white' href="addprestasi.php" style="float: right; background-color :#468B97">Tambahkan Data Baru</a><br /><br />

<table>
  <tr>
    <th style="background-color: #1d5b79; color:whitesmoke">NO</th>
    <th style="background-color: #1d5b79; color:whitesmoke">Nama</th>
    <th style="background-color: #1d5b79; color:whitesmoke">NIM</th>
    <th style="background-color: #1d5b79; color:whitesmoke">Angkatan</th>
    <th style="background-color: #1d5b79; color:whitesmoke">Sertifikat Kompetensi Lulusan</th>
    <th style="background-color: #1d5b79; color:whitesmoke">Penyelenggara</th>
    <th style="background-color: #1d5b79; color:whitesmoke">Tanggal</th>
    <th style="background-color: #1d5b79; color:whitesmoke">Program</th>
    <th style="background-color: #1d5b79; color:whitesmoke">Kategori</th>
    <th style="background-color: #1d5b79; color:whitesmoke">Link</th>
    <th style="background-color: #1d5b79; color:whitesmoke">Surat Tugas</th>
    <th style="background-color: #1d5b79; color:whitesmoke">Aksi</th>
  </tr>
  <?php
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "<tr>
                <td>" . $row["NO"] . "</td>
                <td>" . $row["NAMA"] . "</td>
                <td>" . $row["NIM"] . "</td>
                <td>" . $row["ANGKATAN"] . "</td>
                <td>" . $row["SERTIFIKAT_KOMPETENSI_LULUSAN"] . "</td>
                <td>" . $row["PENYELENGGARA"] . "</td>
                <td>" . $row["TANGGAL"] . "</td>
                <td>" . $row["PROGRAM"] . "</td>
                <td>" . $row["KATEGORI"] . "</td>
                <td>" . "<a href=" . $row["LINK"] . " target='_blank'><img src='link.png'</a>" . "</td>
                <td>" . $row["SURAT_TUGAS"] . "</td>
                <td><a class='btn btn-warning' href='editprestasi.php?NO=$row[NO]'>Edit</a>
                    <a class='btn btn-danger' href='deleteprestasi.php?NO=$row[NO]'>Delete</a></td>
          </tr>";
    }
  } else {
    echo "Data tidak tersedia";
  }
  $conn->close();
  ?>
</table>
<?php include "footer.html" ?>