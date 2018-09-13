<?php
include('db_connection.php');
$idbuku=$_GET['idbuku'];
$jumlah=$_POST['jumlah'];

$querybuku=mysql_query("SELECT * FROM buku where idbuku='".$idbuku."'");
$databuku=mysql_fetch_array($querybuku);
if($_SESSION['beli']=='')
{$hasil=mysql_query("INSERT INTO temppembelian (tanggal, namapembeli)  
VALUES('2014-02-14','paijo')"); 
$querybeli=mysql_query("SELECT * FROM temppembelian order by idbeli desc");
$databeli=mysql_fetch_array($querybeli);
$_SESSION['beli']=$databeli['idbeli'];}

$hasil=mysql_query("INSERT INTO tempdetailpembelian (idbeli, idbuku,jumlah)   
VALUES('".$_SESSION['beli']."','".$databuku['idbuku']."','$jumlah')"); 

?>
<h3>REKAP PEMBELIAN</h3>
<?php
include('db_connection.php');
$querypembelian=mysql_query("SELECT * FROM temppembelian, tempdetailpembelian, buku where 
temppembelian.idbeli=tempdetailpembelian.idbeli and 
tempdetailpembelian.idbuku=buku.idbuku
and temppembelian.idbeli='".$_SESSION['beli']."'");
echo"<table border='0' class='table table-striped'>
<tr>
<th>No</th><th>judul</th>
<th>harga</th>
<th>jumlah</th>
<th>total</th>
</tr>";

$no=0;
$total=0;
while($datapembelian=mysql_fetch_array($querypembelian)){
$no++;
echo"
<tr>
<td>$no</td>
<td>".$datapembelian['judul']."</td>
<td>".$datapembelian['harga']."</td>
<td>".$datapembelian['jumlah']."</td>
<td>".$datapembelian['harga']*$datapembelian['jumlah']."</td>
</tr>";
$total=$total+($datapembelian['harga']*$datapembelian['jumlah']);
}
echo"
<tr>
<th colspan='4'>Total</th>
<th>$total</th>
</tr>";
echo"</table>";
?>
<table></br></br>
<tr>
	<form  action='index.php?target=katalogbuku' method='post'>
		<td>		
		<input name='tombol' class="btn btn-primary" type='submit' value='Belanja lagi'>&nbsp&nbsp
		</td>
	</form>
	<form  action='index.php?target=katalogbuku' method='post'>
		<td>
		<input name='tombol' class="btn btn-danger" type='submit' value='Batal'>&nbsp&nbsp
		</td>
	</form>
	<form action='index.php?target=inputpembeli' method='post'>
		<td>
		<input name='tombol' class="btn btn-success" type='submit' value='Selesai belanja'>
		</td>
	</form>
</tr>
</table>