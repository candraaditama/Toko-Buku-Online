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

    <title>Toko Buku Online ADITAMA</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

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
                <a class="navbar-brand" href="#">TOKO BUKU ADITAMA</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php?target=tentang">Tentang</a>
                    </li>
                    <li>
                        <a href="index.php?target=layanan">Layanan</a>
                    </li>
                    <li>
                        <a href="index.php?target=kontak">Kontak</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Selamat Datang</p>
                <div class="list-group">
					<!--
				   <a href="#" class="list-group-item">Home</a>
                   <a href="#" class="list-group-item">Login Member</a>
				   <a href="#" class="list-group-item">Katalog Buku</a>
				   -->
					<?php
					if((!isset($_SESSION['admin'])) and (!isset($_COOKIE['aktif'])))
					{
						echo "<a href='index.php?target=welcome' class='list-group-item'>Home</a>					
								<a href='index.php?target=katalogbuku' class='list-group-item'>Katalog Buku</a>
							
						"; 
						} else {
						echo "<li><a href='index.php?target=welcome' class='list-group-item'>Home</a></li>
						<li><a href='index.php?target=daftarbuku' class='list-group-item'>Daftar Buku</a></li>
						<li><a href='index.php?target=isibuku' class='list-group-item'>Isi Buku</a></li>
						<li><a href='index.php?target=cetakbuku' class='list-group-item'>Cetak Buku</a></li>
						<li><a href='index.php?target=penjualan' class='list-group-item'>Penjualan Buku</a></li>
						<li><a href='index.php?target=logout' class='list-group-item'>Logout</a></li>";
						}
					?>
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
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="gambarbuku/img_4623.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="gambarbuku/jatuhcinta.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="gambarbuku/LP1.jpg" alt="">
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
				if($target=='welcome' or $target==''){
					include('welcome.php');} else
				if($target=='tentang'){
					include('tentang.php');} else
				if($target=='kontak'){
					include('kontak.php');} else
				if($target=='katalogbuku'){
					include('katalogbuku.php');} else
				if($target=='belibuku'){
					include('belibuku.php');} else
				if($target=='terimabeli'){
					include('terimabeli.php');} else
				if($target=='selesaibeli'){
					include('selesaibeli.php');} else
				if($target=='inputpembeli'){
					include('inputpembeli.php');} else
				if($target=='kontak'){
					include('kontak.php');} else
				if($target=='layanan'){
					include('layanan.php');} else
				{echo "Belum ada halaman (404)";}
				
			?>

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
                    <p>Copyright &copy; Your Website 2014</p>
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
