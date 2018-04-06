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
	<title>Born 2 Bread | Home</title>
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
				<li class="current"><a href="index.php">Home</a></li>
				<li><a href="shop.php">Bakery</a></li>
				<li><a href="product.php">Products</a></li>
				<li><a href="services.php">Services</a></li>
				<li><a href="about.php">About Us</a></li>
				<li><a href="contact.php">Contact Us</a></li>
			</ul>
			<div id="section">
				<ul>
					<li><a href="products/bread.php">Breads</a></li>
					<li><a href="products/pastries.php">Pastries</a></li>
					<li><a href="products/cookies_brownies.php">Cookies</a></li>
					<li><a href="products/cookies_brownies.php">Brownies</a></li>
					<li><a href="product.php">Sandwiches</a></li>
					<li><a href="product.php">Donuts</a></li>
					<li><a href="product.php">Cakes</a></li>
					<li><a href="product.php">Muffins</a></li>
					<li><a href="product.php">Daily Promo</a></li>
				</ul>
				<a href="product.php"><img src="images/cake_promo.jpg" alt="Image"/></a>
			</div>
		</div>
</div>
	<div id="content">
		<div class="home">
			<div class="aside">
				<h1>Welcome</h1>
				<p>Born 2 Bread is an online service that helps the people of the Klang Valley to easily order freshly baked bread and pastry products that is delivered right to their doorsteps. This idea grew to include other services such as a weekly subscriptions of selected baked goods and also DIY baking sets.</p><br/>
				<div id="visitshop">
					<div><br/><br/><br/><br/><br/><br/>
						 <a href="services.php" class="visit">services</a>
					</div>
				</div>
			</div>
			<div class="section">
				<div>
					<h2>About Us</h2>
					<hr/>"Baking fresh daily for superior products execution of creative innovation."<hr/>
						<p>Born 2 Bread began baking confectionery products in low volume bakery facilities. The original handmade breads, cakes, sandwiches have always used the finest quality. We use 100% natural and healthy ingredients. </p>
				</div>
				<ul>
					<li class="first">
						<a href="index.php"><img src="images/homecake1.jpg" alt="Image" /></a>
					</li>
					<li>
						<a href="index.php"><img src="images/homecake2.jpg" alt="Image" /></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div id="footer">
		<div class="home">
			<div>
				<div class="aside">
					<div class="signup">
						<div>
							<b>Too <span>BUSY</span> to shop?</b>
							<a href="signup.php">Sign up for free</a>
							<p>and we&#39;ll deliver it on your doorstep</p>
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
				<div class="section">
					<div>
						<div>
							<h3><a href="product.php">Daily Promo</a></h3>
							<h4>Special Delivery!!!</h4>Our own fresh baked dinner rolls dozen <strong>FREE</strong> with rm26 purchase.<p><h3><strong><a href="product.php">HURRY UP!!!</a></strong></h3> <hr/>Exclusive Savings offered only to our subscribers.</p>
						</div>
					</div>
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