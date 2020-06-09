<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Say it Right</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/CSS/sayitright.css">
	<style>

	body{
		background-color: white;
	}
	#conf table, th, td, tr {
  border: solid 1pt black;
  border-collapse: collapse;
  color: black;
  padding: 10px;
  margin-bottom: 40px;


}

#conf h1{
	margin-top: 100px;
	
	text-align: center;
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

	<section id="conf">
		<div class="container">
			<h1>List of Conferences</h1>

<table style="width:100%">

  <tr>
   
    <th>Conferences</th> 
    <th>Description</th>
    <th>Date</th> 
    <th>sede</th>
    <th>Confirmtion</th> 
 
  </tr>
					 			
<?php

$query = $this->db->query('SELECT conferences, description, date, sede, confirmation FROM conferences'); 
  
foreach ($query->result_array() as $row)
 { ?> 
 
	<tr>
     <td> <?php echo $row['conferences']; ?></td>
      <td> <?php echo $row['description']; ?></td>
     <td> <?php  echo $row['date']; ?></td>
     <td> <?php echo $row['sede']; ?></td>
    <td> <?php   echo $row['confirmation']; ?></td>
    </tr>

<?php  
} ?>

</table>

	</div>
	</section>

	<section>
		<form name="Register" method="post" action="<?php echo base_url(); ?>index.php/Welcome/conferences_insert_data">
		ADD CONFERENCE <br><br>
						<input type="text" name="conferences" class="box" placeholder="Enter title for conferences" ><br><br><br>
						<input type="text" name="description" class="box" placeholder="Enter the description" ><br><br><br>
						<input type="date" name="date" class="box" placeholder="Enter the date" ><br><br><br>					
						<input type="text" name="sede" class="box" placeholder="Enter the location" ><br><br><br>
						<input type="text" name="confirmation" class="box" placeholder="Confirmation" ><br><br><br>
						<button type="submit" name="add" class="button_s" style="float:left; width: 20%; height:5%">ADD</button><br><br>
		</form>
	</section>
	


	<footer>
		<i>Copyright &copy; 2019 All rights reserved | This web is made with <i class="far fa-heart"></i> <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> by DiazApps <br></i>
	</footer>
</div>
</body>
</html>