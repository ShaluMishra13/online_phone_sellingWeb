<!DOCTYPE HTML>
<html>
	<head>
		<title>Online Mobile Store</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<meta name="keywords" content="Mobilestore iphone web template, Andriod web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<link href='http://fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
		<script type="text/javascript" src="js/jquery.livequery.js"></script>
		<link href="css/style1.css" rel="stylesheet" />
		<script type="text/javascript">

$(document).ready(function() {
	
	var Arrays=new Array();
	
	$('.add-to-cart-button').click(function(){
		
		var thisID 	  = $(this).parent().parent().attr('id').replace('detail-','');
		
		var itemname  = $(this).parent().find('.item_name').html();
		var itemprice = $(this).parent().find('.price').html();
		
		if(include(Arrays,thisID))
		{
			var price 	 = $('#each-'+thisID).children(".shopp-price").find('em').html();
			var quantity = $('#each-'+thisID).children(".shopp-quantity").html();
			quantity = parseInt(quantity)+parseInt(1);
			
			var total = parseInt(itemprice)*parseInt(quantity);
			
			$('#each-'+thisID).children(".shopp-price").find('em').html(total);
			$('#each-'+thisID).children(".shopp-quantity").html(quantity);
			
			var prev_charges = $('.cart-total span').html();
			prev_charges = parseInt(prev_charges)-parseInt(price);
			
			prev_charges = parseInt(prev_charges)+parseInt(total);
			$('.cart-total span').html(prev_charges);
			
			$('#total-hidden-charges').val(prev_charges);
		}
		else
		{
			Arrays.push(thisID);
			
			var prev_charges = $('.cart-total span').html();
			prev_charges = parseInt(prev_charges)+parseInt(itemprice);
			
			$('.cart-total span').html(prev_charges);
			$('#total-hidden-charges').val(prev_charges);
			
			var Height = $('#cart_wrapper').height();
			$('#cart_wrapper').css({height:Height+parseInt(45)});
			
			$('#cart_wrapper .cart-info').append('<div class="shopp" id="each-'+thisID+'"><div class="label">'+itemname+'</div><div class="shopp-price"> $<em>'+itemprice+'</em></div><span class="shopp-quantity">1</span><img src="images/remove.png" class="remove" /><br class="all" /></div>');
			
		}
		
	});	
	
	$('.remove').livequery('click', function() {
		
		var deduct = $(this).parent().children(".shopp-price").find('em').html();
		var prev_charges = $('.cart-total span').html();
		
		var thisID = $(this).parent().attr('id').replace('each-','');
		
		var pos = getpos(Arrays,thisID);
		Arrays.splice(pos,1,"0")
		
		prev_charges = parseInt(prev_charges)-parseInt(deduct);
		$('.cart-total span').html(prev_charges);
		$('#total-hidden-charges').val(prev_charges);
		$(this).parent().remove();
		
	});	
	
	$('#Submit').livequery('click', function() {
		
		var totalCharge = $('#total-hidden-charges').val();
		
		$('#cart_wrapper').html('Total Charges: $'+totalCharge);
		
		return false;
		
	});	
	
	// this is for 2nd row's li offset from top. It means how much offset you want to give them with animation
	var single_li_offset 	= 200;
	var current_opened_box  = -1;
	
	$('#wrap li').click(function() {
	
		var thisID = $(this).attr('id');
		var $this  = $(this);
		
		var id = $('#wrap li').index($this);
		
		if(current_opened_box == id) // if user click a opened box li again you close the box and return back
		{
			$('#wrap .detail-view').slideUp('slow');
			return false;
		}
		$('#cart_wrapper').slideUp('slow');
		$('#wrap .detail-view').slideUp('slow');
		
		// save this id. so if user click a opened box li again you close the box.
		current_opened_box = id;
		
		var targetOffset = 0;
		
		// below conditions assumes that there are four li in one row and total rows are 4. How ever if you want to increase the rows you have to increase else-if conditions and if you want to increase li in one row, then you have to increment all value below. (if(id<=3)), if(id<=7) etc
		
		if(id<=3)
			targetOffset = 0;
		else if(id<=7)
			targetOffset = single_li_offset;
		else if(id<=11)
			targetOffset = single_li_offset*2;
		else if(id<=15)
			targetOffset = single_li_offset*3;
		
		$("html:not(:animated),body:not(:animated)").animate({scrollTop: targetOffset}, 800,function(){
			
			$('#wrap #detail-'+thisID).slideDown(500);
			return false;
		});
		
	});
	
	$('.close a').click(function() {
		
		$('#wrap .detail-view').slideUp('slow');
		
	});
	
	$('.closeCart').click(function() {
		
		$('#cart_wrapper').slideUp();
		
	});
	
	$('#show_cart').click(function() {
		
		$('#cart_wrapper').slideToggle('slow');
		
	});
	
});

function include(arr, obj) {
  for(var i=0; i<arr.length; i++) {
    if (arr[i] == obj) return true;
  }
}

function getpos(arr, obj) {
  for(var i=0; i<arr.length; i++) {
    if (arr[i] == obj) return i;
  }
}

</script>

	</head>
	<body>
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
			<ul><li><a href="index.html">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="store.html">Store</a></li>
				
				<li><a href="blog.html">Blog</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div>
		<div class="clear"> </div>
		</div>
		</div>
		<!----End-top-nav---->
		<!----End-Header---->
		    <div class="clear"> </div>
		    <div class="wrap">
		    <div class="content">
		    <div class="content-grids">
		    	
<div align="left" style="min-height:800px;">
	
	<div id="cart_wrapper" align="center">
	
		<form action="#" id="cart_form" name="cart_form">
		
			<div class="cart-info"> </div>
			
			<div class="cart-total">
			
				<b>Total Charges:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> $<span>0</span>
				
				<input type="hidden" name="total-hidden-charges" id="total-hidden-charges" value="0" />
			</div>
			
			<button type="submit" id="Submit">CheckOut</button>
		
		</form>
	</div>
	
	<div id="wrap" align="center">
		
		<a id="show_cart" href="javascript:void(0)">View My Cart</a>
		
		<ul>
		
			
			
			<br clear="all" />
		</ul>
		<br clear="all" />
	</div>
	
		
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
		<div class="footer">
			<div class="clear"> </div>
		    </div>
		</div>
		</div>
	</body>
</html>

