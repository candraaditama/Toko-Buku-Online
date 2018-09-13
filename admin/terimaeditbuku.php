<?php
//include('cek.php');
?>
<?php
$idbuku=$_POST['idbuku'];
$judul=$_POST['judul'];
$harga=$_POST['harga'];
$idkategori=$_POST['idkategori'];

echo "<pre>";
echo "id buku 	:$idbuku </br>";
echo "judul buku 	:$judul </br>";
echo "harga buku 	:$harga </br>";
echo "kategori buku 	:$idkategori </br>";
echo "</pre>";

include('db_connection.php');
  

if($hasil!=0){
	echo "Data berhasil diedit";
} else {
	echo "Data gagal diedit";
} 
?>