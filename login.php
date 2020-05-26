<?php
session_start();
if(isset($_SESSION['psw']))
{
	header('Location: mentor_index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">

<link href="./css/bootstrap.min.css" rel="stylesheet">
		<script src="./js/jquery-3.3.1.min.js"></script>
		<script src="./js/bootstrap.min.js"></script>
		<link href="css/clean-blog.min.css" rel="stylesheet">
	
<title>Login</title>
<style>
.table{
	table-border:none;
}

</style>
</head>
<body> 
<nav class="navbar bg-primary" style="height:120px;" >
 <img  style="width:150px;" src="login.jpg" >
 <span style="color:white;font-size:40px;">Finolex Academy Of Management & Technology,Ratnagiri</span>
</nav>
<div class="container">
	<form action="" method="post" id="1">
	
		<div class="table-responsive" style="padding:40px;">
			<table class="login-table table"  align="center">
			
					<tr class="trh" align="center">
					<th rowspan="6" ><img src="download.jpg" style="height:150px;"></th>
					<th  class="thl" colspan="2"><h1 >LOGIN</h1> </th>
					</tr>
					</tr>
					<tr   class="trl" >
					<td class="tdl" >Name</td><td class="tdi"><input class="inputn" type="text" name ="name" autocomplete="off"></td>
					</tr>
					<tr class="trl" >
					<td class="tdl" >Password</td><td class="tdi"><input class="inputn" type="password" name="password" autocomplete="off"></td>
					</tr>
					
					
					<tr class="trl" >
					<td class="tdl" style=>Type</td><td class="tdi" >
						<select class="form-control-sm" id="type" name="t_type">
						<option>Mentor</option>
						<option>Mentor Head</option>
						<option>Department Head</option>
						<option>Collage Head</option>
						
						</select>
						</td>
					</tr>
					
					
					<tr class="trl" >
					<td class="tdb1"><input class="btn btn-success" type="submit" name="login"   value="LOGIN" class="btnlog" style="border:0px; align:center"></td>
					<td class="tdb2"><input class="btn btn-primary"type="submit" name="sign_up" value="CREAT NEW ACCOUNT" class="btnsig" style="border:0px; align:center"></td>
					</tr>
					
				</table>
				<p id="demo"></p>
		</div>
	</form>
	</div>
</body>
</html>
<?php require "footer.php"?>
<?php
include_once("mentorshipdata.php");


if(isset($_POST['login']))  
{
	if(!empty($_POST['name']) && !empty($_POST['password'])) 
		{
		$pname=$_POST['name'];
		$ppassword=$_POST['password'];
		$t_type=$_POST['t_type'];
		$query="SELECT * FROM login WHERE  username='".$pname."' AND password='".$ppassword."' AND type='".$t_type."'";
		$result = $conn->query($query);
		
		
		if($result->num_rows!=0)
		{
			while($row= $result->fetch_assoc())
			{
				$qname=$row['username'];
			
				$qpassword=$row['password'];
			
				$id=$row['id'];
				
				$type=$row['type'];
		
	

		
			if(($qname == $pname && $qpassword == $ppassword) && $type=='Mentor')
			{
			
					
				$_SESSION['psw']=$id;
				if(isset($_SESSION['psw']))  
				{
					header("Location:mentor_index.php"); 
				
				}
			
			}
				
			
			if(($qname == $pname && $qpassword == $ppassword) && $type=='Mentor Head')
			{
				
				$_SESSION['psw']=$id;
				if(isset($_SESSION['psw']))  
			{
				header("Location:index.php"); 
				
			}
			
					}
			if(($qname == $pname && $qpassword == $ppassword) && $type=='Department Head')
			{
			
					
				$_SESSION['psw']=$id;
				if(isset($_SESSION['psw']))  
				{
					header("Location:Departmet_head_index.php"); 
				
				}
			
			}
				
			if(($qname == $pname && $qpassword == $ppassword) && $type=='Collage Head')
			{
			
					
				$_SESSION['psw']=$id;
				if(isset($_SESSION['psw']))  
				{
					header("Location:collage_head_index.php"); 
				
				}
			
			}
	
			
			else
			{
				$message = "Username and/or Password incorrect.\\nTry again.";
					echo "<script type='text/javascript'>alert('$message');</script>";
				
			}
		 }
		
		}
		else
			{
				
				$message = "Username and/or Password incorrect.\\nTry again.";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
	}
	else
	{
		$message = " insert all fields.";
		echo "<script type='text/javascript'>alert('$message');</script>";
	
	}
}

	if(isset($_POST['sign_up']))  
			{
	
				header("Location:registration.php"); 
		 }
?>





