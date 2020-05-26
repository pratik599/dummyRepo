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
	




?><!DOCTYPE html>
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
             <center><h1>Student Meeting</h1></center><br/>
          </div>
        </div>
      </div>
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
		<td>
			<label for="year">Year:</label>&nbsp;&nbsp;&nbsp;&nbsp;
			<select class="form-control-lg" id="year" name="stp_year"> 
				<option>--</option>
				<option>FE</option>
				<option>SE</option>
				<option>TE</option>
				<option>BE</option>
			</select>
		</td>
		
		<td>
			<label for="sem">Choose semester:</label>
			<select class="form-control-lg" id="sem" name="stp_sem"> 
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
	
		<td>
			<label for="year">Academic year:</label>&nbsp;&nbsp;
			<input type="text" class="form-control-sm" id="year" name="stp_aca_year">
		</td>
	</tr>
 
	 <tr height="40px">
		<td >
		<label for="mno">Meeting No:</label>&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" class="form-control-sm" id="mno" name="stp_mno">
		</td>
		<td>
		<label for="mdate">Meeting Date:</label>
			<input type="date" class="form-control-sm" value="<?php echo date('Y-m-d'); ?>" id="mdate" name="stp_mdate"/>
		</td>
	 </tr>
  <tr height="40px">
  <td>
  <label for="sprblm">Student Problem:</label>
  </td>
  <td>
  <textarea class="form-control-lg" id="sprblm" name="stp_sprblm" rows="2"></textarea>
 
  </td>
  </tr>
  <tr height="40px"><td>
  <label for="msugg">Mentor's Suggestion:</label>
  </td>
  <td>
  <textarea class="form-control-lg" id="msugg" name="stp_msugg" rows="3"></textarea>
 
  </td>
  </tr>
  
  <tr height="40px">
  <td>
  <label for="remrk">Remarks:</label>
  </td>
  <td>

  <textarea class="form-control-lg" rows="2" id="remrk" name="stp_remark"></textarea>
 
  </td>
  </tr>
  <tr align="center" height="40px">
	<td colspan="2">
		<input type="submit" name="stp_submit" class="btn btn-info" value="SUBMIT">
	</td>
  
  </tr>
  </table>
  

</form>
</div>
  </body>
  </html>
  <?php
include_once("mentorshipdata.php");


if(isset($_POST['stp_submit']))  
{
	$stp_year=$_POST['stp_year'];
	$stp_sem=$_POST['stp_sem'];
	$stp_aca_year=$_POST['stp_aca_year'];
	$stp_mno=$_POST['stp_mno'];
	$stp_mdate=$_POST['stp_mdate'];
	$stp_sprblm=$_POST['stp_sprblm'];
	$stp_msugg=$_POST['stp_msugg'];
	$stp_remark=$_POST['stp_remark'];
	
	switch(isset($_POST["stp_submit"]))
	{
		case (empty($stp_year)):
	$message = " !  year is required.";
	echo "<script type='text/javascript'>alert('$message');</script>";
  	break;
	
  	case (empty($stp_mno)):
	$message = " ! Meeting No required.";
	echo "<script type='text/javascript'>alert('$message');</script>";
	break; 
	
	default:
	$query="INSERT INTO mentorship_report(student_id,academic_year,	Metting_no,date,Student_problem,Mentor_suggestion,Remark)
	 VALUES('$aca_s_id','$stp_aca_year','$stp_mno','$stp_mdate','$stp_sprblm','$stp_msugg','$stp_remark')";
	  $result = $conn->query($query);
	  if($result === TRUE )
		{
			$message = "Register Number $Reg_no Student Meeting Record submit.";
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
  