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
	<title>Born 2 Bread | Our Services</title>
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
				<li class="current"><a href="services.php">Services</a></li>
				<li><a href="about.php">About Us</a></li>
				<li><a href="contact.php">Contact Us</a></li>
			</ul>
			<div class="section">
				<a href="product.php"><img src="images/cake_promo_2.jpg" alt="Image"/></a>
			</div>
		</div>
	</div>
	<div id="content">
		<div id="services">
			<div class="aside">
				<h1>Our Services</h1>
				<span>A La Carte</span>
				<p><strong>Sweet of Fresh</strong><br>
			    * Our baked goods are so delicious; rarely do we find our customers leaving with leftovers! Our products are all freshly baked on site with the finest natural ingredients and contain no preservatives <hr/></p>
				<span>Subscription</span>
				<p><strong>"Sugar Booger" Card (Customer Rewards)</strong><br/>
					* Born 2 Bread offers the "Sugar Booger Card". When you stop in and purchase any baked goods, you will receive a "Sugar Booger Card". Be sure to have "Sugar Booger" Card punched every time you visit with a purchase in our store. Visit 10 times and receive a baked good of your choice.<br/><br/>
					<strong>"Bread Basket" (Customer Rewards)</strong><br/>
					* We also offer a monthly and weekly subscription based service called the "Bread Basket" where customer will receive different types of baked goods on a weekly or monthly basis.
				</p>
			</div>
			<div class="aside">
				<div><br/><br/>
					<span>DIY SET</span>
					<p>* We provide a DIY Set for people who want to take on their own. The set <br/>includes all the ingrediants and instructions on how to bake on their own. <br/> 
					* The set includes all the ingrediants and instructions on how to particular  <br/>type of breads or cakes.<hr/></p>
					<span>Delivery Policy</span>
				<p>* We will provide you with an estimate of time required for delivery. At this<br/> time, we are happy to deliver any special orders within 24 hours. 
				<br/><br/>* By having using this &quot;many-to-many&quot;, we ensure a variety of quality baked <br/>products delivered fresh to our customers.</p><hr/>
				</div>
			</div><div><div>
					<center>
						<a href="index.php" target="_blank"><img src="images/logo2.png" width="331" height="110"></a>
	</center></div></div>
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