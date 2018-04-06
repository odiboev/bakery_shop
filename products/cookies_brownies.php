<?php 
  session_start(); 

  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: ../signin.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Born 2 Bread | The Cookies and Brownies</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
</head>
<body>
	<div id="header">
		<div>
			<div>
				<div id="logo">
					<a href="index.php"><img src="../images/logo.gif" alt="Logo"/></a>
				</div>
				<div>
					<div>
						<?php  if (isset($_SESSION['username'])) : ?>
						<a href="../profile.php?id=<?php echo $_SESSION['username']; ?>"><?php echo $_SESSION['username']; ?></a>
						<a href="../index.php?logout='1'">Sign out</a>
						<?php else: ?>
						<a href="../signup.php">My Account</a>
						<a href="../signin.php">Sign in</a>
						<?php endif; ?>
					</div>
					<form action="#">
						<input type="text" id="search" maxlength="30" />
						<input type="submit" value="" id="searchbtn" />
					</form>
				</div>
			</div>
			<ul>
				<li><a href="../index.php">Home</a></li>
				<li><a href="../shop.php">Bakery</a></li>
				<li class="current"><a href="../product.php">Products</a></li>
				<li><a href="../services.php">Services</a></li>
				<li><a href="../about.php">About Us</a></li>
				<li><a href="../contact.php">Contact Us</a></li>
			</ul>
			<div class="section">
				<a href="../product.php"><img src="../images/cake_promo_2.jpg" alt="Image"/></a>
			</div>
		</div>
	</div>
	<div id="content">
		<div>
			<h1>The Cookies/Brownies</h1>
			<ul>
				<li>
					<div>
					  <div>
						  <h2><a href="#">BROWNIE SMILE</a></h2>
						  <p>PRODUCT NO:257						  </p>
						  <p>&nbsp; </p>
						  
						  <p>&nbsp;</p>
						  
						  <a href="#" class="view">Order</a>
					  </div>
						<a href="#"><img src="../images/1.1.1.jpg" alt="Image" /></a>
					</div>
			  </li>
				<li>
					<div>
						<div>
							<h2><a href="#">DIET FRUIT X</a></h2>
                          <p>PRODUCT NO: 335</p>
                          <p>&nbsp; </p>
                          <p>&nbsp;</p>
                      <a href="#" class="view">Order</a> </div>
						<a href="#"><img src="../images/2.2.2.jpg" alt="Image" /></a>
					</div>
				</li>
				<li>
					<div>
						<div>
						  <h2><a href="#">PINEAPLE DANISH</a></h2>
                          <p>PRODUCT NO:805 </p>
                          <p>&nbsp; </p>
                          <p>&nbsp;</p>
                        <a href="#" class="view">Order</a> </div>
						<a href="#"><img src="../images/3.3.jpg" alt="Image" /></a>
					</div>
				</li>
				<li>
					<div>
						<div>
						  <h2><a href="#">LOBSTER TAIL</a></h2>
                          <p>PRODUCT NO:508 </p>
                          <p>&nbsp; </p>
                          <p>&nbsp;</p>
                        <a href="#" class="view">Order</a> </div>
						<a href="#"><img src="../images/4.4.jpg" alt="Image" /></a>
					</div>
				</li>
				<li>
					<div>
						<div>
						  <h2><a href="#">CROSSAINT PLAIN</a></h2>
                          <p>PRODUCT NO:300 </p>
                          <p>&nbsp; </p>
                          <p>&nbsp;</p>
                        <a href="#" class="view">Order</a> </div>
						<a href="#"><img src="../images/5.5.jpg" alt="Image" /></a>
					</div>
				</li>
				<li>
					<div>
						<div>
							<h2><a href="#">APPLE STRUDEL STRIP</a></h2>
                          <p>PRODUCT NO:774 </p>
                          <p>&nbsp; </p>
                          <p>&nbsp;</p>
                        <a href="#" class="view">Order</a> </div>
						<a href="#"><img src="../images/6.6.jpg" alt="Image" /></a>
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
							<a href="../signup.php">Sign up for free</a>
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
					<a href="pastries.php"><img src="../images/bottom1.jpg" alt="Image" /></a>
					<h2><a href="products/pastries.php">HAMENTASHEN</a></h2>
				</li>
				<li>
					<a href="pastries.php"><img src="../images/bottom2.jpg" alt="Image" /></a>
					<h2><a href="pastries.php">LOBSTER TAIL</a></h2>
				</li>
				<li>
					<a href="bread.php"><img src="../images/bottom3.jpg" alt="Image" /></a>
					<h2><a href="bread.php">6 FT ROUND NO SEED</a></h2>
				</li>
				<li>
					<a href="pastries.php"><img src="../images/bottom4.jpg" alt="Image" /></a>
					<h2><a href="pastries.php">PINEAPLE DANISH</a></h2>
				</li>
			</ul>
		</div>
		<div id="navigation">
			<div>
				<ul>
					<li class="first"><a href="../index.php">help</a></li>
					<li><a href="../about.php">about</a></li>
					<li><a href="../contact.php">developers</a></li>
					<li><a href="#">privacy policy</a></li>
					<li><a href="#">terms of use</a></li>
				</ul>
				<p>Copyright &copy; 2016-2017 Bakery Delivery All rights reserved</p>
			</div>
		</div>
	</div>
</body>
</html>