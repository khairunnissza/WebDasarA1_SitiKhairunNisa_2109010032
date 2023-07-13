<?php 
require "controllers/function.php";
$id_buku = $_GET["ID"];
if (buku_satu_jumlah($id_buku) < 1) {
    echo "
    <script> 
    alert('ID Buku Tidak Tersedia!');
    location='buku.php';
    </script>
    ";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Website Saya</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h1>Selamat Datang di Halaman Edit</h1>
        <hr>
        <ul>
            <a href="index.php">
                <li>Home</li>
            </a>
            <a href="pinjam.php">
                <li>Pinjam Buku</li>
            </a>
            <a href="buku.php">
                <li>Data Buku</li>
            </a>
        </ul>
        <hr>
        <form action= "" method= "POST">
        <table>
            <tr>
                <th>Judul Buku</th>
                <td>:</td>
                <td>
                    <input name="Judul_Buku" type= "text" placeholder="Input Judul Buku" value="<?= 
                    buku_satu($id_buku,"Judul_Buku"); ?>" >
                </td>
            </tr>
            <tr>
                <th>Tahun Terbit</th>
                <td>:</td>
                <td>
                    <input name="Tahun_Terbit" type="number" placeholder="Input Tahun Terbit"
                    value="<?= buku_satu($id_buku,"Tahun_Terbit"); ?>">
                </td>
            </tr>
            <tr>
                <th>Penulis</th>
                <td>:</td>
                <td>
                    <input name="Penulis" type="text" placeholder="Input Penulis" value="<?= buku_satu($id_buku,"Penulis"); ?>">
                </td>
            <tr>
                <th>Penerbit</th>
                <td>:</td>
                <td>
                    <input name="Penerbit" type="text" placeholder="Input Penerbit" value ="<?= buku_satu($id_buku,"Penerbit"); ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <button type="submit" name= "edit_buku" style="widht: 22%";>Edit</button>
                </td>
            </tr>
        </table>
        </form>

    <?php
    $tanggal = date("Y-m-d H:i:s");
    if (isset($_POST["edit_buku"])) {
        $Judul_Buku = $_POST["Judul_Buku"];
        $Tahun_Terbit = $_POST["Tahun_Terbit"];
        $Penulis = $_POST["Penulis"];
        $Penerbit = $_POST["Penerbit"];
        if ($Judul_Buku == "" || $Tahun_Terbit == "" || $Penerbit == "" || $Penulis == ""){
            echo "
            <script> 
            alert('Data masih ada yang kosong');
            </script>
            ";
        }else {
            $edit = q("UPDATE buku SET
            Judul_Buku = '$Judul_Buku',
            Tahun_Terbit ='$Tahun_Terbit',
            Penulis = '$Penulis',
            Penerbit = '$Penerbit',
            edit = '$tanggal'
            WHERE
            ID = '$id_buku'");
            if ($edit) {
                echo "<script>
                alert('Data Berhasil Diedit!');
                location ='buku.php' ;
                </script>";
            }else{
                echo "<script>
                alert('Data Gagal Diedit!');
                </script>";
            }
        }
    }
    ?>
</body>
</html>