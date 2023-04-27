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
			<div id="header"><h1> SARvotTAM </h1><h2> FOUNDATION </h2></div>
                        
			<div id="body" style="background-image:linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.2)), url(images/donate.jpg);height:cover ;width: auto;"><input type="button"  onclick="location.href='https://localhost/blankets/index.php';" value="home" style="width: 100px; height: 30px;border-radius: 5px ;margin-left:1100px;color:black;"><html>
<head>
  <link rel="stylesheet" type="text/css" href="clock_style.css">
  <script type="text/javascript">
    window.onload = setInterval(clock,1);

    function clock()
    {
	  var d = new Date();
	  
	  var date = d.getDate();
	  
	  var month = d.getMonth();
	  var montharr =["Jan","Feb","Mar","April","May","June","July","Aug","Sep","Oct","Nov","Dec"];
	  month=montharr[month];
	  
	  var year = d.getFullYear();
	  
	  var day = d.getDay();
	  var dayarr =["Sun","Mon","Tues","Wed","Thurs","Fri","Sat"];
	  day=dayarr[day];
	  
	  var hour =d.getHours();
      var min = d.getMinutes();
	  var sec = d.getSeconds();
	
	  document.getElementById("date").innerHTML=day+" "+date+" "+month+" "+year;
	  document.getElementById("time").innerHTML=hour+":"+min+":"+sec;
    }
  </script>
</head>

<body>
   
   <p id="date" align="left"></p>
   <p id="time" align="right"></p>

 </body>
</html>
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
					<li><a href="newuser registration list.php">New User Registration List</a></li>
					<li><a href="donor-list.php">Donor List</a></li>
					<li><a href="donate-items-list.php">Donate Items List</a></li>
				</ul><br><br><br><br>
				
				
			</div>
			<div id="footer"><h4 align="right">Copyright@avanish</h4>
				<br>
				<div class="lg">
					<p align="center" margin="10px"><a href="logout.php"><font color="white">LOGOUT</a></p>
				</div>
			
			</div>			
		</div>
	</div>

</body>
</html>
