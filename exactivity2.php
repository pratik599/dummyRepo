<?php
if(isset($_POST['logout'])){
		session_start();
session_destroy();
	header("Location:login.php");
}
	session_start();
	if( isset($_SESSION['psw']) && isset($_SESSION['Reg_no']) && isset($_SESSION['Student_id']))  
	{
		echo  print_r($_SESSION, TRUE) ;
		$e_id=$_SESSION['psw'];
		$aca_s_id=$_SESSION['Student_id'];
		$Reg_no=$_SESSION['Reg_no'];
 }
		
		
	else
	{
		echo "session not start";
		header("Location:login.php");
	}
?>

<!DOCTYPE html>
<html>
<title>Mentorship System</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="./css/bootstrap.min.css" rel="stylesheet">
<script src="./js/jquery-3.3.1.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<style>
.nav-link{
	padding: 0px 10px;
	font-size:25px;
	text-decoration: none;
	color:white;
}

.bt2 {
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 25px;
}
#sidebar-wrapper{
	position:fixed;
}
ul li{
	list-style:none;
	padding:10px 10px;
	
}
body{
	background-color:#f9f9f9;
}
</style>
<body>

<!-- Top container -->
<nav class="navbar navbar-expand-sm bg-primary fixed-top">
      <div class="container">
        <a class="navbar-brand" href="mentor_index.php"><img src="./img/logo.png" alt="logo"/></a>
		
		<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="mentor_index.php">Home</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="view_student.php">View Students</a>
            </li>
			<li class="nav-item">
			<form method="post"><button class="bt2 bg-primary" type="submit" name="logout" value="logout">Logout</button></form>
			</li>
		</ul>
		</div>
	</div>
</nav>



<div>
  
  <div id="sidebar-wrapper"style="margin-left:0px;float:left;">
  <ul> 
  <li><a href="academicrecord2.php" class="btn">Academic Record</a></li>
  <li><a href="studentAttendance1.php" class="btn">Attendance Record</a></li>
    <li><a href="sessionalTest2.php" class="btn">Sessional Test Record</a></li>
	<li>
	<a href="exactivity2.php"class="btn">Extra-Curricular Activity</a></li>
	<li>
    <a href="coactivity2.php" class="btn">Co-Curricular Activity</a></li>
    <li><a href="studentmeetings2.php" class="btn">Student Meeting</a></li>
    <li><a href="parentmeetings2.php" class="btn">Parent Meeting</a></li>
	
  </ul>
  </div>

<div style="margin-left:300px;margin-top:100px;">
<header>
      <div class="container">
        <div class="row">
          <div class="col">    
					  
             <center><h1>Extra-Curricular activities</h1></center><br/>
          </div>
        </div>
      </div>
    </header>
    </header>
	


 <form action="" method="post">
 
 
  <?php
include_once("mentorshipdata.php");

	$query="SELECT * FROM student WHERE  Student_id='".$aca_s_id."'";
	
		$result = $conn->query($query);
	
			while($row= $result->fetch_assoc() )
			{
?>	
				<h4 align="center">Student Name :  <label type="text" name="student_name" ><?php echo $row["student_name"];?> </label></h4>
<?php
			}
?>
<table align="center">
	<tr height="40px">
		<td><label for="year">Academic year:</label>&nbsp;&nbsp;
			<input type="text" class="form-control-sm" id="year" name="exa_year">
		</td>
		<td>
			<label for="sem">Choose semester:</label>
			<select class="form-control-lg" id="sem" name="exa_sem"> 
				<option>--</option>
				<option>Semester 1</option>
				<option>Semester 2</option>
				<option>Semester 3</option>
				<option>Semester 4</option>
				<option>Semester 5</option>
				<option>Semester 6</option>
				<option>Semester 7</option>
				<option>Semester 8</option>
			</select>
		</td>
	</tr>
	
	<tr height="40px">
		<td><label for="act">Activity:</label>&nbsp;&nbsp;
			<input type="text" class="form-control-lg" id="act" name="exa_act">
		</td>
		<td>
			<label for="actp">Activity Performance:</label>
			<textarea class="form-control-lg" rows="2" id="actp" name="exa_actp"></textarea>
		</td>
	</tr>
	
	<tr height="40px" align="center">
		<td colspan="2">
			<input type="submit" name="exa_submit" id="button" value="SUBMIT" onclick="loadDoc()" class="btn btn-info">
		</td>
	</tr>

</table>

</form>
   
</div>

  </body>
  </html>
    <?php
include_once("mentorshipdata.php");


if(isset($_POST['exa_submit']))  
{
	$exa_year=$_POST['exa_year'];
	$exa_sem=$_POST['exa_sem'];
	$exa_act=$_POST['exa_act'];
	$exa_actp=$_POST['exa_actp'];
	switch(isset($_POST["exa_submit"]))
	{
		case (empty($exa_year)):
	$message = " !  year is required.";
	echo "<script type='text/javascript'>alert('$message');</script>";
  	break;
	
	default:
	$query="INSERT INTO extra_curricular_activities(student_id,Semester,Activities,Activity_performance,year)
	 VALUES('$aca_s_id','$exa_sem','$exa_act','$exa_actp','$exa_year')";
	  $result = $conn->query($query);
	  if($result === TRUE )
		{
			$message = "Register Number $Reg_no extra curricular activities Record submit.";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		else
		{
			$message = " ! Record not submit.";
			echo "<script type='text/javascript'>alert('$message');</script>";
			
			
			echo $conn->error;
		}
		$conn->close();
	}
}
?>