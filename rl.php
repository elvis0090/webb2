<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Reservation</title>
    <!-- favicon
  ================================================== -->
    
  	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<!-- CSS
  ================================================== -->
  <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/slide.css">
	<link rel="stylesheet" href="css/menu.css">
	<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
    
</head>
<body>
<div class="wrap-body">
	<!--///////////////////////////////////////Top-->
	<div class="top">
		<div class="zerogrid">
			<ul class="number f-left">
				<li class="mail"><p>moqqy7@Gmail.com</p></li>
				<li class="phone"><p>094 693 4240</p></li>
			</ul>
			<ul class="top-social f-right">
				<li><a href="https://www.twitter.com/moquero_" target="_blank"><i class="fa fa-twitter"></i></a></li>
				<li><a href="http://www.facebook.com/moqqy" target="_blank"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus" target="_blank"></i></a></li>
				<li><a href="https://th.linkedin.com/pub/moquero-okpala/6a/306/58a" target="_blank"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="https://www.instagram.com/moquero"  target="_blank"><i class="fa fa-instagram"></i></a></li>
			</ul>
		</div>
	</div>
	<!--//////////Header-->
	<header>
		<div class="zerogrid">
			<center><div class="logo"><img src="images/logo.png"></div></center>
		</div>
	</header>
	<div class="site-title">
		<div class="zerogrid">
			<div class="row">
				<h2 class="t-center">Truly the best restaurant in town </h2>
			</div>
		</div>
	</div>
    <!--//////////////////////////////////////Menu-->
    <a href="#" class="nav-toggle">Toggle Navigation</a>
    <nav class="cmn-tile-nav">
		<ul class="clearfix">
			<li class="colour-1"><a href="#"><i></i></a></li>
			<li class="colour-2"><a href="#"></a></li>
			<li class="colour-3"><a href="index.html">Home</a></li>
			<li class="colour-4"><a href="menu.html">Menu</a></li>
			<li class="colour-1"><a href="reservation.html">Reservation</a></li>
			<li class="colour-2"><a href="location.html">Location</a></li>
			<li class="colour-3"><a href="#"></a></li>
			<li class="colour-4"><a href="#"></a></li>
				</ul>
    </nav>
	
<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div class="crumbs">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="rl.php">Reserved List</a></li>
			</ul>
		</div>
		<div id="main-content">
			<div class="wrap-content">
				<div class="row">
					<div class="col-1-3">
						<div class="wrap-col">
							<h3 id="res">Complete the Submission Form</h3>
							<p></p><br/>
							<h3>Or Just Make a Call</h3>
							<p>+095 532 7121 <br>
								+094 693 4240</p>
							<p>moqqy7@gmail.com</p>
						</div>
					</div>
					<div class="col-2-3">
						<div class="wrap-col">
							<div class="contact">
								<div id="contact_form">
									<!-- reservation list -->
									<div class="crumbs">
										<?php
											$hostname = "localhost:3306";
											$username = "root";
											$password = "";
											$dbname = "reservation";
											// Create connection
											$conn = mysqli_connect($hostname, $username, $password, $dbname);
											// Check connection
											if (!$conn) {
											    die("Connection failed: " . mysqli_connect_error());
												}
											$sql = "SELECT name, dat FROM res";
											$result = $conn->query($sql);
												if ($result->num_rows > 0) {
													echo "RESERVATION LIST <br/>";
													echo "<table>"; // start a table tag in the HTML
													/*echo "it works <br/>";
													$date = new DateTime();
													echo $date->format('F/jS/Y');
													echo "<br/>";*/
															// output data of each row
													while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
													echo "<tr><td>" . $row['name'] . "</td><td>" . $row['dat'] . "</td></tr>";  //$row['index'] the index here is a field name
													}

													echo "</table>";//Close the table in HTML
													echo "<br/><br/>";
												}
													else{
														echo "No reservation yet";
													}

													
											mysqli_close($conn);
											?>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> 
	</div>
</section>

<!--////////////////////////////////////Footer-->
<footer class="zerogrid">
	<div class="wrap-footer">
		<div class="row">
			<div class="col-1-3">
				<div class="wrap-col">
					
					<div class="row">
						  
					</div>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<h4>Location</h4>
					<div class="wrap-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.5678697035914!2d100.64121931454272!3d13.744592501164211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d61b9acb100e3%3A0x2afc4a426d19de7f!2sThe+Iris+Condo!5e0!3m2!1sen!2sth!4v1444460836874" width="100%" height="200%" frameborder="0" style="border:0"> </iframe></div>

					
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<h4>Open Daily</h4>
					<p><span>mon.</span> 08:00 - 20:00</p>
					<p><span>tue.-wed.</span> 08:00 – 20:00</p>
					<p><span>thu.-fri.</span> 08:00 – 20:00</p>
					<p><span>sat-sun.</span> 14:00 – 21:00</p>
					<p><span>Need help getting home?</span></br>
					We will call a cab for you!</p>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<div class="wrapper">
			&copy; Copyright 2015  @Hombre's
			<ul class="quick-link f-right">
				<li><a href="#">Privacy Policy</a></li>
				<li><a href="#">Terms of Use</a></li>
			</ul> 
		</div>
	</div>
</footer>


	<!-- js -->
	<script src="js/classie.js"></script>
	<script src="js/demo.js"></script>
	
</div>
</body></html>