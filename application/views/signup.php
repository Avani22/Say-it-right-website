
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Say it Right</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/CSS/sayitright.css">
	<style>
	.ab{
	background-color: darkblue;
	color: white;
	margin: 100px;
}

.button_1{
	height: 34px;
	background: linear-gradient(to right, #3fcaff 0%, #a4ffb0 51%, #3fcaff 100%);
	border: none;
	padding-left: 20px;
	padding-right: 20px;
	color:black;
}


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

 #showcase img{
 	height: 95%;
 	width: 70%;
 	margin-top: 100px;
 }

 #showcase p{
 	font-size: 20px;
 }

#details{
	background-color: white;
	
	float: center;
	padding-left: 350px;
	padding-right: 350px;

}

#details form {
	margin: 100px;
	color: black;

}

#details  h1{
	
	text-align: 40px;
}

 #details form [type="individual"]{
 	padding: 4px;
 	height: 45px;
 	width: 100px;
 	margin-right: 50px;
 	
 	
 }

#details form [type="event"]{
 	padding: 4px;
 	height: 45px;
 	width: 100px;
 	margin-right: 50px;

 }

 #details form [type="business"]{
 	padding: 4px;
 	height: 45px;
 	width: 100px;

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
  					  <li><a href="<?php echo base_url(); ?>index.php/Welcome/contactus/contactus.php">Contact Us</a></li>
  					  <li><a href="<?php echo base_url(); ?>index.php/Welcome/signup/signup.php">Signup</a></li>
  					  <li><a href="<?php echo base_url(); ?>index.php/Welcome/login/login.php">Login</a></li>
				</ul>
			</nav>
		</div>

		</div>
	</header>
	<section id="showcase">
		<div class="container">
			<div style="height: 60%;">
				<p> Home <i class="fas fa-arrow-right"></i> <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> SIGN UP
				<br>  <b> SIGN UP 
   				</p>
   			</div>
			</div>
	</section>



	<section id="details">
		<div class="container">

			<form>
				<h1> Select the type of user </h1>
		
				<button type="individual" class="button_1 "formaction="<?php echo base_url(); ?>index.php/Welcome/individual/individual.php">INDIVIDUAL</button>
					<button type="event" class="button_1 "formaction="<?php echo base_url(); ?>index.php/Welcome/event/event.php">EVENT</button>

				<button type="business" class="button_1 "formaction="<?php echo base_url(); ?>index.php/Welcome/business/business.php">BUSINESS</button>

				
			</form>

		</div>
	</section>


	<footer>
		<i>Copyright &copy; 2019 All rights reserved | This web is made with <i class="far fa-heart"></i> <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> by DiazApps <br></i>
	</footer>
</div>
</body>
</html>
