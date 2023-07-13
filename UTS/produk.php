<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu produk</title>
</head>
<body>
<ul>
   <li> <a href="index.php">Welcome</a>
</li>
    <li> <a href="produk.php">Menu Produk</a>
</li>
    <li>
        <a href="pembelian.php">Menu Pembelian</a>
    </li>
   </ul>
   
   <?php 
   $MenuProduk = array(
    array ("Foundation","MakeUp","200000"),
    array ("Kaftan","Pakaian","100000"),
    array ("Brush","Tools","50000")
   );

   $Jumlah_Produk = count ($MenuProduk);
   ?>

    <table border = "style" style= "border-collapse: collapse">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Harga</th>
        </tr>
        <?php 
        for ($i=0; $i <$Jumlah_Produk ; $i++) { 
        $Jumlah_Isi_Produk = count ($MenuProduk[$i]);
        ?>

        <tr>
            <td><?php echo $i+1; ?></td>
            <?php for ($x=0; $x <$Jumlah_Isi_Produk; $x++) { ?>
            <td><?php echo $MenuProduk[$i][$x]; ?></td>
            <?php } ?>
        
        </tr>
        <?php } ?>
    </table>
</body>
</html>