<?php
include('../db_connection.php');
$querybuku = mysql_query("SELECT * FROM buku");

?>
<?php

echo "<h3>DAFTAR BUKU</h3>";
echo "<table border='0' class='table table-striped'>
<tr>
<th>No</th><th>id buku</th><th>judul</th>
<th>harga</th><th>id kategori</th>
<th>edit</th><th>hapus</th>
</tr>";

$no=0;
while($databuku=mysql_fetch_array($querybuku)){
$no++;
echo "
<tr>
<td>$no</td>
<td>".$databuku['idbuku']."</td>
<td>".$databuku['judul']."</td>
<td>".$databuku['harga']."</td>
<td>".$databuku['idkategori']."</td>
<td><a href='index.php?target=editbuku&idbuku=".$databuku['idbuku']."'>
edit-buku-$no</a></td>
<td><a href='index.php?target=konfirmhapusbuku&idbuku=".$databuku['idbuku']."'>
hapus-buku-$no</a></td>
</tr>";
}
echo "</table>";
?>