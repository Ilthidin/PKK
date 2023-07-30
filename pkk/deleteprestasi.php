<?php 
include 'session-admin.php';
include 'koneksi.php';

$NO = $_GET['NO'];
$result = mysqli_query($conn, "DELETE FROM sertifikat_prestasi_mahasiswa_tif_ver_30012023_rec1 WHERE NO=$NO");
header("location:prestasi-admin.php");
?>