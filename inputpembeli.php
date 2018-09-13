<html>
<head>
<script type="text/javascript">
	function validasi() {		
		if(document.form1.namapembeli.value == "")
		   {
			 alert( "Masukkan nama Anda!" );
			 document.form1.namapembeli.focus() ;
			 return false;
		   }
		 if(document.form1.alamatpembeli.value == "")
		   {
			 alert( "Masukkan Alamat Anda!" );
			 document.form1.alamatpembeli.focus() ;
			 return false;
		   }
		  if(document.form1.kontakpembeli.value == "")
		   {
			 alert( "Masukkan Kontak Anda!" );
			 document.form1.kontakpembeli.focus() ;
			 return false;
		   }

</script>
</head>
<body>

<h3>..::Silahkan Masukkan Data Anda::..</h3>
<form  action='index.php?target=selesaibeli' method='post' name="form1" onsubmit="return(validasi());">
	<form class="form-horizontal" role="form">
		<div class="form-group">
		  <label class="control-label col-sm-2" for="namapembeli">Nama Anda :</label>
		  <div class="col-sm-10">
			<input type="text" name="namapembeli" class="form-control" id="namapembeli" placeholder="Masukkan nama">
		  </div>
		</div>
		<div class="form-group">
		  <label class="control-label col-sm-2" for="alamatpembeli">Alamat :</label>
		  <div class="col-sm-10">          
			<input type="text" name="alamatpembeli" class="form-control" id="alamatpembeli" placeholder="Masukkan alamat">
		  </div>
		</div>
		<div class="form-group">
		  <label class="control-label col-sm-2" for="kontakpembeli">Telepon/HP :</label>
		  <div class="col-sm-10">          
			<input type="text" name="kontakpembeli" class="form-control" id="kontakpembeli" placeholder="Masukkan telepon">
		  </div>
		</div>
		<div class="form-group">
		  <label class="control-label col-sm-2" for="pesan">Pesan :</label>
		  <div class="col-sm-10">          
			<input type="text" name="pesan" class="form-control" id="pesan" placeholder="Masukkan pesan">
		  </div>
		</div>
		<div> &nbsp </div>
		<div class="form-group">        
		  <div class="col-sm-offset-2 col-sm-8">
			<button name="tombol" type="submit" class="btn btn-primary">Input</button>
		  </div>
		</div>
	</form>
</form>
</body>
</html>
