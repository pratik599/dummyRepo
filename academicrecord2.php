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
<!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
-->
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
					  
             <center><h1>Academic Record</h1></center><br/>
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
		<td><label for="year">Year:</label>&nbsp;&nbsp;
			<select class="form-control-lg" id="year" name="aca_year"> 
			<option>--</option>
			<option>FE</option>
			<option>SE</option>
			<option>TE</option>
			<option>BE</option>
			</select>
		</td>
		
		<td><label for="sem">Choose semester:</label>
			<select class="form-control-lg" id="sem" name="aca_sem"> 
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
		<td><label for="res">Result:</label>
			<select class="form-control-lg" id="res" name="aca_result"> 
			<option>--</option>
			<option>Pass</option>
			<option>Fail</option>
			</select>
		</td>
		
		<td><label for="year">Academic year:</label>&nbsp;&nbsp;
			<input type="text" class="form-control-sm" id="year" name="year">
		</td>
	</tr>


  <tr height="40px">
  <td>
  <label for="noheads">No. of Heads of failure:</label>&nbsp;&nbsp;
  <input type="text" class="form-control-sm" id="noheads" name="aca_noheads">
  </td>
  <td>
  <label for="nmheads">Name of Heads of failure:</label>&nbsp;&nbsp;
  <textarea class="form-control-lg" id="nmheads" rows="3" name="aca_nmheads"></textarea>
 
  </td>
  </tr>
  
  <tr height="40px">
  <td>
  <label for="cgpi">CGPI/Percentage:</label>

  <input type="text" class="form-control-sm" id="cgpi" name="aca_cgpi"> 
  </td></tr>
  
  <tr height="40px">
		<td colspan="2" align="center"><input class="btn btn-info" type="submit" name="Add_Aca" value="SUBMIT">
		</td>
	</tr>
  </table>
  

  </form>
  
  </div>

  </body>
  </html>
  <?php
include_once("mentorshipdata.php");


if(isset($_POST['Add_Aca']))  
{
	$aca_year=$_POST['aca_year'];
	$aca_result=$_POST['aca_result'];
	$aca_sem=$_POST['aca_sem'];
	$year=$_POST['year'];
	$aca_noheads=$_POST['aca_noheads'];
	$aca_nmheads=$_POST['aca_nmheads'];
	$aca_cgpi=$_POST['aca_cgpi'];
	switch(isset($_POST["Add_Aca"]))
	{
		case (empty($year)):
	$message = " !  year is required.";
	echo "<script type='text/javascript'>alert('$message');</script>";
  	break;
	
   
 
	default:
	$query="INSERT INTO academic_record(student_id,academic_year,Year,Semester,Result,No_heads_failure,Name_failure_head,Percentage)
	 VALUES('$aca_s_id','$aca_year','$year','$aca_sem','$aca_result','$aca_noheads','$aca_nmheads','$aca_cgpi')";
	  $result = $conn->query($query);
	  if($result === TRUE )
		{
			$message = "Register Number $Reg_no Academic Record submit.";
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