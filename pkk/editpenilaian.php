<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<?php

include 'koneksi.php';
include 'header-admin.html';
include 'session-admin.php';

if (isset($_POST['update'])) {
    $Kriteria = $_POST['Kriteria'];
    $Jenis = $_POST['Jenis'];
    $No_Urut = $_POST['No_Urut'];
    $No_Butir = $_POST['No_Butir'];
    $Bobot_Dari_400 = $_POST['Bobot_Dari_400'];
    $Elemen_Penilaian_LAM = $_POST['Elemen_Penilaian_LAM'];
    $Deskriptor = $_POST['Deskriptor'];
    $Ket1 = $_POST['Ket1'];
    $Ket2 = $_POST['Ket2'];
    $Ket3 = $_POST['Ket3'];
    $Ket4 = $_POST['Ket4'];;

    $result = mysqli_query($conn, "UPDATE matriks_penilaian_kinerja_lam_infokom1 SET Kriteria='$Kriteria', Jenis='$Jenis', No_Urut='$No_Urut', No_Butir='$No_Butir', Bobot_Dari_400='$Bobot_Dari_400', Elemen_Penilaian_LAM='$Elemen_Penilaian_LAM', Deskriptor='$Deskriptor', Ket1='$Ket1', Ket2='$Ket2', Ket3='$Ket3', Ket4='$Ket4' WHERE No_Urut=$No_Urut");
    header("location:penilaian-admin.php");
}
?>

<?php

$No_Urut = $_GET['No_Urut'];
$result = mysqli_query($conn, "SELECT * FROM matriks_penilaian_kinerja_lam_infokom1 WHERE No_Urut=$No_Urut");
while ($row = mysqli_fetch_array($result)) {
    $Kriteria = $row['Kriteria'];
    $Jenis = $row['Jenis'];
    $No_Urut = $row['No_Urut'];
    $No_Butir = $row['No_Butir'];
    $Bobot_Dari_400 = $row['Bobot_Dari_400'];
    $Elemen_Penilaian_LAM = $row['Elemen_Penilaian_LAM'];
    $Deskriptor = $row['Deskriptor'];
    $Ket1 = $row['Ket1'];
    $Ket2 = $row['Ket2'];
    $Ket3 = $row['Ket3'];
    $Ket4 = $row['Ket4'];;
}
?>
<html>

<head>
    <title>Edit Data Penilaian</title>
</head>

<body>
    <br />
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-md-6 col-lg-6 mb-5">
                <form name="row" method="post" action="editpenilaian.php">
                    <table border="0">
                        <tr>
                            <td>Kriteria</td>
                            <td><input type="text" class="form-control" name="Kriteria" value="<?php echo $Kriteria; ?>"></td>
                        </tr>
                        <tr>
                            <td>Jenis</td>
                            <td><input type="text" class="form-control" name="Jenis" value="<?php echo $Jenis; ?>"></td>
                        </tr>
                        <tr>
                            <td>No_Urut</td>
                            <td><input type="text" class="form-control" name="No_Urut" value="<?php echo $No_Urut; ?>"></td>
                        </tr>
                    </table>
            </div>
            <div class="col-md-6 col-lg-6 mb-5">
                <form name="row" method="post" action="editpenilaian.php">
                    <table border="0">
                        <tr>
                            <td>No_Butir</td>
                            <td><input type="text" class="form-control" name="No_Butir" value="<?php echo $No_Butir; ?>"></td>
                        </tr>
                        <tr>
                            <td>Bobot_Dari_400</td>
                            <td><input type="text" class="form-control" name="Bobot_Dari_400" value="<?php echo $Bobot_Dari_400; ?>"></td>
                        </tr>
                        <tr>
                            <td>Elemen_Penilaian_LAM</td>
                            <td><input type="text" class="form-control" name="Elemen_Penilaian_LAM" value="<?php echo $Elemen_Penilaian_LAM; ?>"></td>
                        </tr>
                    </table>
            </div>
            <form name="row" method="post" action="editpenilaian.php">
                <table border="0">
                    <tr>
                        <td>Deskriptor</td>
                        <td><input type="text" class="form-control" name="Deskriptor" value="<?php echo $Deskriptor; ?>"></td>
                    </tr>
                    <tr>
                        <td>Ket1</td>
                        <td><input type="text" class="form-control" name="Ket1" value="<?php echo $Ket1; ?>"></td>
                    </tr>
                    <tr>
                        <td>Ket2</td>
                        <td><input type="text" class="form-control" name="Ket2" value="<?php echo $Ket2; ?>"></td>
                    </tr>
                    <tr>
                        <td>Ket3</td>
                        <td><input type="text" class="form-control" name="Ket3" value="<?php echo $Ket3; ?>"></td>
                    </tr>
                    <tr>
                        <td>Ket4</td>
                        <td><input type="text" class="form-control" name="Ket4" value="<?php echo $Ket4; ?>"></td>
                    </tr>
                    <tr>
                        <td><input type="hidden" name="No_Urut" value=<?php echo $_GET['No_Urut']; ?>></td>
                        <td><input type="submit" class="btn btn-primary" name="update" value="Update">
                            <a class='btn text-white' href="penilaian-admin.php" style="float: right; background-color :#f3aa60">Kembali</a><br /><br />
                        </td>
                    </tr>
                </table>
            </form>

        </div>
    </div>
</body>
<?php
include 'footer.html';
?>

</html>