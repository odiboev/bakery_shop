<?php 
	include('back-end/server.php');

  if (isset($_SESSION['username'])) {
  	header('location: index.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Born 2 Bread | Sign Up</title>
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
						<a href="signup.php">My Account</a>
						<a href="signin.php">Sign in</a>
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
			<div id="account">
				<div>
					<form method="post" action="signup.php">
						<?php include('back-end/errors.php'); ?>
						<span>SIGN-UP</span>
						<table>
							<tr>
								<td><label for="email">E-mail</label></td>
								<td><input type="email" name="email" id="email" /></td>
							</tr>
							<tr>
								<td><label for="username">User Name</label></td>
								<td><input type="text" name="username" id="login" /></td>
							</tr>
							<tr>
								<td><label for="password">Password</label></td>
								<td><input type="password" name="password_1" id="password" /></td>
							</tr>
							<tr>
								<td><label for="password_2">Confirm<br />Password</label></td>
								<td><input type="password" name="password_2" id="confirmpass" /></td>
							</tr>
						</table>
						<input type="submit" value="Sign-up" class="submitbtn" name="reg_user"/>
					</form>
				</div>
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