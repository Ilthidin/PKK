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
    $Kriteria = $_POST['Kriteria'];
    $Jenis=$_POST['Jenis'];
    $No_Urut=$_POST['No_Urut'];
    $No_Butir=$_POST['No_Butir'];
    $Bobot_Dari_400=$_POST['Bobot_Dari_400'];
    $Elemen_Penilaian_LAM=$_POST['Elemen_Penilaian_LAM'];
    $Deskriptor=$_POST['Deskriptor'];
    $Ket1=$_POST['Ket1'];
    $Ket2=$_POST['Ket2'];
    $Ket3=$_POST['Ket3'];
    $Ket4=$_POST['Ket4'];

    $result = mysqli_query($conn, "insert matriks_penilaian_kinerja_lam_infokom  values ('$Kriteria','$Jenis','$No_Urut','$No_Butir','$Bobot_Dari_400','$Elemen_Penilaian_LAM', '$Deskriptor', '$Ket1', '$Ket2', '$Ket3', '$Ket4');");
    header("Location: penilaian.php");
}
?>

<html>
<head>
    <title>Tambah Penilaian</title>
</head>
<body>
    <br/><br/>
    <form name="update_penilaian" method="post" action="addpenilaian.php">
    <table border="0">
        <tr>
            <td>Kriteria</td>
            <td><input type="text" class="form-control" name="Kriteria" ></td>
        </tr>
        <tr>
            <td>Jenis</td>
            <td><input type="text" class="form-control" name="Jenis" ></td>
        </tr>
        <tr>
            <td>No_Urut</td>
            <td><input type="text" class="form-control" name="No_Urut" ></td>
        </tr>
        <tr>
            <td>No_Butir</td>
            <td><input type="text" class="form-control" name="No_Butir" ></td>
        </tr>
        <tr>
            <td>Bobot_Dari_400</td>
            <td><input type="text" class="form-control" name="Bobot_Dari_400" ></td>
        </tr>
        <tr>
            <td>Elemen_Penilaian_LAM</td>
            <td><input type="text" class="form-control" name="Elemen_Penilaian_LAM" ></td>
        </tr>
        <tr>
            <td>Deskriptor</td>
            <td><input type="text" class="form-control" name="Deskriptor" ></td>
        </tr>
        <tr>
            <td>Ket1</td>
            <td><input type="text" class="form-control" name="Ket1 ></td>
        </tr>
        <tr>
            <td>Ket2</td>
            <td><input type="text" class="form-control" name="Ket2" ></td>
        </tr>
        <tr>
            <td>Ket3</td>
            <td><input type="text" class="form-control" name="LINK" ></td>
        </tr>
        <tr>
            <td>Ket4</td>
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