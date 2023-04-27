<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>new user Registration</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
</head>
<body>
	<div id="full">
		<div id="inner_full">
			<div id="header"><h1> SARvotTAM </h1><h2> FOUNDATION </h2></div>
			<div id="body" style="background-image: url(images/index2.jpg);height:cover ;width: auto;"><html>
<head>
  <link rel="stylesheet" type="text/css" href="clock_style.css">
  <script type="text/javascript">
    window.onload = setInterval(clock,1000);

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
				
				<h1 class="page-heading" align="center">NEW USER REGISTRATION</h1>
                                <input type="button"  onclick="location.href='https://localhost/foundation/index.php';" value="home" style="width: 100px; height: 30px;border-radius: 5px ;margin-left:1100px;color:black;">
                        
				<center><div id="form">
					<form action="newuser.php" method="post">
					<table>
                                                
						<tr>
							<td>Enter Name</td>
							<td><input type="text" name="name" placeholder="Enter Name" required></td>
                                                </tr>
						<tr>	
                                                        <td>Enter E-mail</td>
							<td><input type="text" name="email" placeholder="Enter E-mail " required></td>
						</tr>
                                                <tr>
                                                        <td>Enter Mobile number</td>
							<td><input type="integer" name="mno" placeholder="Enter Mobile Number" required></td>
						</tr>
                                                <tr>
                                                        <td>username</td>
							<td><input type="text" name="username" placeholder="username" required></td>
						</tr>
                                                <tr>
                                                        <td>password</td>
							<td><input type="password" name="password" placeholder="Enter password" required></td>
						</tr>
                                                <tr>
                                                        <td>confirm_password</td>
							<td><input type="password" name="confirm_password" placeholder="confirm_password" required></td>
						</tr>

						<tr>
							<td class="butt" "><input type="submit" name="sub" value="SUBMIT"></td >
						</tr>
					</table>
				</form>
				<?php

				  $db = new PDO('mysql:dbname=AVANISH;host=localhost', 'root', '');
				
				if(isset($_POST['sub']))
				{
					$name=$_POST['name'];
					$email=$_POST['email'];
					$mno=$_POST['mno'];
					$username=$_POST['username'];
                                        $password=$_POST['password'];
                                        $confirmpassword=$_POST['confirm_password'];
					
                                        if($password!=$confirmpassword)
                                          echo "<script  type='text/javascript'>alert(' password and confirm password mismatch');</SCRIPT>";
			else
				      {

					$q=$db->prepare("INSERT INTO newuser(name,email,mno,username,password) VALUES  
                                         (:name,:email,:mno,:username,:password)");
					
					$q->bindValue(':name',$name,PDO::PARAM_STR);					
					$q->bindValue(':email',$email,PDO::PARAM_STR);
					$q->bindValue(':mno',$mno,PDO::PARAM_STR);
                                        $q->bindValue(':username',$username,PDO::PARAM_STR);
					$q->bindValue(':password',$password,PDO::PARAM_STR);
                                       
                                        
					if($q->execute())
					{       $message='registration successfull';
						echo "<script  type='text/javascript'>alert(' $message');</SCRIPT>";
					}
					else
					{       $message='registration successfull';
						echo "<script  type='text/javascript'>alert(' $message');</SCRIPT>";
					}
                                      }
                                  
	}
				
				?>
                                           
			</div></center>
		</div>
			<div id="footer"><h4 align="right">Copyright@avanish</h4>
				<br><?php
$t=time();

echo(date("Y-m-d",$t));
?> 
				<p align="center"><a href="logout.php"><font color="white">LOGOUT</a></p>
			</div>
			
		</div>
	</div>

</body>
</html>
