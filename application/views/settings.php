<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Say it Right</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/CSS/sayitright.css">
	<style>
	#details h1{
	margin-left:-450px;
 	text-align: center;
 	color: black;
}
body{
	background-color: white;
	font-family: verdana, arial, sans-serif;
}

 #details .box{
	height: 28px;
	width: 300px;
}

.profile{
	margin:60px;
float:left;
}

.profileinfo{
	margin: 50px;
	float:left;
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
					       
					 	  <li><a href="<?php echo base_url();?>index.php/Welcome/home/home.php">Home</a></li>
					  <li><a href="<?php echo base_url();?>index.php/Welcome/conferences/conferences.php">Conferences</a></li>
  					  <li><a href="<?php echo base_url();?>index.php/Welcome/events/events.php">Events</a></li>
  					  <li><a href="<?php echo base_url();?>index.php/Welcome/myconf/myconf.php">My Conferences</a></li>
  					  <li><a href="<?php echo base_url();?>index.php/Welcome/myevents/myevents.php">My Events</a></li>
  					  <li><a href="<?php echo base_url();?>index.php/Welcome/settings/settings.php">Settings</a></li>
				</ul>
			</nav>
		</div>

		</div>
	</header>

	<section id="details">
		<div class="container">
			<h1> Welcome to your profile</h1>
			
	
			
			<form action="" method="post"  >
			<div class="profile">
			<div style="float:left; width: 50%"> 
				<img src="<?php echo base_url(); ?>assets/images/user.jpg"><br>
   				
   				<button type="submit" class="button_1">CHANGE IMAGE</button>
  			 </div>
  			</div>

  			<div class=" profileinfo">

   			<div style="float:right; width: 50%">
 
Firstname: &nbsp
<input type="text" name="firstname" value="<?php   $query = $this->db->query('SELECT firstname FROM user LIMIT 1');
						$row = $query->row();
						echo $row->firstname;?>"><br><br>

Lastname: &nbsp
<input type="text" name="lastname" value="<?php   $query = $this->db->query('SELECT lastname FROM user LIMIT 1');
						$row = $query->row();
						echo $row->lastname;?>"><br><br>
School: &nbsp
<input type="text" name="school" value="<?php   $query = $this->db->query('SELECT school FROM user LIMIT 1');
						$row = $query->row();
						echo $row->school;?>"><br><br>
Work: &nbsp
<input type="text" name="work" value="<?php   $query = $this->db->query('SELECT work FROM user LIMIT 1');
						$row = $query->row();
						echo $row->work;?>"><br><br>
Email: &nbsp
<input type="text" name="email" value="<?php   $query = $this->db->query('SELECT email FROM user LIMIT 1');
						$row = $query->row();
						echo $row->email;?>"><br><br>
Password: &nbsp
<input type="text" name="password" value="<?php   $query = $this->db->query('SELECT password FROM user LIMIT 1');
						$row = $query->row();
						echo $row->password;?>"><br><br>
				<button type="submit" class="button_1">SAVE CHANGES</button>

   			</div>	
				</div>
			</form>

		</div>
	</section>


		<footer>
		<i>Copyright &copy; 2019 All rights reserved | This web is made with <i class="far fa-heart"></i> <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> by DiazApps <br></i>
	</footer>
</div>
</body>
</html>