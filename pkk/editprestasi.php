<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<?php

include 'koneksi.php';
include 'header-admin.html';
include 'session-admin.php';

if (isset($_POST['update'])) {
    $NO = $_POST['NO'];
    $NAMA = $_POST['NAMA'];
    $NIM = $_POST['NIM'];
    $ANGKATAN = $_POST['ANGKATAN'];
    $SERTIFIKAT_KOMPETENSI_LULUSAN = $_POST['SERTIFIKAT_KOMPETENSI_LULUSAN'];
    $PENYELENGGARA = $_POST['PENYELENGGARA'];
    $TANGGAL = $_POST['TANGGAL'];
    $PROGRAM = $_POST['PROGRAM'];
    $KATEGORI = $_POST['KATEGORI'];
    $LINK = $_POST['LINK'];
    $SURAT_TUGAS = $_POST['SURAT_TUGAS'];

    $result = mysqli_query($conn, "UPDATE sertifikat_prestasi_mahasiswa_tif_ver_30012023_rec1 SET NO='$NO', NAMA='$NAMA', NIM='$NIM', ANGKATAN='$ANGKATAN', SERTIFIKAT_KOMPETENSI_LULUSAN='$SERTIFIKAT_KOMPETENSI_LULUSAN', PENYELENGGARA='$PENYELENGGARA', TANGGAL='$TANGGAL', PROGRAM='$PROGRAM', KATEGORI='$KATEGORI', LINK='$LINK', SURAT_TUGAS='$SURAT_TUGAS' WHERE NO=$NO");
    header("location:prestasi-admin.php");
}
?>

<?php

$NO = $_GET['NO'];
$result = mysqli_query($conn, "SELECT * FROM sertifikat_prestasi_mahasiswa_tif_ver_30012023_rec1 WHERE NO=$NO");
while ($row = mysqli_fetch_array($result)) {
    $NO = $row['NO'];
    $NAMA = $row['NAMA'];
    $NIM = $row['NIM'];
    $ANGKATAN = $row['ANGKATAN'];
    $SERTIFIKAT_KOMPETENSI_LULUSAN = $row['SERTIFIKAT_KOMPETENSI_LULUSAN'];
    $PENYELENGGARA = $row['PENYELENGGARA'];
    $TANGGAL = $row['TANGGAL'];
    $PROGRAM = $row['PROGRAM'];
    $KATEGORI = $row['KATEGORI'];
    $LINK = $row['LINK'];
    $SURAT_TUGAS = $row['SURAT_TUGAS'];
}
?>
<html>

<head>
    <title>Edit Data Prestasi</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-md-6 col-lg-6 mb-5">
                <form name="row" method="post" action="editprestasi.php">
                    <table border="0">
                        <tr>
                            <td>NO</td>
                            <td><input type="text" class="form-control" name="NO" value="<?php echo $NO; ?>"></td>
                        </tr>
                        <tr>
                            <td>NAMA</td>
                            <td><input type="text" class="form-control" name="NAMA" value="<?php echo $NAMA; ?>"></td>
                        </tr>
                        <tr>
                            <td>NIM</td>
                            <td><input type="text" class="form-control" name="NIM" value="<?php echo $NIM; ?>"></td>
                        </tr>
                        <tr>
                            <td>ANGKATAN</td>
                            <td><input type="text" class="form-control" name="ANGKATAN" value="<?php echo $ANGKATAN; ?>"></td>
                        </tr>
                        <tr>
                            <td>SERTIF</td>
                            <td><input type="text" class="form-control" name="SERTIFIKAT_KOMPETENSI_LULUSAN" value="<?php echo $SERTIFIKAT_KOMPETENSI_LULUSAN; ?>"></td>
                        </tr>
                        <tr>
                            <td>PENYELENGGARA</td>
                            <td><input type="text" class="form-control" name="PENYELENGGARA" value="<?php echo $PENYELENGGARA; ?>"></td>
                        </tr>
                    </table>
            </div>
            <div class="col-md-6 col-lg-6 mb-5">
                <form name="update_prestasi" method="post" action="addprestasi.php">
                    <table border="0">
                        <tr>
                            <td>TANGGAL</td>
                            <td><input type="text" class="form-control" name="TANGGAL" value="<?php echo $TANGGAL; ?>"></td>
                        </tr>
                        <tr>
                            <td>PROGRAM</td>
                            <td><input type="text" class="form-control" name="PROGRAM" value="<?php echo $PROGRAM; ?>"></td>
                        </tr>
                        <tr>
                            <td>KATEGORI</td>
                            <td><input type="text" class="form-control" name="KATEGORI" value="<?php echo $KATEGORI; ?>"></td>
                        </tr>
                        <tr>
                            <td>LINK</td>
                            <td><input type="text" class="form-control" name="LINK" value="<?php echo $LINK; ?>"></td>
                        </tr>
                        <tr>
                            <td>SURAT</td>
                            <td><input type="text" class="form-control" name="SURAT_tugas" value="<?php echo $SURAT_TUGAS; ?>"></td>
                        </tr>
                        <tr>
                            <td><input type="hidden" name="NO" value=<?php echo $_GET['NO']; ?>></td>
                            <td><input type="submit" class="btn btn-primary" name="update" value="Update"></td>
                            <td><a class='btn text-white' href="prestasi-admin.php" style="float: right; background-color :#f3aa60">Kembali</a><br /><br /></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<?php

include 'footer.html';
?>