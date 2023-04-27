<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Donation</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
</head>
<body>

	<div id="full">
		<div id="inner_full">
			<div id="header"><h1> SARvotTAM </h1><h2> FOUNDATION </h2></div>
			<div  style="background-image: url(images/black1.jpg);height:cover ;width: auto;"><html>
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
				<h1 class="page-heading" align="center">DONATION</h1>
				<center><div id="form">
					<form action="" method="post">
					<table>
						
							<tr><td>Enter Name</td>
							<td><input type="text" name="name" placeholder="Enter Name" required></td></tr>
                                                        <tr><td>Enter Father's name</td>
							<td><input type="text" name="fname" placeholder="Enter Father's Name" required></td></tr>
							<tr><td>Gender</td>
							<td>
								<select name="gender">
									<option>Select</option>
                                                                        <option>Male</option>
                                                                        <option>Female</option>
									<option>Transgender</option>
								</select>

							</td>
						       </tr>
						       <tr>
							<td>Enter Address</td>
							<td><textarea name="address" required></textarea></td></tr>
							<tr><td>Enter City</td>
							<td><input type="text" name="city" placeholder="Enter City" required></td>
						        </tr>
						         <tr>
							<td>Enter Age</td>
							<td><input type="text" name="age" placeholder="Enter Age" required></td></tr>
							
							<tr><td>THE THING YOU WANT TO DONATE with QUANTITY</td>
							<td><input type="text" name="donation" placeholder="Enter donation" required></td></tr>
                                                        

                                                        <tr><td>pick/drop facility<td>
                                                               <td><select name="facility">
									<option>Select</option>
                                                                        <option>pick</option>
                                                                        <option>drop</option>
									
								</select></td></tr>
                                                         <tr><td>pick/drop date</td>
							<td><input type="date" name="pickdate"  required></td></tr>

								
						
						       <tr>
							<td>Enter E-mail</td>
							<td><input type="text" name="email" placeholder="Enter E-mail " required></td></tr>
							<tr><td>Enter Mobile number</td>
							<td><input type="text" name="mno" placeholder="Enter Number" required></td></tr>
						
						        <tr>
							<td class="butt" "><input type="submit" name="sub" value="Save"></td >
						        </tr>
					</table>
				</form>
				<?php

				  $db = new PDO('mysql:dbname=AVANISH;host=localhost', 'root', '');
				
				if(isset($_POST['sub']))
				{
					$name=$_POST['name'];
					$fname=$_POST['fname'];
					$address=$_POST['address'];
					$city=$_POST['city'];
					$age=$_POST['age'];
                                        $donation=$_POST['donation'];
                                        $facility=$_POST['facility'];
                                        $pickdate=$_POST['pickdate'];
					$email=$_POST['email'];
                                        $mno=$_POST['mno'];
					$gender=$_POST['gender'];
					
					$q=$db->prepare("INSERT INTO donation (name,fname,address,city,age,donation,facility,pickdate,email,mno,gender) VALUES (:name,:fname,:address,:city,:age,:donation,:facility,:pickdate,:email,:mno,:gender)");
					
					$q->bindValue(':name',$name,PDO::PARAM_STR);
					$q->bindValue(':fname',$fname,PDO::PARAM_STR);
					$q->bindValue(':address',$address,PDO::PARAM_STR);
					$q->bindValue(':city',$city,PDO::PARAM_STR);
					$q->bindValue(':age',$age,PDO::PARAM_STR);
					$q->bindValue(':donation',$donation,PDO::PARAM_STR);
                                        $q->bindValue(':facility',$facility,PDO::PARAM_STR);
                                        $q->bindValue(':pickdate',$pickdate,PDO::PARAM_STR);
					$q->bindValue(':email',$email,PDO::PARAM_STR);
					$q->bindValue(':mno',$mno,PDO::PARAM_STR);
					$q->bindValue(':gender',$gender,PDO::PARAM_STR);
					
					if($q->execute())
					{
						echo "<script  type='text/javascript'>alert('donation successful');</SCRIPT>";
					}
					else
					{
						echo "<script  type='text/javascript'>alert('donation failed');</SCRIPT>";
					}
				}
				
				?> 
			</div></center>
		</div>
                          
			<div id="footer"><h4 align="right">Copyright@avanish</h4>
				<br>
				<p align="center"><a href="logout.php"><font color="white">LOGOUT</a></p>
			</div>			
		</div>
	</div>

</body>
</html>
