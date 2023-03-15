<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: index.html");
		exit;
	}
	// select loggedin sing detail
	$res=mysql_query("SELECT * FROM sing WHERE userId=".$_SESSION['user']);
	$userRow=mysql_fetch_array($res);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Online Mobile Store</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/responsiveslides.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js/responsiveslides.min.js"></script>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"  />
		<link rel="stylesheet" href="style.css" type="text/css" />
		  <script>
		    // You can also use "$(window).load(function() {"
			    $(function () {
			
			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 1600,
			        speed: 600
			      });
			});
		  </script>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          
          <ul class="nav navbar-nav navbar-right">
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
			  <span class="glyphicon glyphicon-user"></span>&nbsp;Hi' <?php echo $userRow['userEmail']; ?>&nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav> 
		<div class="wrap">
		<!----start-Header---->
		<div class="header">
			<div class="search-bar">
				<form>
					<input type="text"><input type="submit" value="Search" />
				</form>
			</div>
			<div class="clear"> </div>
			<div class="header-top-nav">
				<ul>
					<li><a href="index.php">Login</a></li>
					<li><a href="#">Develivery</a></li>
					<li><a href="#">Checkout</a></li>
					<li><a href="#">My Account</a></li>
					<li><a href="#"><span>Shopping Cart&nbsp;&nbsp;: </span></a><lable> &nbsp;No Items</lable></li>
				</ul>
			</div>
			<div class="clear"> </div>
		</div>
		</div>
		<div class="clear"> </div>
		<div class="top-header">
			<div class="wrap">
		<!----start-logo---->
			<div class="logo">
				<a href="index.html"><img src="images/logo.png" title="logo" /></a>
			</div>
		<!----end-logo---->
		<!----start-top-nav---->
		<div class="top-nav">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="store.html">Store</a></li>
				
				<li><a href="blog.html">Blog</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
			
      </div>
		</div>
		<div class="clear"> </div>
		</div>
		</div>
		<!----End-top-nav---->
		<!----End-Header---->
	<!--start-image-slider---->

					<div class="wrap">
					<div class="image-slider">
						<!-- Slideshow 1 -->
					    <ul class="rslides" id="slider1">
					      <li><img src="images/1.png" alt=""></li>
					      <li><img src="images/2.png" alt=""></li>
					      <li><img src="images/1.png" alt=""></li>
					    </ul>
						 <!-- Slideshow 2 -->
					</div>
					<!--End-image-slider---->
					</div>
		    <div class="clear"> </div>
		    <div class="wrap">
		    <div class="content">
		    	<div class="top-3-grids">
		    		<div class="section group">
				<div class="grid_1_of_3 images_1_of_3">
					  <a href="store.html"><img src="images/main.jpg" width="400" height="250" ></a>
					  <h3>Apple</h3>
				</div>
				<div class="grid_1_of_3 images_1_of_3 second">
					   <a href="store.html"><img src="images/35.jpg" width="400" height="250"></a>
					  <h3>Samsung</h3>
				</div>
				<div class="grid_1_of_3 images_1_of_3 theree">
					   <a href="store.html"><img src="images/25.jpg" width="400" height="250"></a>
					  <h3>Micromax</h3>
				</div>
			</div>
		    	</div>
		    	
		    <div class="content-grids">
		    	<h4>Deals of the day</h4>
		    	<div class="section group">
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="images/7.jpg" width="300" height="220">
					 <a href="#">Android and 3G Smartphones with unique features, specifications, price and offerings.</a>
					 <h3>Rs. 30,000</h3>
					 <ul>
					 	<li><a  class="cart" href="#"> </a></li>
					 	<li><a  class="i" href="#"> </a></li>
					 	<li><a  class="Compar" href="#"> </a></li>
					 	<li><a  class="Wishlist" href="#"> </a></li>
					 </ul>
				</div>
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="images/11.jpg" >
					  <a href="#">Android and 3G Smartphones with unique features, specifications, price and offerings.</a>
					 <h3>Rs. 15,000</h3>
					 <ul>
					 	<li><a  class="cart" href="#"> </a></li>
					 	<li><a  class="i" href="#"> </a></li>
					 	<li><a  class="Compar" href="#"> </a></li>
					 	<li><a  class="Wishlist" href="#"> </a></li>
					 </ul>
				</div>
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="images/31.jpg">
					  <a href="#">Android and 3G Smartphones with unique features, specifications, price and offerings.</a>
					 <h3>Rs. 10,000</h3>
					 <ul>
					 	<li><a  class="cart" href="#"> </a></li>
					 	<li><a  class="i" href="#"> </a></li>
					 	<li><a  class="Compar" href="#"> </a></li>
					 	<li><a  class="Wishlist" href="#"> </a></li>
					 </ul>
				</div>
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="images/25.jpg">
					  <a href="#">Android and 3G Smartphones with unique features, specifications, price and offerings.</a>
					 <h3>Rs. 12,000</h3>
					 <ul>
					 	<li><a  class="cart" href="#"> </a></li>
					 	<li><a  class="i" href="#"> </a></li>
					 	<li><a  class="Compar" href="#"> </a></li>
					 	<li><a  class="Wishlist" href="#"> </a></li>
					 </ul>
				</div>
			</div>
			<div class="section group">
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="images/01.jpg">
					 <a href="#">Android and 3G Smartphones with unique features, specifications, price and offerings.</a>
					 <h3>Rs. 35,000</h3>
					 <ul>
					 	<li><a  class="cart" href="#"> </a></li>
					 	<li><a  class="i" href="#"> </a></li>
					 	<li><a  class="Compar" href="#"> </a></li>
					 	<li><a  class="Wishlist" href="#"> </a></li>
					 </ul>
				</div>
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="images/34.jpg" width="300" height="260">
					  <a href="#">Android and 3G Smartphones with unique features, specifications, price and offerings.</a>
					 <h3>Rs. 35,000</h3>
					 <ul>
					 	<li><a  class="cart" href="#"> </a></li>
					 	<li><a  class="i" href="#"> </a></li>
					 	<li><a  class="Compar" href="#"> </a></li>
					 	<li><a  class="Wishlist" href="#"> </a></li>
					 </ul>
				</div>
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="images/m7.jpg" width="300" height="260">
					  <a href="#">Android and 3G Smartphones with unique features, specifications, price and offerings.</a>
					 <h3>Rs. 5,000</h3>
					 <ul>
					 	<li><a  class="cart" href="#"> </a></li>
					 	<li><a  class="i" href="#"> </a></li>
					 	<li><a  class="Compar" href="#"> </a></li>
					 	<li><a  class="Wishlist" href="#"> </a></li>
					 </ul>
				</div>
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="images/26.jpg" width="300" height="255">
					  <a href="#">Android and 3G Smartphones with unique features, specifications, price and offerings.</a>
					 <h3>Rs. 9,000</h3>
					 <ul>
					 	<li><a  class="cart" href="#"> </a></li>
					 	<li><a  class="i" href="#"> </a></li>
					 	<li><a  class="Compar" href="#"> </a></li>
					 	<li><a  class="Wishlist" href="#"> </a></li>
					 </ul>
				</div>
			</div>
		    
		    	</div>
		    	<div class="content-sidebar">
		    		<h4>Categories</h4>
						<ul>
							<li><a href="#">Accord Mobiles</a></li>
							<li><a href="#">Ace Mobile</a></li>
							<li><a href="#">Acer Mobile</a></li>
							<li><a href="#">Airfone</a></li>
							<li><a href="#">Apple</a></li>
							<li><a href="#">Blackberry</a></li>
							<li><a href="#">Byond Tech</a></li>
							<li><a href="#">Celkon Mobiles</a></li>
							<li><a href="#">Dell Mobile Phones </a></li>
							<li><a href="#">Fly Mobile</a></li>
							<li><a href="#">Fujezone Mobiles </a></li>
							<li><a href="#">HTC</a></li>
							<li><a href="#">LG Mobiles</a></li>
							<li><a href="#">Longtel Mobile</a></li>
							<li><a href="#">Maxx</a></li>
							<li><a href="#">Micromax Mobiles </a></li>
							<li><a href="#">Samsung Mobiles</a></li>
							<li><a href="#">Sony Ericsson Mobiles</a></li>
							<li><a href="#">Wynncom Mobiles</a></li>
						</ul>
		    	</div>
		    </div>
		    <div class="clear"> </div>
		    </div>
		</div>
		</div>
         
    
    <script src="assets/jquery-1.11.3-jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
    
</body>
</html>
<?php ob_end_flush(); ?>