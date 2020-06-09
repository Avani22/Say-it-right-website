<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Say it Right</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/CSS/sayitright.css">

	<style>
	
	#showcase{
	 	min-height: 400px;
	 	
	 	color: white;
	 	text-align: left;
	 }
	 #showcase p{
	 	margin-top: 100px;
	 	font-size: 20px;
	 	margin-bottom: 10px;
	 	text-align: center;

	 }

	 #showcase b{
	 	margin-top: 100px;
	 	font-size: 30px;
	 	margin-bottom: 10px;
	 	text-align: center;

	 }

	 #boxes h1{
	 	
	 	padding-left: 300px;
	 	color: black;

	 }

	 #boxes{
	 	margin-top:30px;
	 	float: center;
	 	border-width: medium;
	 	padding: 20px;
	 	padding-left: 100px;
	 	background-color: white;
	 }

	 #boxes .box{
	 	float: left;
	 	height: 40%;
	 	width: 20%; 
	 	color: black;
	 	padding:20px;
	 	border-style: solid;
	 	border-width: thin;
	 	border-color: grey;
	 	margin: 30px;
	 }

	 #boxes .box img{
	 	width: 180px;
	 	height: 250px;
	 }
	 body{
	 	background-color:white;
	 }
		
		</style>


</head>
<body>
	<div id="wrapper">
	<header>
		<div class="container">
			<div id="branding">
			<img src="<?php echo base_url(); ?>assets/images/logo.png">	
			
			<nav>
				<ul>
					   	  <li><a href="<?php echo base_url();?>index.php/Welcome/index/index.php">Home</a></li>
					  <li><a href="<?php echo base_url(); ?>index.php/Welcome/aboutus/aboutus.php">About Us</a></li>
  					  <li><a href="http://avanichandorkar.uta.cloud/">Blog</a></li>
  					  <li><a href="<?php echo base_url(); ?>index.php/Welcome/buy/buy.php">Buy From Us</a></li>
  					  <li><a href="<?php echo base_url(); ?>index.php/Welcome/contactus/contactus.html">Contact Us</a></li>
  					  <li><a href="<?php echo base_url(); ?>index.php/Welcome/signup/signup.php">Signup</a></li>
  					  <li><a href="<?php echo base_url(); ?>index.php/Welcome/login/login.html">Login</a></li>
				</ul>
			</nav>
		</div>

		</div>
	</header>
	<section id="showcase">
		<div class="container">
			<div style="height: 60%;">
				<p> Home <i class="fas fa-arrow-right"></i> <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> Buy From Us
				<br>  <b> BUY FROM US 
   				</p>
   			</div>
			</div>
	</section>



	<section id="boxes">
		<div class="container">
			<h1> Buy From Us </h1>
			<div class="box">
				<img src="<?php echo base_url(); ?>assets/images/franela1.jpg"><br>	
				$24.99<br>
				Some quick example text to build on the card title and make up the bulk of the card's content.
				<form method="post" action="<?php echo base_url(); ?>index.php/Welcome/alert">
				    <button type="submit" class="button_1">ADD TO CART </button>
				</form>
			</div>

			<div class="box">
				<img src="<?php echo base_url(); ?>assets/images/taza1.png"><br>
				$24.99<br>
				Some quick example text to build on the card title and make up the bulk of the card's content.
				<form method="post" action="<?php echo base_url(); ?>index.php/Welcome/alert">
					<button type="submit" class="button_1">ADD TO CART </button>
				</form>
			</div>

			<div class="box">
				<img src="<?php echo base_url(); ?>assets/images/franela2.jpg"><br>
				$24.99<br>
				Some quick example text to build on the card title and make up the bulk of the card's content.
				<form method="post" action="<?php echo base_url(); ?>index.php/Welcome/alert">
					
					<button type="submit" class="button_1">ADD TO CART </button>
				</form>				
			</div>

			<div class="box">
				<img src="<?php echo base_url(); ?>assets/images/taza2.png"><br>
				$24.99<br>
				Some quick example text to build on the card title and make up the bulk of the card's content.
				<form method="post" action="<?php echo base_url(); ?>index.php/Welcome/alert">
					<button type="submit" class="button_1">ADD TO CART </button>
				</form>
			</div>

			<div class="box">
				<img src="<?php echo base_url(); ?>assets/images/franela3.jpg"><br>
				$24.99<br>
				Some quick example text to build on the card title and make up the bulk of the card's content.
				<form method="post" action="<?php echo base_url(); ?>index.php/Welcome/alert">
					<button type="submit" class="button_1">ADD TO CART </button>
				</form>
			</div>

			<div class="box">
				<img src="<?php echo base_url(); ?>assets/images/taza3.png"><br>
				$24.99<br>
				Some quick example text to build on the card title and make up the bulk of the card's content.
				<form method="post" action="<?php echo base_url(); ?>index.php/Welcome/alert">
					<button type="submit" class="button_1">ADD TO CART </button>
				</form>
			</div>
		</div>
	</section>


	<section id="newsletter">
		<div class="container">
			<h1> View Shopping Cart </h1>
			<form>
				<button type="submit" class="button_1">Submit </button>
			</form>
			<br>
			<p><br><br> You can see the products that you added to your cart </p>
		</div>
	</section>



	<footer>
		<i>Copyright &copy; 2019 All rights reserved | This web is made with <i class="far fa-heart"></i> <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> by DiazApps <br></i>
	</footer>
</div>
</body>
</html>
