<?php
session_start();

include ('../db_connection.php');

$username = $_POST['username'];
$password = $_POST['password']; 




$query = "SELECT username, password FROM admin WHERE username = '$username' and password = '$password' ";
$hasil = mysql_query($query) or die(mysql_error());

$ditemukan = mysql_num_rows($hasil);
if ($ditemukan==1) {
	$_SESSION['admin'] = $username;
	$setengahjam = time() + 0.5 * 3600;
	setcookie(aktif, 'masih aktif', $setengahjam);
	echo "Login sukses ! <br>";
	echo "<meta http-equiv='refresh' content='2;url=index.php'>";
	
} else {
	echo "Login gagal ! <br>";
	include ('login.php');
	
}
?>

<html>
<body>

</body>
</html>