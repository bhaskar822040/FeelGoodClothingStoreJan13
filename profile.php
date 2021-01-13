<?php
	session_start();
	if(!isset($_SESSION['uid'])){
	header('Location:index.php');
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Rental Bay</title>
	<link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="shortcut icon" href="assets/images/fav.png">

	<style>
	#shoppingcart {
    position: relative;
    right: 240px;
}
.one-time {
    margin-left: 0%;
    margin-right: 0%;
}

</style>
</head>
<body>
	<div class="navbar navbar-default navbar-fixed-top"  id="topnav">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">The Rental Bay</a>
			</div>

			<ul class="nav navbar-nav">

				<li style="width:150px;left:10px;top:10px;"><input type="text" class="form-control" id="search" name=""></li>
				<li style="top:10px;left:20px;">
				<button class="btn btn-primary" id="search_btn" name=""><span class='glyphicon glyphicon-search'></span></button>
				
				</li>
			
			
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li id='shoppingcart'><a id="carticon" href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart <span class="badge">2</span>	</a>
					<div class="dropdown-menu" style="width: 400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3"><strong>S. No.</strong></div>
									<div class="col-md-3"><strong>Product Image</strong></div>
									<div class="col-md-3"><strong>Product Name</strong></div>
									<div class="col-md-3"><strong>Price in $</strong></div>
								</div>
								<hr>
								<div id="cartmenu">
								<!--<div class="row">
									<div class="col-md-3">S. No.</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $</div>
								</div>-->
								</div>
							</div>
							<div class="panel-body"></div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>Hello, <?php echo $_SESSION['uname']; ?></a>
				<ul class="dropdown-menu">
					
					<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart-large"></span> Cart</a></li>
					<li><a href="myorders.php">My Orders</a></li>
					<li><a href="#">Change Password</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>

				</li>

				</ul>

		</div>
	</div>
	<br><br/><br/><br/>
	<!--<Slider Begins -->
 
	 <div class="one-time">
	    <div><img src="assets/images/car1.jpg" style="width:100%;height:200px"></div>
	    <div><img src="assets/images/car2.jpg" style="width:100%;height:200px"></div>
	    <div><img src="assets/images/car3.jpg" style="width:100%;height:200px"></div>
  	</div> 

	<!-- Slider ends -->

	<br>



	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2">
			<div id="get_cat"></div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Categories</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div>-->
				<!-- <div id="get_brand"></div> -->
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Brands</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div>-->

				<h1>Price Range </h1>
					
					<div class='pull-left' style="width:100%">
					Sort By : &nbsp;&nbsp;&nbsp;
					<div style="border:2px solid #337ab7;width:100%;margin-bottom:10px;margin-top:10px"></div>
					<a href="#" id='price_sort1' style="padding-top:10px"><input type="radio" id="p" value="0-50">0$-50</a> <br/><Br/>
					<a href="#" id='price_sort' style="padding-top:10px"><input type="radio" id="p" value="0-50">50$-100$</a> <br/><br/> 
					<a href="#" id='pop_sort'><input type="radio" id="p" value="0-50">100$-500$</a>
					</div>
	
	
			</div>
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-12" id="cartmsg">

					</div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading text-center">-- Products--
							<!-- <div class='pull-right'>
								Sort: &nbsp;&nbsp;&nbsp;<a href="#" id='price_sort'>Price</a> | <a href="#" id='pop_sort'>Popularity</a>
							</div> -->
					</div>
					<div class="panel-body">
					<div id="get_product"></div>
						<!--<div class="col-md-4">
							<div class="panel panel-info">
								<div class="panel-heading">Samsung Galaxy</div>
								<div class="panel-body"><img src="assets/prod_images/samsung_galaxy.jpg"></div>
								<div class="panel-heading">$500.00
								<button class="btn btn-danger btn-xs" style="float:right;">Add to Cart</button>
								</div>
							</div>
						</div>-->
					</div>
					<div class="panel-footer">&copy; 2020</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<center>
					<ul class='pagination' id='pageno'>

					</ul>
				</center>
			</div>


			<!-- Modal -->

				<div class="modal fade" id="prod_detail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">Product Details</h4>
				      </div>
				      <div class="modal-body" id='dynamic_content'>
				        ...
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

				      </div>
				    </div>
				  </div>
				</div>

			 <!-- Modal ends-->
		</div>
	</div>
	<footer class="footer-bs">
	<div class="row">
		<div class="col-md-4 footer-brand animated fadeInLeft">
			<h2>Logo</h2>
			<p>Suspendisse hendrerit tellus laoreet luctus pharetra. Aliquam porttitor vitae orci nec ultricies.
				Curabitur vehicula, libero eget faucibus faucibus, purus erat eleifend enim, porta pellentesque ex
				mi ut sem.</p>
			<p>© 2020 BS3 UI Kit, All rights reserved</p>
		</div>
		<div class="col-md-4 footer-nav animated fadeInUp">
			<h4>Information</h4>
			<div class="col-md-4">
				<ul class="pages">
					<li><a href="index.php">Home</a></li>
					
					<li><a href="about.html">About</a></li>
					<li><a href="contact.html">Contact Us</a></li>
					<li><a href="#">Pricing</a></li>

				</ul>
			</div>

		</div>
		<div class="col-md-4 footer-social animated fadeInDown">
			<h4>Contact Us</h4>
			<ul>
				<li><i class="fa fa-map-marker" aria-hidden="true"></i><a href="#">725 James Street N,<br>
						Thunder Bay</a></li>
				<li><i class="fa fa-phone-square" aria-hidden="true"></i><a href="#">807-777-7777</a></li>
				<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>working time: Mon - Sat<br> 9AM - 5PM</a></li>
				<li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> Info @ gmail.com</a></li>
			</ul>
		</div>

	</div>
</footer>




	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  	<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
	<script src="assets/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	<script src="main.js"></script>
</body>
<div class="foot"><footer>

</footer></div>
<style> .foot{text-align: center;}
</style>
</html>
