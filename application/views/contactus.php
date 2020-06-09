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
 #details{
	background-color: white;

}

#details form {
	margin: 100px;


 
}

 #details form [type="firstname"]{
 	padding: 4px;
 	height: 25px;
 	width: 450px;
 	margin-right: 15px;
 }

  #details form [type="lastname"]{
 	padding: 4px;
 	height: 25px;
 	width: 450px;

 }

 #details form [type="telephone"]{
 	padding: 4px;
 	height: 25px;
 	width: 450px;
 	margin-right: 300px;


 }
 #details form [type="message"]{
 	
 	height: 100px;
 	width: 450px;
 	
 }

  #details form [type="submit"]{
 	padding: 4px;
 	height: 45px;
 	width: 100px;
 	margin-bottom: 75px;
 	

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
				<p> Home <i class="fas fa-arrow-right"></i> <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> CONTACT
				<br>  <b> CONTACT US 
   				</p>
   			</div>
			</div>
	</section>



	<section id="details">
		<div class="container">
			<?php $this->load->library('form_validation'); 
                                echo validation_errors(); 
                            ?>
            <form name="Register" method="post" action="<?php echo base_url(); ?>index.php/Welcome/contactus_insert_data">
			


			<div style="float:left; width: 50%"> 
   				<input name="firstname"  class="box" placeholder="Enter your name" ><br><br>
   				<input name="lastname"  class="box" placeholder="Enter last name" ><br><br>
				<input name="telephone"   class="box" placeholder="Telephone"  >
				

  			 </div>


   			<div style="float:right; width: 50%">
   				<input name="message"  class="box" placeholder="Enter message" ><br><br>
				<button type="submit" class="button_1">SEND MESSAGE </button>

   			</div>	
				
			</form>

		</div>
	</section>

	<footer>
		<i>Copyright &copy; 2019 All rights reserved | This web is made with <i class="far fa-heart"></i> <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> by DiazApps <br></i>
	</footer>

	 <script type="text/javascript">
            function submitButtonClicked(){
                var firstname = document.getElementById("firstname");
                var lastname = document.getElementById("lastname");
                var telephone = document.getElementById("telephone");
                var message = document.getElementById("message");
               
                if(firstname.value === '' && lastname.value === '' && telephone.value === '' && message === ''){
                    firstname.classList.add("addValueToElement");
                    lastname.classList.add("addValueToElement");
                    telephone.classList.add("addValueToElement");
                    message.classList.add("addValueToElement");
                    return false;
                } else if(firstname.value !== '' && lastname.value === '' && telephone.value === '' && message === ''){
                    firstname.classList.remove("addValueToElement");
                    lastname.classList.add("addValueToElement");
                    telephone.classList.add("addValueToElement");
                    message.classList.add("addValueToElement");
                    return false;
                } else if(firstname.value !== '' && lastname.value !== '' && telephone.value === '') {
                    firstname.classList.remove("addValueToElement");
                    lastname.classList.remove("addValueToElement");
                    telephone.classList.add("addValueToElement");
                    message.classList.add("addValueToElement");
                    return false;
                } else if(firstname.value !== '' && lastname.value === '' && telephone.value !== '') {
                    firstname.classList.remove("addValueToElement");
                    lastname.classList.add("addValueToElement");
                    telephone.classList.add("addValueToElement");
                    message.classList.add("addValueToElement");
                    return false;
                } else if(firstname.value === '') {
                    firstname.classList.add("addValueToElement");
                    return false;
                } else if(lastname.value === ''){
                    lastname.classList.add("addValueToElement");
                    return false;
                } else if(telephone.value === ''){
                    email.classList.add("addValueToElement");
                    return false;
                } else if(message.value === ''){
                    message.classList.add("addValueToElement");
                    return false;
                } else {
                    firstname.classList.remove("addValueToElement");
                    lastname.classList.remove("addValueToElement");
                    telephone.classList.add("addValueToElement");
                    message.classList.add("addValueToElement");
                    return true;
                }                            
            }    
        </script>



</div>
</body>
</html>
