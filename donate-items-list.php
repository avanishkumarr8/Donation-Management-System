<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Donor Registration</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
</head>
<body>
	<div id="full">
		<div id="inner_full">
			<div id="header"><h1> SARvotTAM </h1><h2> FOUNDATION </h2></div>
			<div id="body" style="background-image: url(images/blood.jpg);height:cover ;width: auto;">
				<br><html>
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
				<?php
				$un=$_SESSION['un'];
				if(!$un)
				{
					header("Location:index.php");
				}
				?>
				<h1 class="page-heading" align="center">DONATE ITEMS LIST</h1>
				<center><div id="form">
					<table>
						<tr id="tr">
							
							<td><th><center><b>donation</b></center></th></td>
							
							<td><th><center><b>pickdate</b></center></th></td>
                                                        
						</tr>
						<?php
							$q=$db->query("SELECT * FROM donation");
							while($r1=$q->fetch(PDO::FETCH_OBJ))
							{
								?>
						<tr>
							
							<td><th><center><?= $r1->donation; ?></center></th></td>
							
							<td><th><center><?= $r1->pickdate; ?></center></th></td>
                                                        
						</tr>
						<?php
					}
					?>
					</table>
			</div></center>
		</div>
			<div id="footer"><h4 align="center">Copyright@avanish</h4>
				<br>
				<p align="center"><a href="logout.php"><font color="white">LOGOUT</a></p>
			</div>			
		</div>
	</div>

</body>
</html>
