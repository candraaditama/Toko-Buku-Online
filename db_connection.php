<?php
$hostmysql = "localhost";
$username = "root";
$password = "";
$database = "toko_ayani";

$conn = mysql_connect("$hostmysql","$username","$password");
if (!$conn) die ("Gagal Melakukan Koneksi");
mysql_select_db($database,$conn) or die ("Database Tidak Diketemukan di Server"); 
?>
