<p><b>INPUTAN BUKU</b></p>
<form enctype='multipart/form-data' action='index.php?target=terimabuku' method='post'>
<pre>
<b>Id Buku 		:<input type='text' name='idbuku'>
Judul Buku 		:<input type='text' name='judul'>
Harga Buku 		:<input type='text' name='harga'>
Kategori Buku 	:<select name='idkategori'>
	<option value='K01'>Cerita/Novel</option>";
	<option value='K02'>Pengetahuan</option>
	<option value='K03'>Teknologi</option>
	<option value='K04'>Pelajaran</option>
</select>

<input type="hidden" name="MAX_FILE_SIZE" value="500000" />
Gambar Buku 	:<input name='gambarbuku' type='file' /></b>
</pre>

<br>
<input type='submit' value='input' class="btn btn-success">
<input type='reset' value='clear' class="btn btn-primary"><br>
</form> 
