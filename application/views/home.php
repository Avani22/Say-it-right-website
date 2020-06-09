
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

	/*
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 15%;

}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}


*/
.con1 {
  padding: 2px 16px;
  background-color: #2A85E0;
  color:white;

}

.con3 {
  padding: 2px 16px;
  background-color: #1EB147;
  color:white;

}
.con5 {
  padding: 2px 16px;
  background-color: #FBD101;
  color:white;

}
.con7 {
  padding: 2px 16px;
  background-color: #6F7881;
  color:white;

}

.con2 p{
	text-align:right;
	padding-right: 20px;
}

.con4 p{
	text-align:right;
	padding-right: 20px;
}

.con6 p{
	text-align:right;
	padding-right: 20px;
}

.con8 p{
	text-align:right;
	padding-right: 20px;
}



.column {
  float: left;
  width: 17%;
  padding: 50px 10px 10px 50px;

}

/* Remove extra left and right margins, due to padding */
.row {
	margin: 0 -5px 10px 170px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */

.card{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  padding-top: 4px; 
  background-color: white;

}
.card1 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  padding-top: 4px; 
  background-color: #027DFF;
  color: white;
  border-radius: 10px;

}
.card2 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  padding-top: 4px; 
  background-color: #707682;
  color: white;
  border-radius: 10px;
}
.card3 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  padding-top: 4px; 
  background-color: #26AD47;
  color: white;
  border-radius: 10px;
}
.card4 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  padding-top: 4px; 
  background-color: #E2364A;
  color: white;
  border-radius: 10px;
}
.card5 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  padding-top: 4px; 
  background-color: #FFC40C;
  color: white;
  border-radius: 10px;
}
.card6 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  padding-top: 4px; 
  background-color: #16A7BB;
  color: white;
  border-radius: 10px;
}
.card7 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  padding-top: 4px; 
  background-color: #FCFCFC;
  border-radius: 10px;
  
}
.card8 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  padding-top: 4px; 
  background-color: #363A43;
  color: white;
  border-radius: 10px;
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
	<a href="<?php echo base_url();?>index.php/Welcome/login/login.php">Log out</a></li>

	<section id="conf">
		<div class="row">

		<div class="column">
			<div class="card">
				<div class="con1">
					  <i class="fas fa-globe-americas fa-3x"></i>
					  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">          <b>26 </b><br>
					  activities performed
				</div>
				<hr>
				<div class="con2">
				      <p>Total Made</p> 
				</div>
			</div>
			</div>
			

			<div class="column">
			<div class="card">
				<div class="con3">
					  <i class="fas fa-users fa-3x"></i>  
					  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">         <b>18 </b><br>
					  activities performed
				</div>
				<hr>
				<div class="con4">
				      <p>Conferences</p> 
				</div>
			</div>
			</div>

			<div class="column">
			<div class="card">
				<div class="con5">
					  <i class="fas fa-star fa-3x"></i>
					  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">         <b>8 </b><br>
					  activities performed
				</div>
				<hr>
				<div class="con6">
				      <p>Events</p> 
				</div>
			</div>
			</div>
			

			<div class="column">
			<div class="card">
				<div class="con7">
					  <i class="fas fa-trophy fa-3x"></i>
					  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">         <b>14 </b><br>
					  activities to carry out
				</div>
				<hr>
				<div class="con8">
				      <p>Activities</p> 
				</div>
			</div>
			</div>
		</div>

		<div class="row">
			  <div class="column">
			    <div class="card1">
			      <p>Header</p> <hr>
			      <p>Primary card title</p>
			      <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    </div>
			  </div>

			  <div class="column">
			    <div class="card2">
			         <p>Header</p> <hr>
			      <p>Secondary card title</p>
			      <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    </div>
			  </div>
			  
			  <div class="column">
			    <div class="card3">
			         <p>Header</p> <hr>
			      <p>Success card title</p>
			      <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    </div>
			  </div>
			  
			  <div class="column">
			    <div class="card4">
			         <p>Header</p> <hr>
			      <p>Danger card title</p>
			      <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    </div>
			  </div>
		</div>


		<div class="row">
			  <div class="column">
			    <div class="card5">
			         <p>Header</p> <hr>
			      <p>Warning card title</p>
			      <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    </div>
			  </div>

			  <div class="column">
			    <div class="card6">
			         <p>Header</p> <hr>
			      <p>Info card title</p>
			      <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    </div>
			  </div>
			  
			  <div class="column">
			    <div class="card7">
			         <p>Header</p> <hr>
			      <p>Light card title</p>
			      <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    </div>
			  </div>
			  
			  <div class="column">
			    <div class="card8">
			       <p>Header</p> <hr>
			      <p>Dark card title</p>
			      <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
