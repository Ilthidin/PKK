<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<?php

include 'koneksi.php';
include 'header-admin.html';
include 'session-admin.php';

if (isset($_POST['add'])) {
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

    $result = mysqli_query($conn, "insert into sertifikat_prestasi_mahasiswa_tif_ver_30012023_rec1 values ('$NO','$NAMA','$NIM','$ANGKATAN','$SERTIFIKAT_KOMPETENSI_LULUSAN','$PENYELENGGARA', '$TANGGAL', '$PROGRAM', '$KATEGORI', '$LINK', '$SURAT_TUGAS');");
    header("location:prestasi-admin.php");
}
?>

<html>

<head>
    <title>Tambah Prestasi</title>
</head>

<body>
    <br>
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-md-6 col-lg-6 mb-5">
                <form name="update_prestasi" method="post" action="addprestasi.php">
                    <table border="0">
                        <tr>
                            <td>NO</td>
                            <td><input type="text" class="form-control" name="NO"></td>
                        </tr>
                        <tr>
                            <td>NAMA</td>
                            <td><input type="text" class="form-control" name="NAMA"></td>
                        </tr>
                        <tr>
                            <td>NIM</td>
                            <td><input type="text" class="form-control" name="NIM"></td>
                        </tr>
                        <tr>
                            <td>ANGKATAN</td>
                            <td><input type="text" class="form-control" name="ANGKATAN"></td>
                        </tr>
                        <tr>
                            <td>SERTIF</td>
                            <td><input type="text" class="form-control" name="SERTIFIKAT_KOMPETENSI_LULUSAN"></td>
                        </tr>
                        <tr>
                            <td>PENYELENGGARA</td>
                            <td><input type="text" class="form-control" name="PENYELENGGARA"></td>
                        </tr>
                    </table>
            </div>
            <div class="col-md-6 col-lg-6 mb-5">
                <form name="update_prestasi" method="post" action="addprestasi.php">
                    <table border="0">
                        <tr>
                            <td>TANGGAL</td>
                            <td><input type="text" class="form-control" name="TANGGAL"></td>
                        </tr>
                        <tr>
                            <td>PROGRAM</td>
                            <td><input type="text" class="form-control" name="PROGRAM"></td>
                        </tr>
                        <tr>
                            <td>KATEGORI</td>
                            <td><input type="text" class="form-control" name="KATEGORI"></td>
                        </tr>
                        <tr>
                            <td>LINK</td>
                            <td><input type="text" class="form-control" name="LINK"></td>
                        </tr>
                        <tr>
                            <td>SURAT</td>
                            <td><input type="text" class="form-control" name="SURAT_TUGAS"></td>
                        </tr>
                        <tr>
                            <td>
                            <td><input type="submit" class="btn text-white" style="background-color :#468B97;" name="add" value="Add"></td>
                            <td><a class='btn text-white' href="prestasi-admin.php" style="float: right; background-color :#f3aa60">Kembali</a><br /><br /></td>
                        </tr>
            </div>
            </table>
            </form>
        </div>
    </div>
    </div>
</body>
<?php
include 'footer.html';
?>

</html>