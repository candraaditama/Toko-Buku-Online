<?php
//include('cek.php');
?>
<h3>DETAIL PEMBELIAN</h3>
<?php

$querypembeli=mysql_query("SELECT * FROM pembelian where idbeli='".$idbeli."'");
$datapembeli=mysql_fetch_array($querypembeli);
echo "<pre class='pre-scrollable'>";
echo "Nama Pembeli 		:".$datapembeli['namapembeli']." </br>";
echo "Tanggal Pembelian 	:".$datapembeli['tanggal']." </br>";
echo "</pre>";

$querypembelian = mysql_query("SELECT * FROM pembelian, detailpembelian, buku where 
pembelian.idbeli=detailpembelian.idbeli and 
detailpembelian.idbuku=buku.idbuku and pembelian.idbeli='".$idbeli."'");

echo "<table border='1' class='table table-striped'>
<tr>
<th>No</th><th>Judul</th>
<th>Harga</th>
<th>Jumlah</th>
<th>Total</th>
</tr>";

$no=0;
$total=0;
while($datapembelian=mysql_fetch_array($querypembelian)){
$no++;
echo "
<tr>
<td>$no</td>
<td>".$datapembelian['judul']."</td>
<td>".$datapembelian['harga']."</td>
<td>".$datapembelian['jumlah']."</td>
<td>".$datapembelian['harga'] * $datapembelian['jumlah']."</td>
</tr>";
$total = $total+($datapembelian['harga'] * $datapembelian['jumlah']);
}

echo "
<tr>
<th colspan='4'>Total Pembelian</th>
<th>$total</th>
</tr>";
echo "</table>";
?>