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
	<title>Born 2 Bread | About Us</title>
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
				<li><a href="shop.php">Bakery</a></li>
				<li><a href="product.php">Products</a></li>
				<li><a href="services.php">Services</a></li>
				<li class="current"><a href="about.php">About Us</a></li>
				<li><a href="contact.php">Contact Us</a></li>
			</ul>
			<div class="section">
				<a href="product.php"><img src="images/cake_promo_2.jpg" alt="Image"/></a>
			</div>
		</div>
	</div>
	<div id="content">
		<div id="services" class="home" >
			<div class="aside">
				<h1>Abour Us</h1><br/>
				<span>Born 2 Bread</span>
				<p>
					Born 2 Bread is an online service that helps the people of the Klang Valley to easily order freshly baked bread and pastry products that is delivered right to their doorsteps. This idea grew to include other services such as a weekly subscriptions of selected baked goods and also DIY baking sets.
					Born 2 Bread began baking confectionery products in low volume bakery facilities. The original handmade breads, cakes, sandwiches have always used the finest quality. We use 100% natural and healthy ingredients.
				</p><p>
					We provide good quality products with very affordable prices that cater to every section of society.
				</p>
				<div>
					<h3>Marketing Objectives</h3>
					<ol>
						<li>To be leading a reputable bakery.</li>
						<li>To prove good quality products.</li>
						<li>To be competitive in the market.</li>
					</ol>
				</div>
				<hr/><br/><span>Our Vision</span>
				<p>
					Born 2 Bread will be living proof that caring, integrity, hard work and<br/>innovation at levels create success.
				</p><hr/><br/>
				<span>Our Mission</span>
				<p>
					Our mission is to enhance our customers. We will do this by providing the highest quality bakery products and the best possible services to the food industry. We will continuously improve all aspects of our business in order to sustain the long-term success of our customers and ourselves.
				</p>
			</div><br/><br/><br/><br/><br/>
			<div class="sectionn">
				<center>
					<a href="images/chart.png" target="_blank"><img src="images/logo2.png" width="331" height="110"></a>
					<h2>ORGANISATIONAL CHART</h2>
					<a href="images/chart.png" target="_blank"><img src="images/chart.png" width="424" height="370"></a>
				</center>
			</div>
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