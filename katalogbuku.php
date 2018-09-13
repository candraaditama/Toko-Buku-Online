<?php

include('db_connection.php');

$querybuku = mysql_query("SELECT * FROM buku");

echo "<table border='0' width='800' align='center' class='table table-striped'>
<tr>
	<th align='center'>No</th>
	<th align='center'>Judul</th>
	<th>Harga</th><th>Aksi</th>
</tr>";

$no=0;
while($databuku=mysql_fetch_array($querybuku)){
$no++;
echo "
<tr>
<td>$no</td>
<td><a href='index.php?target=belibuku&idbuku=".$databuku['idbuku']."'><img src='gambarbuku/".$databuku['gambar']."'width=110 height=160>
".$databuku['judul']."</a></td>
<td>".$databuku['harga']."
</td><td><a href='index.php?target=belibuku&idbuku=".$databuku['idbuku']."'>BELI</a></td>
</tr>";
}
echo"</table>";

$statusbeli = $_POST['tombol'];
if($statusbeli == 'Batal'){
$hasil = mysql_query("DELETE FROM tempdetailpembelian WHERE idbeli ='".$_SESSION['beli']."'");
$hasil = mysql_query("DELETE FROM temppembelian WHERE idbeli ='".$_SESSION['beli']."'");
unset($_SESSION['beli']);
}


?>