<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Say it Right</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/CSS/sayitright.css">
	<style>


#branding img{
	height: 10%;
	width:9%;

}
body{
	background-color: white;
}

.button_1{
	height: 34px;
	background: linear-gradient(to right, #3fcaff 0%, #a4ffb0 51%, #3fcaff 100%);
	border: none;
	padding-left: 20px;
	padding-right: 20px;
	color:black;
	margin: 10px;
}

#info {
	padding: 20px;
	margin: 10px;
}

#info img{
height: 9%;
	width:18%;
}



#info h1{
	margin-left: 550px;
}

table, th, td, tr {
  border: none;
  
  color: black;

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

<section id="info">
		<div class="ab">
			<h1 > Buy From Us </h1>
			<div class="container">

			<div style="float:right; width: 50%"> 
			<form name="Register" method="post" action="<?php echo base_url(); ?>index.php/Welcome/info_insert_data">
				<table style="width:100%">

					  <tr>
					   
					    <th>Units</th> 
					    <th>Price</th>
					  </tr>
					 

					
					  <tr>
					    <td ><img src="<?php echo base_url(); ?>assets/images/taza1.png"></td>
					    <td> <?php   $query = $this->db->query('SELECT quantity FROM products ORDER BY product_id DESC LIMIT 1');
						$row = $query->row();
						echo $row->quantity;?></td>
					  


					    <td><?php   $query = $this->db->query('SELECT quantity FROM products ORDER BY product_id DESC LIMIT 1');
						$row = $query->row();
						echo $row->quantity*24.99;?></td>



			
					  </tr>
					
					  

					</table>

   				

  			 </div>

   			<div style="float:left; width: 50%">

   		  
			<h3> Contact Information </h3>
				<input name="email"  class="box" placeholder="Enter Email" required><br><br>

			<h3> Shipping Address </h3>
				<input name="firstname"  class="box" placeholder="Enter first name" required><br><br>
   				<input name="lastname"  class="box" placeholder="Enter last name" required><br><br>
				<input name="address"  class="box" placeholder="Address" required><br><br>
				<input name="apt"  class="box" placeholder="Enter apartment, suite, etc"><br><br>
				<input name="city"  class="box" placeholder="Enter city" required><br><br>
				
			
				
   			</div>
		 
		<button type="submit" class="button_1">Place Order </button>
		</form>
		</div>
		</div>
		
		
	</section>

	<footer>
		<i>Copyright &copy; 2019 All rights reserved | This web is made with <i class="far fa-heart"></i> <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> by DiazApps <br></i>
	</footer>
</div>
</body>
</html>