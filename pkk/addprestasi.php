<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

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

if(isset($_POST['add']))
{
    $NO = $_POST['NO'];
    $NAMA=$_POST['NAMA'];
    $NIM=$_POST['NIM'];
    $ANGKATAN=$_POST['ANGKATAN'];
    $SERTIF=$_POST['SERTIFIKAT_KOMPETENSI_LULUSAN'];
    $PENYELENGGARA=$_POST['PENYELENGGARA'];
    $TANGGAL=$_POST['TANGGAL'];
    $PROGRAM=$_POST['PROGRAM'];
    $KATEGORI=$_POST['KATEGORI'];
    $LINK=$_POST['LINK'];
    $SURAT=$_POST['SURAT'];

    $result = mysqli_query($conn, "insert sertifikat_prestasi_mahasiswa_tif_ver_30012023_rec values ('$NO','$NAMA','$NIM','$ANGKATAN','$SERTIF','$PENYELENGGARA', '$TANGGAL', '$PROGRAM', '$KATEGORI', '$LINK', '$SURAT');");
    header("Location: prestasi.php");
}
?>

<html>
<head>
    <title>Tambah Prestasi</title>
</head>
<body>
    <br/><br/>
    <form name="update_prestasi" method="post" action="addprestasi.php">
    <table border="0">
        <tr>
            <td>NO</td>
            <td><input type="text" class="form-control" name="NO" ></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" class="form-control" name="NAMA" ></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td><input type="text" class="form-control" name="NIM" ></td>
        </tr>
        <tr>
            <td>ANGKATAN</td>
            <td><input type="text" class="form-control" name="ANGKATAN" ></td>
        </tr>
        <tr>
            <td>SERTIF</td>
            <td><input type="text" class="form-control" name="SERTIF" ></td>
        </tr>
        <tr>
            <td>PENYELENGGARA</td>
            <td><input type="text" class="form-control" name="PENYELENGGARA" ></td>
        </tr>
        <tr>
            <td>TANGGAL</td>
            <td><input type="text" class="form-control" name="TANGGAL" ></td>
        </tr>
        <tr>
            <td>PROGRAM</td>
            <td><input type="text" class="form-control" name="PROGRAM" ></td>
        </tr>
        <tr>
            <td>KATEGORI</td>
            <td><input type="text" class="form-control" name="KATEGORI" ></td>
        </tr>
        <tr>
            <td>LINK</td>
            <td><input type="text" class="form-control" name="LINK" ></td>
        </tr>
        <tr>
            <td>SURAT</td>
            <td><input type="text" class="form-control" name="SURAT" ></td>
        </tr>
        <tr>
            <td>
            <td><input type="submit" class="btn btn-primary" name="add" value="Add"></td>
        </tr>
    </table>
    </form>
</body>
</html>