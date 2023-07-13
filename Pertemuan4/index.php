<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
   <?php 
    $nama = "Khairunnisa";

    function bulan($id){

    
        $bulan = $id;

    if ($bulan == 1) {
        $nama_bulan = "januari" ;
    }elseif ($bulan = 2) {
        $nama_bulan = "februari";
    }elseif ($bulan = 3) {
        $nama_bulan = "maret";
    }elseif ($bulan = 4) {
        $nama_bulan = "april";
    }elseif ($bulan = 5) {
        $nama_bulan = "mei";
    }elseif ($bulan = 6) {
        $nama_bulan = "juni";
    }elseif ($bulan = 7) {
        $nama_bulan = "juli";
    }elseif ($bulan = 8) {
        $nama_bulan = "agustus";
    }elseif ($bulan = 9) {
        $nama_bulan = "september";
    }elseif ($bulan = 10) {
        $nama_bulan = "oktober";
    }elseif ($bulan = 11) {
        $nama_bulan = "november";
    }elseif ($bulan = 12) {
        $nama_bulan = "desember";

    }
    else {
        $nama_bulan = "nama bulan tidak ada" ;
        
    }
    return $nama_bulan;

 }
    ?>
    <h1> Input Data</h1>
    <form action=""method="post">

     <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
</tr>
<tr>
    <td>Bulan (angka)</td>
    <td>:</td>
    <td><input type="number" name="bulan"></td>

</tr>
<tr>
    <td colspan="3">
        <button style="width: 100%" name="Cari">Cari</button>
    </td>
</tr>
</table>
</form>

</body>
</html>