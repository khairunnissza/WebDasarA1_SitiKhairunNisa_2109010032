<?php 
date_default_timezone_set("Asia/Jakarta");

function koneksi(){
  $server = "localhost";
  $username = "root";
  $password = "";
  $database ="web_dasar_a1_sitikhairunnisa_21090100322";
  return mysqli_connect(
    $server,
    $username,
    $password,
    $database
  );
}
function q($data)
{
  return mysqli_query(koneksi(),$data);
}

function buku()
{
  return q("SELECT * FROM buku");
}

function buku_satu ($id,$isi_buku)
{
  $x = mysqli_fetch_assoc(
    q ("SELECT * FROM buku WHERE ID = '$id'")
  );
  return $x[$isi_buku];
}

function buku_satu_jumlah($id)
{
  return mysqli_num_rows(q("SELECT * FROM buku WHERE ID = '$id'"));
}
?>
