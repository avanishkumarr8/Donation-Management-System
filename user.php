<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Home</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
</head>
<body>
	<div id="full">
		<div id="inner_full">
			<div id="header"><h1> SARvotTAM </h1><h2> FOUNDATION </h2></div><input type="button"  onclick="location.href='https://localhost/foundation/index.php';" value="home" style="width: 100px; height: 30px;border-radius: 5px ;margin-left:1100px;color:black;">
                        
			<div id="body" style="background-image:linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.2)), url(images/blood.jpg);height:cover ;width: auto;">
				<br>

				<?php
				 $un=$_SESSION['un'];
				if(!$un)
				{
					header("Location:index.php");
				}
				?>
				<h1 class="page-heading" align="center">WELCOME ADMIN</h1><br><br>
				<ul>
					<li><a href="donation.php">Donation</a></li><br>
					
					<li><a href="donation-history.php">donation histort</a></li>
				</ul><br><br><br><br>
				
				
			</div>
			<div id="footer"><h4 align="right">Copyright@avanish</h4>
				<br>
				<div class="lg">
					<p align="center"><a href="logout.php"><font color="white">LOGOUT</a></p>
				</div>
			
			</div>			
		</div>
	</div>

</body>
</html>
