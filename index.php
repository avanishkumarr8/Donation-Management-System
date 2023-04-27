<?php
include('connection.php');
session_start()
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
</head>
<body>
	
		<div id="header">
			<a href="user/index.php"><h1> SARvotTAM</h1><h2> FOUNDATION </h2></a>
                     <input type="button"  onclick="location.href='https://localhost/foundation/newuser.php';" value="new  user" style="width: 100px; height: 30px;border-radius: 5px ;margin-left:1100px;color:black;"><html>
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
</html> <marquee> <b> DONATE FOR SAVE LIFE'S </b> </marquee>        
		</div>
		<div id="body" style="background-image: url(images/donate.jpg);height:cover ;width: auto; padding-left: 500px;">
				<div id="my-form">
					<form action="" method="POST" class="fm">
						<div class="cnt">
							<label><b>Enter Username<b></label>
							<input type="text" name="un" placeholder="Enter Username" style="width: 200px;height: 30px;border-radius: 10px">
							<br><br><hr><br><br>
						
							<label><b>Enter Password <b></label>
							<input type="password" name="ps" placeholder="Enetr password" style="width: 200px;height: 30px;border-radius: 10px">
							<br><br><hr><br><br>
						
							<input type="submit" name="sub1" value="Admin Login" style="width: 100px; height: 30px;	border-radius: 5px ">

<input type="submit" name="sub2" value="user login" style="width: 100px; height: 30px;	border-radius: 5px ">
						</div>
					</from>
				</div>
				

					<?php
					if(isset ($_POST['sub1']))
					{
						$un=$_POST['un'];
						$ps=$_POST['ps'];
						
						$q=$db->prepare("SELECT * FROM admin where uname='$un' && pass='$ps'");
						$q->execute();
						$res=$q->fetchAll(PDO::FETCH_OBJ);
						if($res)
						{
							$_SESSION['un']=$un;
							header("Location:admin-home.php");
						}	
						else
						{
							echo "<script>alert('Wrong User')</script>";
						}
						
					}
                                        if(isset ($_POST['sub2']))
					{
						$un=$_POST['un'];
						$ps=$_POST['ps'];
						
						$q=$db->prepare("SELECT * FROM newuser where username='$un' && password='$ps'");
						$q->execute();
						$res=$q->fetchAll(PDO::FETCH_OBJ);
						if($res)
						{
							$_SESSION['username']=$un;
							header("Location:user-home.php");
						}	
						else
						{
							echo "<script>alert('wrong user')</scrpit>";
						}
						
					}
					?>
		</div>
		<div id="footer" align="center">Copyright@avanish</div>
</body>
</html>
