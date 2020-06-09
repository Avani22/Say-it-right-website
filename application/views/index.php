<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Say it Right</title>
	<meta name="viewport" content="width=device-width">
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/CSS/sayitright.css">
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
  					  <li><a href="<?php echo base_url(); ?>index.php/Welcome/login/login.html">Login</a></li>
  					  
				</ul>
			</nav>
		</div>

		</div>
	</header>
	<section id="showcase">
		<div class="container">
			<div style="width: 100%;">
   			<div style="float:left; width: 50%"> 
   				<img src="<?php echo base_url(); ?>assets/images/phone.png">

  			 </div>
   			<div style="float:right; width: 50%">

			<h1> For good <br> communication <br> <span class="highlight">Say it Right </span> is <br> a tool that <br> you should use </h1>
			<p> You can see our video tutorial of use with just pressing this <br>button</p> 
			<i class="far fa-play-circle fa-3x"></i>
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">    Watch the Video

   			</div>
			</div></div>

	
	</section>

	<section id="newsletter">
		<div class="container">
			<h1> Subscribe Our Newsletter</h1>
			<form name="subscribe" action="" method="post">
				<input type="email" class="box" name="email" placeholder="Enter email address" required >
				<button type="submit" name="button_pressed" value="1" class="button_1">Subscribe </button>
				<!--<button type="submit" class="button_1">Subscribe </button>-->
			
				
			</form>
			<br>
			<p><br><br> We won't send any kind of spam </p>
		</div>
	</section>


	<footer>
		<i>Copyright &copy; 2019 All rights reserved | This web is made with <i class="far fa-heart"></i> <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> by DiazApps <br></i>
	</footer>

<?php

if(isset($_POST['button_pressed']))
{
    $to      = 'avanichandorkar22@gmail.com';
    $subject = 'project4';
    $message = 'hello';
    $headers = 'From: manasi1000@gmail.com' . "\r\n" .
        'Reply-To: manasi1000@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

    echo 'Email Sent.';
}

?>


<script>
	function valid()
	{
		 var email = document.forms["subscribe"]["email"]; 
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
    	return true;
	}

</script>

</div>
</body>
</html>
