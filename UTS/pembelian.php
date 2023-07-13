<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Pembelian</title>
</head>
<body>
    <h1> Menu Pembelian</h1>
    <ul>
   <li> <a href="index.php">Welcome</a>
</li>
    <li> <a href="produk.php">Menu Produk</a>
</li>
    <li>
        <a href="pembelian.php">Menu Pembelian</a>
    </li>
   </ul>

   <form action="" method="post">
	<div class="row">
		<label>Nama</label>
		<input type="text" name="nama" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>"/>
	</div>
	<div class="row">
		<label>HARGA</label>
		<input type="text" name="harga" value="<?=isset($_POST['harga']) ? $_POST['harga'] : ''?>"/>
	</div>
	<div class="row">
		<label>Qty</label>
		<input type="text" name="qty" value="<?=isset($_POST['qty']) ? $_POST['qty'] : ''?>"/>
	</div>
	<div class="row">
		<label>Jumlah Bayar</label>
		<input type="text" name="bayar" value="<?=isset($_POST['bayar']) ? $_POST['bayar'] : ''?>"/>
	</div>
	<div class="row">
		<input type="submit" name="submit" value="Bayar"/>
	</div>
	</form>
<?php
if (isset($_POST['submit'])) {
	echo '<h1>Hasil Input</h1>';
	echo '<ul>';
	echo '<li>Nama: ' . $_POST['nama'] . '</li>';
	echo '<li>harga: ' . $_POST['harga'] . '</li>';
    echo '<li>qty: ' . $_POST['qty'] . '</li>';
    echo '<li>bayar: ' . $_POST['bayar'] . '</li>';
 }
?>
<button><a href="index.php">Kembali</a></button>
</body>
</html>