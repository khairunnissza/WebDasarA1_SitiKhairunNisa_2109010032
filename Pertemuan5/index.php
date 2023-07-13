<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hyperlink</title>
</head>
<body>
    <h1>Data Produk</h1>


    <ul>
        <li>
        <a href="index.php">Indexed Arrays</a>
        </li>
        <li>
            <a href="aa.php">Assosiactive Arrays</a>
        </li>
        <li>
        <a href="ma.php">Multimensional Arrays</a>
        </li>
    </ul>
    <?php
    $produk = array("Samsung","Acer","MSI");
    $jumlah_produk = count($produk);

    //var_dump($produk);

    ?>
    <table border="1" style="border-collapse:collapse">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
        </tr>
        <!-- menggunakan for pada array -->
        <?php
        for ($i=0; $i < $jumlah_produk ; $i++) { ?>
        <tr>
            <td><?= $i+1 ?></td>
            <td><?= $produk[$i];?></td>
        </tr>
            
       <?php } ?>
        
        <!-- Menampilkan data array secara manual dengan indexnya
        <tr>
            <td>1</td>
            <td><?= $produk[0]?></td>
        </tr> -->
    </table>
</body>
</html>