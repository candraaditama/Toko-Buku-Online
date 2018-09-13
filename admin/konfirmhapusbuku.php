<?php
//include('cek.php');
?>
<?php
$idbuku=$_GET['idbuku'];
include('db_connection.php');

$databuku=mysql_fetch_array($querybuku);
?>
<p><b>HAPUS BUKU</b></p>
<form method='post' action='index.php?target=hapusbuku'>
<pre>
id buku 	:<?php  ?> </br>
judul buku 	:<?php  ?></br>
harga buku 	:<?php  ?></br>
kategori buku 	:<?php  ?></br>
<h4>ANDA YAKIN AKAN MENGHAPUS DATA INI ? </h4>
<input type='hidden' name='idbuku' value='<?php echo $idbuku; ?>' >
<table>
<tr>
<td><input type='submit' value='Ya' class="btn btn-success"></form> </td>
<form method='post' action='index.php?target=daftarbuku'>
<td><input type='submit'  value='Tidak' class="btn btn-primary"></form> </td>
</tr>
</table>

