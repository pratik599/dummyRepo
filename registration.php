<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <title>Mentorship System</title>
		<link href="./css/bootstrap.min.css" rel="stylesheet">
		<script src="./js/jquery-3.3.1.min.js"></script>
		<script src="./js/bootstrap.min.js"></script>
	
		<link href="css/clean-blog.min.css" rel="stylesheet">
	<title>Registration</title>
  
  </head>

  <body>
<nav class="navbar bg-primary" style="height:120px;" >
 <img  style="width:150px;" src="login.jpg" >
 <span style="color:white;font-size:40px;">Finolex Academy Of Management & Technology,Ratnagiri</span>
</nav>
  <div class="container">
  <form action="" method="post"  enctype="multipart/form-data">
 
  
			<table class="login_table table table-bordered "  style="margin-top:30px; " align="center" >
			<div class="table-responsive" >
					<tr  align="center" >
					<th colspan="2" ><h1 >Registration</h1></th>
					</tr>
					<tr   class="trl" >
					<td class="tdl" >Teacher Name</td><td class="tdi"  ><input type="text" name="t_name" class="form-control" placeholder="Enter Name" id="fnm"></td>
					</tr>
					<tr class="trl" >
					<td class="tdl" >Contact No:</td><td class="tdi" ><input type="text" class="form-control-sm" id="pcno" name="t_contact" maxlength="10" /></td>
					</tr>
					
					
					<tr class="trl" >
					<td class="tdl" >Email:</td><td class="tdi" >    <input type="email" class="form-control-sm" id="email2" name="t_email"></td>
					</tr>
					
					
					<tr class="trl" >
					<td class="tdl" >Choose branch:</td><td class="tdi" ><select class="form-control-sm" id="branch" name="t_branch">
						<option>Chemical</option>
						<option>Electrical</option>
						<option>EXTC</option>
						<option>IT</option>
						<option>MCA</option>
						<option>Mechnical</option>
					</select>
					</td>
					</tr>
					
					
					<tr class="trl" >
					<td class="tdl" >Choose Type:</td><td class="tdi" ><select class="form-control-sm" id="type" name="t_type">
					<option>Mentor</option>
					<option>Mentor Head</option>
					<option>Department Head</option>
					<option>Collage Head</option>
					</select></td>
					</tr>
					
					<tr class="trl" >
					<td class="tdl" > User Name:</td><td class="tdi" > <input type="text" class="form-control-sm" id="pcno" name="t_user"></td>
					</tr>
					
					<tr class="trl" >
					<td class="tdl" >Password:</td><td class="tdi" >  <input type="Password" class="form-control-sm" id="Password" name="t_password" minlength="8"></td>
					</tr>
					
					<tr class="trl" >
					<td class="tdl" >Confirm Password:</td><td class="tdi" ><input type="Password" class="form-control-sm" id="c_Password" name="t_con_password" minlength="8"></td>
					</tr>
					
					
					<tr class="trl" >
					<td class="tdl" colspan="2" align="center"><input type="submit" name="submit"  class="btn btn-success" ></input>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input class="btn btn-primary" type="reset">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<button type="button" class="btn btn-danger" onclick=" relocate_home()">Cancle</button></td>
					</tr>
		
				
		</div>
  
  
  
</table>  
   
  </form>
 </div>

    </body>
	</html>
<?php 
require "footer.php";
?>	
	<script>
function relocate_home()
{
     location.href = "login.php";
} 
</script>
<?php
include_once("mentorshipdata.php");

if(isset($_POST['submit']))
{
$t_name=$_POST['t_name'];	
$t_contact=$_POST['t_contact'];
$t_branch=$_POST['t_branch'];
$t_email=$_POST['t_email'];
$t_type=$_POST['t_type'];
$t_user=$_POST['t_user'];
$t_password=$_POST['t_password'];
$t_con_password=$_POST['t_con_password'];

switch(isset($_POST["submit"]))
	{
		case (empty($t_name)):
	$message = " !  Name is required.";
	echo "<script type='text/javascript'>alert('$message');</script>";
  	break;
	
  	case (empty($t_contact)):
	$message = " !  contact number is required.";
	echo "<script type='text/javascript'>alert('$message');</script>";
	break; 
	
	case (empty($t_email)):
	$message = " !  email address is required.";
	echo "<script type='text/javascript'>alert('$message');</script>";
	break; 
	
	case (empty($t_user)):
	$message = " !  User name is required.";
	echo "<script type='text/javascript'>alert('$message');</script>";
	break; 
	
	case (empty($t_password)):
	$message = " !  password is required.";
	echo "<script type='text/javascript'>alert('$message');</script>";
	break; 
	
	case (empty($t_con_password)):
	$message = " !  confirmation password is required.";
	echo "<script type='text/javascript'>alert('$message');</script>";
	break; 
	
	case (($t_password) !=($t_con_password)):
	$message = " !  password and Confirmation Password not match.";
	echo "<script type='text/javascript'>alert('$message');</script>";		
	break;
	
	
	default:
			
					
					$query="INSERT INTO login(username,password,type)
						VALUES('$t_user','$t_password','$t_type')";
				 
						 $query2="INSERT INTO registration(t_name,t_contact,t_email,t_branch,t_type,t_username,t_password)
						 VALUES('$t_name','$t_contact','$t_email','$t_branch','$t_type','$t_user','$t_password')";
						 
						 
						 $result = $conn->query($query);
							$result2=$conn->query($query2);
							
							
							if($result === TRUE && $result2 === TRUE )
							{
									$message = " Account created.";
									echo "<script type='text/javascript'>alert('$message');</script>";
								
							}
							else
							{
								$message = " ! Account not created.";
								echo "<script type='text/javascript'>alert('$message');</script>";
								
								
								echo $conn->error;
							}
							$conn->close();
				
			
					
		}
}	
	?>