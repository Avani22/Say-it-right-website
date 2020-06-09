
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
}

 #details form [type="email"]{
 	padding: 4px;
 	height: 25px;
 	width: 450px;
 	
 	
 }

  #details form [type="password"]{
 	padding: 4px;
 	height: 25px;
 	width: 450px;

 }

 
  #details form [type="submit"]{
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
				<p> Home <i class="fas fa-arrow-right"></i> <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> LOGIN
				<br>  <b> LOGIN 
   				</p>
   				 
   			</div>
			</div>
	</section>



	<section id="details">
		<div class="container">
			<?php $this->load->library('form_validation'); 
                                echo validation_errors(); 
                            ?>
            
			<form name="Register"  method="post" action="<?php echo base_url(); ?>index.php/Welcome/login_validation">

   				<input name="email"  class="box" placeholder="Enter Email" ><br><br>
   				<input name="password" class="box" placeholder="*********"><br><br>

				<button value="Login" type="submit" class="button_1">SEND  </button>

				
			</form>

		</div>
	</section>


	<footer>
		<i>Copyright &copy; 2019 All rights reserved | This web is made with <i class="far fa-heart"></i> <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> by DiazApps <br></i>
	</footer>

	<script> 
function Valid()								 
{ 
	var email = document.forms["Register"]["email"]; 
	var password = document.forms["Register"]["password"]; 

	  if (email.value == "")                                   
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 

	if (email.value.indexOf("@", 0) < 0)				 
	{ 
		window.alert("Please enter a valid e-mail address."); 
		email.focus(); 
		return false; 
	} 

	if (password.value == "")					 
	{ 
		window.alert("Please enter your password"); 
		password.focus(); 
		return false; 
	} 


	return true; 
}
</script> 

</div>
</body>
</html>
