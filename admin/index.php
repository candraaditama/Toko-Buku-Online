<?php
session_start();
error_reporting(0);
$target = $_GET['target'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Toko Buku Online </title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet"> <!-- SESUAIKAN DENGAN ALAMAT/PATH FOLDER -->

    <!-- Custom CSS -->
    <link href="../css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Halaman Admin Toko Online Achmad Yani</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <!-- div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php?target=tentang">Tentang</a>
                    </li>                    
                    <li>
                        <a href="index.php?target=kontak">Kontak</a>
                    </li>
                </ul>
            </div -->
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead"></p>
                <div class="list-group">
				<?php
					//if(!isset($_SESSION['admin']))
					if((!isset($_SESSION['admin'])) and (!isset($_COOKIE['aktif'])))
					{ echo "
						<a href='index.php?target=welcome' class='list-group-item'>Home</a>																
						<a href='index.php?target=login' class='list-group-item'>Login</a>
						"; } else {						
						echo "
						<a href='index.php?target=welcome' class='list-group-item'>Home</a></li>
						<a href='index.php?target=daftarbuku' class='list-group-item'>Daftar Buku</a></li>
						<a href='index.php?target=isibuku' class='list-group-item'>Isi Buku</a></li>						
						<a href='index.php?target=penjualan' class='list-group-item'>Penjualan Buku</a></li>
						<a href='index.php?target=logout' class='list-group-item'>Logout</a></li>
						";
						}
					?>
					<br />					
                </div>
            </div>

            <div class="col-md-9">
					
				<div class="row carousel-holder">
                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
								<li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="love.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="jatuh_cinta.jpg" alt="">
                                </div>
								<div class="item">
                                    <img class="slide-image" src="seandainya.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="summers.png" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
					
					
					<?php
					if($target=='welcome' or $target== ''){
						include('welcome.php');} else								
					if($target=='login') { // ke halaman login
						include('login.php');} else
					if($target=='terimalogin') { // proses setelah login
						include('terimalogin.php');} else
					if($target=='terimabuku') { // 
						include('terimabuku.php');} else				
					if($target=='daftarbuku') {
						include('daftarbuku.php');} else
					if($target=='editbuku') {
						include('editbuku.php');} else
					if($target=='terimaeditbuku') {
						include('terimaeditbuku.php');} else							
					if($target=='konfirmhapusbuku') {
						include('konfirmhapusbuku.php');} else
					if($target=='hapusbuku') {
						include('hapusbuku.php');} else
					if($target=='isibuku') {
						include('isibuku.php');} else					
					if($target=='penjualan') {
						include('penjualan.php');} else
					if($target=='detailpembelian') {
						include('detailpembelian.php');} else
					if($target=='logout') {
						include('logout.php');} else	
					{ echo "Belum ada halaman <br>"; }
					?>
                

                <div class="row">            
					
				</div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Achmad Yani 2015</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->
			
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>