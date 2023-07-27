<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'pkk');

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//cek koneksi
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(isset($_POST['delete']))
{
$NO = $_GET['NO'];

$result = mysqli_query($conn, "DELETE FROM sertifikat_prestasi_mahasiswa_tif_ver_30012023_rec WHERE NO=$NO");

}
header("Location: prestasi.php");
?>