<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Say it Right</title>
	<meta name="viewport" content="width=device-width">
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/CSS/sayitright.css">


	<style>
	#wrapper{
		background-color: white;
	}
	#branding{
		background-color: darkblue;
	}

	.ab{
	background-color: darkblue;
	color: white;
	margin: 100px;
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

 	#info{
 	padding: 15px;
 	color:black;
 	background: white;
	 }

	 #info h1{
	 	float: left;
	 	color: white;
	 }

	 #info p{
	 	
	 	color: white;
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
				<p> Home <i class="fas fa-arrow-right"></i> <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> About
				<br>  <b> ABOUT US 
   				</p>
   			</div>
			</div>

	
	</section>

	<section id="info">
		<div class="ab">
			<div class="container">

			<div style="float:right; width: 50%"> 
   				
   				<img src="<?php echo base_url(); ?>assets/images/about.png">

  			 </div>
   			<div style="float:left; width: 50%">

			<h4> ABOUT US </h4>
			<h1> Say it Right </h1><br><br><br>
			<p>Is an application for everyone. It is the first step to a good relationship. It is about identity, about the importance of my name, my culture. If you want to, I will help you yo Say it Right, so that you can address me correctly. </p>
		

   			</div>
		
		</div>
		</div>
		
		
	</section>


	<footer>
		<i>Copyright &copy; 2019 All rights reserved | This web is made with <i class="far fa-heart"></i> <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> by DiazApps <br></i>
	</footer>
</div>
</body>
</html>
