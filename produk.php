<?php
include "koneksi.php";
$carimerk = mysqli_query($koneksi,"select * from merk");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Company Profile ABS</title>
	<meta charset="UTF-8">
	<meta name="description" content="Labs - Design Studio">
	<meta name="keywords" content="lab, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">
	

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
	<div class="loader">
		<img src="img/blue.png" alt="">
		<h2>Loading.....</h2>
	</div>
</div>


	<!-- Header section -->
	<header class="header-section">
	<div class="logo">
	<img src="img/blue.png" width="50px" height="50px" alt="">&nbsp;&nbsp;&nbsp;
	<img src="img/AVEO.png" width="70px" height="60px" alt="">&nbsp;&nbsp;&nbsp;
	<img src="img/emazer.png" width="50px" height="50px" alt=""><!-- Logo -->
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
			<ul class="menu-list">
			<li class="active"><a href="home.php">Home</a></li>
			<li><a href="services.php">About</a></li>
			<li><a href="produk.php">Product</a></li>
			<li><a href="news.php">News</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
			</ul>
			</ul>
		</nav>
	</header>
	<!-- Header section end -->


	<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>Product</h2>
				<div class="page-links">
					<a href="home.php">Home</a>
					<span>Product</span>
				</div>
			</div>
		</div>
	</div>
	<!-- Page header end-->


	<!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					<?php
						if(isset($_GET['id_merk'])){
							$merk = $_GET['id_merk'];
							$sql = "select * from produk where idMerk='$merk' order by idMerk DESC";	
						} elseif(isset($_POST['qcari'])){
							$qcari=$_POST['qcari'];
							$sql="SELECT * FROM  produk
							where namaProduk like '%$qcari%'";
						}else{
							
							$sql="SELECT * FROM  produk  order by idMerk DESC";
						  
						  }

						$query = mysqli_query($koneksi, $sql);


						while ($produk = mysqli_fetch_array($query)) {	
					?>
					<!-- Post item -->
					<div class="post-item">
						<div class="post-thumbnail">
							<img src="<?php echo $produk['gambarProduk']; ?>" alt="" width="500px">
						</div>
						<div class="post-content">
							<h2 class="post-title"><?php echo $produk['namaProduk']; ?></h2>
							<p><?php echo $produk['deskripsiProduk']; ?></p>
						</div>
					</div>
					<?php
						}
					?>					

					<!-- Pagination -->
				</div>
				<!-- Sidebar area -->
				<div class="col-md-4 col-sm-5 sidebar">
					<!-- Single widget -->
					<div class="widget-item">
						<form action="produk.php" method="POST" role="search" class="search-form">
							<input type='text' placeholder='Search' name='qcari'>
							<button type='submit' value='Cari Data' class='search-btn'><i class="flaticon-026-search"></i></button>
							<p class="con-item" style="color:grey; font-style: italic;">suggestion: "avix" "speaker"</p>
							<h2 class="widget-title"  style="text-decoration: underline;">BRANDS</h2>
						<ul>
							<?php
								while($n=mysqli_fetch_array($carimerk)){
									echo"<li><a class='site-btn btn-3' style='font-size: 20px;' href='produk.php?id_merk=" .$n['idMerk']."'>" .$n['namaMerk']."</a></li>";
								}
							?>			
							<!-- <li><a href="produk.php?id_merk=1">Merk 1</a></li>
							<li><a href="#">Nisi eu lobortis pharetra</a></li>
							<li><a href="#">Orci quam accumsan </a></li>
							<li><a href="#">Auguen pharetra massa</a></li>
							<li><a href="#">Tellus ut nulla</a></li>
							<li><a href="#">Etiam egestas viverra </a></li> -->
						</ul>
						</form>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<ul>
							<?php
								while($n=mysqli_fetch_array($carimerk)){
									echo"<li><a href='produk.php?id_merk=" .$n['idMerk']."'>" .$n['namaMerk']."</a></li>";
								}
							?>			
							<!-- <li><a href="produk.php?id_merk=1">Merk 1</a></li>
							<li><a href="#">Nisi eu lobortis pharetra</a></li>
							<li><a href="#">Orci quam accumsan </a></li>
							<li><a href="#">Auguen pharetra massa</a></li>
							<li><a href="#">Tellus ut nulla</a></li>
							<li><a href="#">Etiam egestas viverra </a></li> -->
						</ul>
					</div>
					<!-- Single widget -->
					
			
	<!-- newsletter section end-->


	<!-- Footer section -->
	
	<!-- Footer section end -->




	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
