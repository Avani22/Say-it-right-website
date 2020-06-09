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
	
	<section>
		<div class="container" style="width: 70%; height:80%; padding-left: 15%; padding-top:10%;">	

					<form name="admin">
					
						<div style="float:left; width: 50%"> 
						Conferences <br><br>
						<input type="text" name="conferences" class="box" placeholder="Enter title for conference" ><br><br><br>
						<input type="text" name="description" class="box" placeholder="Enter the description" ><br><br><br>
						<input type="date" name="date" class="box" placeholder="Enter the date" ><br><br><br>					
						<input type="text" name="sede" class="box" placeholder="Enter the location" ><br><br><br>
						<input type="text" name="confirmation" class="box" placeholder="Confirmation" ><br><br><br>
						<button type="submit" name="add" class="button_s" style="float:left; width: 20%; height:5%" formaction="<?php echo base_url(); ?>index.php/Welcome/conferences_admin_insert_data" formmethod="post">ADD</button><br><br>


						<button type="submit" name="delete" class="button_s" style="float:left; width: 20%; height:5%" formaction="<?php echo base_url(); ?>index.php/Welcome/conferences_delete_data"formmethod="post">DELETE</button><br><br>

						<button type="submit" name="update" class="button_s" style="float:left; width: 20%; height:5%" formaction="update_conf.php" formmethod="post">UPDATE</button><br><br>
					</div>


						<div style="float:right; width: 50%">

						Events <br><br>
						<input type="text" name="events" class="box" placeholder="Enter title for events" ><br><br><br>
						<input type="text" name="description" class="box" placeholder="Enter the description" ><br><br><br>
						<input type="date" name="date" class="box" placeholder="Enter the date" ><br><br><br>					
						<input type="text" name="sede" class="box" placeholder="Enter the location" ><br><br><br>
						<input type="text" name="confirmation" class="box" placeholder="Confirmation" ><br><br><br>
						<button type="submit" name="add" class="button_s" style="float:left; width: 20%; height:5%" formaction="insert_events.php" formmethod="post">ADD</button><br><br>
						<button type="submit" name="delete" class="button_s" style="float:left; width: 20%; height:5%" formaction="delete_events.php" formmethod="post">DELETE</button><br><br>
						<button type="submit" name="update" class="button_s" style="float:left; width: 20%; height:5%" formaction="update_events.php" formmethod="post">UPDATE</button><br><br>

					</div>
					</form>		
		</div>
	</section>

	<footer>
		Copyright &#169 2019 All rights reserved | this web is made with &#9825 DiazApps <br>
	</footer>
</div>
</body>
</html>