<?php
//include('cek.php');
?>
<?php

include('db_connection.php');
$querybuku=mysql_query("SELECT * FROM buku where idbuku='".$idbuku."'");
$databuku=mysql_fetch_array($querybuku);
?>
<p><b>EDIT BUKU</b></p>
<form method='post' action='index.php?target=terimaeditbuku'>
<pre>
Id Buku 	:<input type='text' name='idbuku' value='<?php echo $databuku['idbuku']; ?>' readonly>
Judul Buku 	:<input type='text' name='judul' value='<?php echo $databuku['judul']; ?>'>
Harga Buku 	:<input type='text' name='harga' value='<?php echo $databuku['harga']; ?>'>
Kategori Buku 	:<select name='idkategori'>
</pre>
<option value='K01'<?php if($databuku['idkategori']=='K01'){echo"selected";}?>>Cerita</option>
<option value='K02'<?php if($databuku['idkategori']=='K02'){echo"selected";}?>>Pengetahuan</option>
<option value='K03'<?php if($databuku['idkategori']=='K03'){echo"selected";}?>>Teknologi</option>
<option value='K04'<?php if($databuku['idkategori']=='K04'){echo"selected";}?>>Pelajaran</option>
</select><br>
<input type='submit' value='edit' class="btn btn-success">
</form> 