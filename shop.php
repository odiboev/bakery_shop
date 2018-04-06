<?php 
  session_start(); 

  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: signin.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Born 2 Bread | Bakery Shop</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
	<div id="header">
		<div>
			<div>
				<div id="logo">
					<a href="index.php"><img src="images/logo.gif" alt="Logo"/></a>
				</div>
				<div>
					<div>
						<?php  if (isset($_SESSION['username'])) : ?>
						<a href="profile.php?id=<?php echo $_SESSION['username']; ?>"><?php echo $_SESSION['username']; ?></a>
						<a href="index.php?logout='1'">Sign out</a>
						<?php else: ?>
						<a href="signup.php">My Account</a>
						<a href="signin.php">Sign in</a>
						<?php endif; ?>
					</div>
					<form action="#">
						<input type="text" id="search" maxlength="30" />
						<input type="submit" value="" id="searchbtn" />
					</form>
				</div>
			</div>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li class="current"><a href="shop.php">Bakery</a></li>
				<li><a href="product.php">Products</a></li>
				<li><a href="services.php">Services</a></li>
				<li><a href="about.php">About Us</a></li>
				<li><a href="contact.php">Contact Us</a></li>
			</ul>
			<div class="section">
				<a href="product.php"><img src="images/cake_promo_2.jpg" alt="Image"/></a>
			</div>
		</div>
	</div>
	<div id="content">
		<div>
			<h1>Our Bakery Shops</h1>
			<ul>
				<li>
					<div>
						<div>
							<h2><a href="https://order.carlosbakery.com">Carlo's Bakery</a></h2>
							<p>625 8th Avenue, Kuala Lumpur, Malaysia 63000 (42nd St)</p><br/><br/>
							<a href="https://order.carlosbakery.com" class="view">visit</a>
						</div>
						<a href="https://order.carlosbakery.com"><img src="images/shop1.jpg" alt="Image" /></a>
					</div>
				</li>
				<li>
					<div>
						<div>
							<h2><a href="https://www.tiffanysbakeryphilly.com/">Tiffany's Bakery Philly</a></h2>
							<p>856 NO18 Ampang, Kuala Lumpur, Malaysia 63000</p><br/><br/><br/><br/>
							<a href="https://www.tiffanysbakeryphilly.com/" class="view">visit</a>
						</div>
						<a href="https://www.tiffanysbakeryphilly.com/"><img src="images/shop2.jpg" alt="Image" /></a>
					</div>
				</li>
				<li>
					<div>
						<div>
							<h2><a href="http://www.rocklandbakery.com">Rockland Bakery</a></h2>
							<p>Jln Kuching, No22, Kuala Lumpur, Malaysia 63000</p><br/><br/><br/><br/>
							<a href="http://www.rocklandbakery.com" class="view">visit</a>
						</div>
						<a href="http://www.rocklandbakery.com"><img src="images/shop3.jpg" alt="Image" /></a>
					</div>
				</li>
				<li>
					<div>
						<div>
							<h2><a href="https://www.magnoliabakery.com/">Magnolia Bakery</a></h2>
							<p>Jln Cahaya, No 45, Kuala Lumpur, Malaysia 63000</p><br/><br/><br/><br/>
							<a href="https://www.magnoliabakery.com/" class="view">visit</a>
						</div>
						<a href="https://www.magnoliabakery.com/"><img src="images/shop4.jpg" alt="Image" /></a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div id="footer">
		<div class="section">
			<div>
				<div class="aside">
					<div>
						<div>
							<b>Too <span>BUSY</span> to shop?</b>
							<a href="signup.php">Sign up for free</a>
							<p>and we&#39;ll deliver it on your doorstep</p>
						</div>
					</div>
				</div>
				<div class="connect">
					<span>Follow Us</span>
					<ul>
						<li><a href="http://facebook.com/diko.coskun" target="_blank" class="facebook">Facebook</a></li>
						<li><a href="http://twitter.com/diko.coskun" target="_blank" class="twitter">Twitter</a></li>
						<li><a href="#" class="subscribe">Subscribe</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div id="featured">
			<ul>
				<li class="first">
					<a href="products/pastries.php"><img src="images/bottom1.jpg" alt="Image" /></a>
					<h2><a href="products/pastries.php">HAMENTASHEN</a></h2>
				</li>
				<li>
					<a href="products/pastries.php"><img src="images/bottom2.jpg" alt="Image" /></a>
					<h2><a href="products/pastries.php">LOBSTER TAIL</a></h2>
				</li>
				<li>
					<a href="products/bread.php"><img src="images/bottom3.jpg" alt="Image" /></a>
					<h2><a href="products/bread.php">6 FT ROUND NO SEED</a></h2>
				</li>
				<li>
					<a href="products/pastries.php"><img src="images/bottom4.jpg" alt="Image" /></a>
					<h2><a href="products/pastries.php">PINEAPLE DANISH</a></h2>
				</li>
			</ul>
		</div>
		<div id="navigation">
			<div>
				<ul>
					<li class="first"><a href="index.php">help</a></li>
					<li><a href="about.php">about</a></li>
					<li><a href="contact.php">developers</a></li>
					<li><a href="#">privacy policy</a></li>
					<li><a href="#">terms of use</a></li>
					<li><a href="#">Copyright &copy; 2017-2018 Born 2 Bread All rights reserved</a></li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>