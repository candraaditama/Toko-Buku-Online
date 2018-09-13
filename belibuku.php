<?php
include('db_connection.php');
$idbuku=$_GET['idbuku'];
$querybuku=mysql_query("SELECT * FROM buku where idbuku='".$idbuku."'");
$databuku=mysql_fetch_array($querybuku);
?>
<p><b>BELI BUKU</b></p>
<form method='post' action='index.php?target=terimabeli&idbuku=<?php echo $idbuku; ?>'>
<pre>
Judul Buku 			:<?php echo $databuku['judul']; ?></br>
Harga Buku 			:<?php echo $databuku['harga']; ?></br>
Jumlah yang dibeli 		:<input type='text' name='jumlah' size='3'> </br>
</pre>
<br>
<table>
<tr>
	<td>	
	<input type='Submit' class="btn btn-primary" value='Tambahkan'>&nbsp&nbsp
	</td>	
	</form>
	<form method='post' action='index.php?target=katalogbuku'>
	<td><input type='Submit' class="btn btn-warning" value='Batal'></td>
</tr>
</table>

