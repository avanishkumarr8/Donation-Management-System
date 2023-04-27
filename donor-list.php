<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Summery</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
</head>
<body>
	<div id="full">
		<div id="inner_full">
			<div id="header"><h1> SARvotTAM </h1><h2> FOUNDATION </h2></div>
			<div id="body" style="background-image: url(images/blood.jpg);height:cover ;width: auto;"><html>
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
				<h1 class="page-heading" align="center">DONOR LIST</h1>
				<center><div id="form">
					<table>
						<tr id="tr">
							<td><th><center><b>Name</b></center></th></td>
							<td><th><center><b>fname</b></center></th></td>
							<td><th><center><b>Address</b></center></th></td>
							<td><th><center><b>City</b></center></th></td>
							<td><th><center><b>Age</b></center></th></td>
							<td><th><center><b>donation</b></center></th></td>
							<td><th><center><b>facility</b></center></th></td>
							<td><th><center><b>pickdate</b></center></th></td>
                                                        <td><th><center><b>email</b></center></th></td>
                                                        <td><th><center><b>mno</b></center></th></td>
                                                        <td><th><center><b>gender</b></center></th></td>
                                                        
						</tr>
						<?php
							$q=$db->query("SELECT * FROM donation");
							while($r1=$q->fetch(PDO::FETCH_OBJ))
							{
								?>
						<tr>
							<td><th><center><?= $r1->name; ?></center></th></td>
							<td><th><center><?= $r1->fname; ?></center></th></td>
							<td><th><center><?= $r1->address; ?></center></th></td>
							<td><th><center><?= $r1->city; ?></center></th></td>
							<td><th><center><?= $r1->age; ?></center></th></td>
							<td><th><center><?= $r1->donation; ?></center></th></td>
							<td><th><center><?= $r1->facility; ?></center></th></td>
							<td><th><center><?= $r1->pickdate; ?></center></th></td>
                                                        <td><th><center><?= $r1->email; ?></center></th></td>
                                                        <td><th><center><?= $r1->mno; ?></center></th></td>
                                                        <td><th><center><?= $r1->gender; ?></center></th></td>
                                                        
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
