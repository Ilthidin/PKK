<?php
include 'session-admin.php';
include 'koneksi.php';

$No_urut = $_GET['No_Urut'];
$result = mysqli_query($conn, "DELETE FROM matriks_penilaian_kinerja_lam_infokom1 WHERE No_urut=$No_urut");
header("location:penilaian-admin.php");
