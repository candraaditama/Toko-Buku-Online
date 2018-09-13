<?php
include('../db_connection.php');
?>
<h3>REKAP PENJUALAN</h3>
<?php

$querypembelian = mysql_query("SELECT *, sum(detailpembelian.jumlah*buku.harga) as total FROM 
pembelian, detailpembelian, buku where 
pembelian.idbeli=detailpembelian.idbeli and detailpembelian.idbuku=buku.idbuku 
group by pembelian.idbeli");
echo "<table border='0' class='table table-striped'>
<tr>
<th>No</th>
<th>Nama Pembeli</th>
<th>Tanggal</th>
<th>Total</th>
<th>detail</th>
</tr>";

$no=0;
$total=0;
while($datapembelian=mysql_fetch_array($querypembelian)){
$no++;
echo "
<tr>
<td>$no</td>
<td>".$datapembelian['namapembeli']."</td>
<td>".$datapembelian['tanggal']."</td>
<td>".$datapembelian['total']."</td>
<td>".$datapembelian['idbeli']."</td>
</tr>";
$total=$total+($datapembelian['total']);
}
echo "
<tr>
<th colspan='3'>Total</th>
<th>$total</th>
</tr>";
echo"</table>";
?>