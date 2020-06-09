<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>

<style>
 #showcase img{
 	height: 45%;
 	width: 40%;
 	margin-top: 100p
 	margin-left: 400px;
 }

 #showcase h1{
 	font-size: 15px;
 	padding-top: 100px;
 }

 #showcase p{
 	color: red;
 }

  .button_1{
	height: 34px;
	background: lightblue;
	border: none;
	padding-left: 20px;
	padding-right: 20px;
	color:black;
	margin: 10px;
}
 footer{
 	padding:  40px; 
 	color: white;
 	
 	padding-left: 165px;

 }
 </style>


</head>
<body>
		<section id="showcase">
		<div class="container">
			<div style="width: 100%;">
   			<div style="float:left; width: 50%"> 
   				<img src="<?php echo base_url(); ?>assets/images/franela1.jpg"><br>	

  			 </div>
   			<div style="float:right; width: 50%">

			<h1> Product Quantity </h1>

		

			<form method="post" action="<?php echo base_url(); ?>index.php/Welcome/alert_insert">
			<input  name="quantity" type="number"  class="box" min="0" max="50" required></textarea>
			<button type="submit" class="button_1">ADD TO CART </button>
		    </form>
			<p> Note: Some quick example text to build on the card title and make up the bulk of the card's content!</p> 
			

   			</div>
			</div></div>

	
	</section>


<footer>
		<hr/>
		<form method="get" action="<?php echo base_url(); ?>index.php/Welcome/buy/buy.php">
			<button type="submit" class="button_1">CLOSE</button>
		</form>
		
	</footer>
</body>
</html>
