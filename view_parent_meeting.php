<?php
if(isset($_POST['logout'])){
		session_start();
session_destroy();
	header("Location:login.php");
}
	session_start();
	if( isset($_SESSION['Student_id']) && isset($_SESSION['psw']))  
	{
		echo  print_r($_SESSION, TRUE) ;
		$e_id=$_SESSION['psw'];
		$Student_id=$_SESSION['Student_id'];
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
#d1{
	height:500px;
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
<div id="d1">
  
  <div id="sidebar-wrapper"style="margin-left:0px;float:left;">
  <ul> 
  <li><a href="view_academic_record.php" class="btn">Academic Record</a></li>
  <li><a href="view_attendance_record.php" class="btn">Attendance Record</a></li>
    <li><a href="view_sessionaltest_record.php" class="btn">Sessional Test Record</a></li>
	<li>
	<a href="view_exactivity.php"class="btn">Extra-Curricular Activity</a></li>
	<li>
    <a href="view_coactivity.php" class="btn">Co-Curricular Activity</a></li>
    <li><a href="view_student_meeting.php" class="btn">Student Meeting</a></li>
    <li><a href="view_parent_meeting.php" class="btn">Parent Meeting</a></li>
	
  </ul>
  </div>

<div class="w3-main" style="margin-left:300px;margin-top:100px;">
 
 <center><h1>Details of Communication/Meeting with Parent</h1></center><br/>
 
 <table border="2" align="center">

		<th>Meeting No.</th><th>Date</th><th>Academic Year</th><th>Name Of Parent</th><th>Mentor Suggestion</th><th>Remark</th>
 <?php
include_once("mentorshipdata.php");

	$query="SELECT * FROM co_curricular_activities WHERE  Student_id='".$Student_id."'";
	
		$result = $conn->query($query);
	
			while($row= $result->fetch_assoc() )
			{		
			
	?>
	<tr>
		<td><label type="text" name="Semester" ><?php echo $row["Metting_no"]; ?></label></td>	
		<td><label type="text" name="Result" ><?php echo $row["date"]; ?></label></td>	
		<td><label type="text" name="Semester" ><?php echo $row["Parent_name"]; ?></label></td>	
		<td><label type="text" name="Result" ><?php echo $row["Mentor_suggestion"]; ?></label></td>	
		<td><label type="text" name="No_heads_failure" ><?php echo $row["Remark"]; ?></label></td>		
	</tr>

<?php
			}
 ?>
 </table>
 </div>
 
 
<footer class="bg-dark text-light pt-4" style="font-style:bold;font-family: Lora,'Times New Roman',serif;font-size:20px;">
      <div class="container">
        <div class="row pb-3 mt-1">
          <div class="col pb-5 pt-4">
             <span>A project by FAMT</span>
			 <span style="float:right">Copyright &copy; 2019
	  All rights reserved.
	  Site Designed and Maintained by PKPA, Dept. Of MCA</span>
          </div>
        </div>
      </div>
    </footer>
</body>
</html>