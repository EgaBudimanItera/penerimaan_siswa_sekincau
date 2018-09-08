
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>SMA Negeri 1 Sekincau</title>
	<link href='<?php echo base_url()."/assetuser/css/bootstrap.min.css";?>' rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Oswald:400,700,300" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400" rel="stylesheet" type="text/css">
	<link href='<?php echo base_url()."/assetuser/font-awesome/css/font-awesome.min.css";?>' rel="stylesheet">
	<link href='<?php echo base_url()."/assetuser/css/owl.carousel.css";?>' rel="stylesheet">
	<link href='<?php echo base_url()."/assetuser/css/style.css";?>' rel="stylesheet">
	<link href='<?php echo base_url()."/assetuser/css/responsive.css";?>' rel="stylesheet">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href='<?php echo base_url()."/assetuser/images/fav-144.html";?>'>
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href='<?php echo base_url()."/assetuser/images/fav-114.html";?>'>
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href='<?php echo base_url()."/assetuser/images/fav-72.html";?>'>
	<link rel="apple-touch-icon-precomposed" href='<?php echo base_url()."/assetuser/images/fav-57.html";?>'>
	<link rel="shortcut icon" href='<?php echo base_url()."/assetuser/images/fav.html";?>'>
</head>
<body>
	<header id="header-area" class="home">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-xs-12">
					</div>
					<div class="col-sm-8 col-xs-12">
						<div class="header-links">
							<ul class="nav navbar-nav pull-right">
								<?php
								  if($this->session->userdata('status') == "login"){
								  ?>
								<li>
									<a href="#">
										<span>
											user : <?php echo $this->session->userdata('nama')?>
										</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span>
											Pendaftaran
										</span>
									</a>
								</li>
                                <?php
								  
								?>
								<li>
									<a href="#">
										<span>
											Upload Berkas
										</span>
									</a>
								</li>
                                <?php
								  
								?>
								<li>
									<a href="#">
										<span>
											Lihat Data
										</span>
									</a>
								</li>
                                <?php
								
								?>
								<li>
									<a href="#">
										<span>
											Hasil Test
										</span>
									</a>
								</li>
								<?php
								  }
								?>
                                <li>
									<a href="<?php echo base_url()."home/";?>">
										<i class="fa fa-home hidden-lg hidden-md" title="Home"></i>
										<span class="hidden-sm hidden-xs">
											Home
										</span>
									</a>
								</li>
								<?php
								  if($this->session->userdata('status') == "login"){
								  ?>
								<li>
									<a href="<?php echo base_url()."account/";?>">
										<i class="fa fa-user hidden-lg hidden-md" title="My Account"></i>
										<span class="hidden-sm hidden-xs">
											My Account
										</span>
									</a>
								</li>
								<?php
								  }
								?>
								<!--<li>
									<a href="index.php?mod=wishlist">
										<i class="fa fa-heart hidden-lg hidden-md" title="Wishlist"></i>
										<span class="hidden-sm hidden-xs">
											wishlist
										</span>
									</a>
								</li>
								<li>
									<a href="index.php?mod=cart">
										<i class="fa fa-shopping-cart hidden-lg hidden-md" title="Shopping Cart"></i>
										<span class="hidden-sm hidden-xs">
											Shopping Cart
										</span>
									</a>
								</li>
								<li>
									<a href="index.php?mod=checkout">
										<i class="fa fa-crosshairs hidden-lg hidden-md" title="Checkout"></i>
										<span class="hidden-sm hidden-xs">
											Checkout
										</span>
									</a>
								</li>
								-->
                                <?php
								  if($this->session->userdata('status') != "login"){
								  ?>
								<li>
									<a href="<?php echo base_url()."register/";?>">
										<i class="fa fa-unlock hidden-lg hidden-md" title="Register"></i>
										<span class="hidden-sm hidden-xs">
											Register
										</span>
									</a>
								</li>
								<li>
									<a href="<?php echo base_url()."login/";?>">
										<i class="fa fa-lock hidden-lg hidden-md" title="Login"></i>
										<span class="hidden-sm hidden-xs">
											Login
										</span>
									</a>
								</li>
                                <?php
								  }
								?>
								<?php
								  if($this->session->userdata('status') == "login"){
								  ?>
								<li>
									<a href="<?php echo base_url()."login/logout";?>">
										<i class="fa fa-lock hidden-lg hidden-md" title="Logout"></i>
										<span class="hidden-sm hidden-xs">
											Logout
										</span>
									</a>
								</li>
								<?php
								  }
								?>
							</ul>
						</div>
					</div>			
				</div>
			</div>
		</div>
		<div class="main-header">
			<div class="container">
				<div class="row">		
					<div class="col-sm-6">
						<div id="logo"><a href="index.php?mod=home"><img src='<?php echo base_url()."assetuser/images/logo3.png"?>' title="Furniture Shoppe" alt="Furniture Shoppe" class="img-responsive" /></a></div>
					</div>
					
                    <?php
								  if($this->session->userdata('status') == "login"){
								  ?>
                    <?php
							}
							?>
					<form method="post" action="<?php echo base_url()."cari/q/";?>">
					<div class="col-sm-3">
						<div id="search">
							<div class="input-group"><span class="input-group-btn">
							  
							  </span>
							</div>
						</div>	
					</div>
					</form>
				</div>
			</div>
		</div>
		<nav id="main-menu" class="navbar" role="navigation"></nav>
	</header>

	<div class="slider">
		<div id="main-carousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="item active">
					<img src='<?php echo base_url()."assetuser/images/slider-imgs/SELAMAT.jpg";?>' alt="Slider" class="img-responsive" />
				</div>
                
				<div class="item">
					<img src='<?php echo base_url()."assetuser/images/slider-imgs/PASKIB.jpg";?>' alt="Slider" class="img-responsive" />
				</div>
                
				<div class="item">
					<img src='<?php echo base_url()."assetuser/images/slider-imgs/PENSI.jpg";?>' alt="Slider" class="img-responsive" />
				</div>
                
				<div class="item">
					<img src='<?php echo base_url()."assetuser/images/slider-imgs/GEDUNG.jpg";?>' alt="Slider" class="img-responsive" />
				</div>
                
				
			</div>
			<a class="left carousel-control" href="#main-carousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>	
	</div>
	<div id="main-container" class="container">
		<div class="row">
	<div class="col-md-3">
				
				
				
				</div>
			</div>
	
    <?php 
	include("v_content.php");
	?>
			</div>
            
		</div>
	<footer id="footer-area">
		<div class="copyright">
			<div class="container">
				<p align="center" class="pull-left">
					&copy; 2018 SMA NEGERI 1 SEKINCAU
				</p>
			</div>
		</div>
	</footer>
<script src='<?php echo base_url()."/assetuser/js/jquery-1.11.1.min.js";?>'></script>
<script src='<?php echo base_url()."/assetuser/js/jquery-migrate-1.2.1.min.js";?>'></script>	
<script src='<?php echo base_url()."/assetuser/js/bootstrap.min.js";?>'></script>
<script src='<?php echo base_url()."/assetuser/js/bootstrap-hover-dropdown.min.js";?>'></script>
<script src='<?php echo base_url()."/assetuser/js/jquery.magnific-popup.min.js";?>'></script>
<script src='<?php echo base_url()."/assetuser/js/owl.carousel.min.js";?>'></script>
<script src='<?php echo base_url()."/assetuser/js/custom.js";?>'></script>
</body>
</html>