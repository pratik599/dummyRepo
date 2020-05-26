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

<div style="margin-left:300px;margin-top:100px;">
 <header>
      <div class="container">
        <div class="row">
          <div class="col">    		  
             <center><h1>Student Persional Details</h1></center><br/>
          </div>
        </div>
      </div>
    </header>


<?php
include_once("mentorshipdata.php");

	$query="SELECT * FROM student WHERE  Student_id='".$Student_id."'";
	
		$result = $conn->query($query);
	
			while($row= $result->fetch_assoc() )
			{		
			
	?>
	<div>

<table border="2" align="center">

<tr height="20px">
	
	 <td colspan="2"  width="200px"><image type="text" name="imagea" height="100" width="100" src="<?php echo $row["image"]; ?>"></image></td>
<td colspan="2"  width="200px"><image type="text" name="seg_image" height="100" width="100" src="<?php echo $row["seg_image"]; ?>"></image></td>

</tr>
<tr height="40px">
	<th width="250px">Class</th>
	<td><label type="text" name="class" ><?php echo $row["class"]; ?></label></td>
	
	<th width="250px">Branch</th>
	<td><label type="text" name="branch_name" ><?php echo $row["branch_name"]; ?></label></td>
</tr>
<tr height="40px">
	<th>Roll No.</th>
	<td><label type="text" name="Roll_no" ><?php echo $row["Roll_no"]; ?></label></td>

	<th>Academic Year</th>
	<td><label type="text" name="academic_year" ><?php echo $row["academic_year"]; ?></label></td>
</tr>
<tr height="40px">
	<th>Student Name :</th>
	<td colspan="3"><label type="text" name="student_name" ><?php echo $row["student_name"];?> </label></td>
</tr>
<tr height="40px">
	<th>Father Name</th>
	<td><label type="text" name="father_name" ><?php echo $row["father_name"]; ?></label></td>
	<th>Occupation</th>
	<td><label type="text" name="father_name" ><?php echo $row["occupation"]; ?></label></td>
</tr>

<tr height="40px">
	<th>Mother Name</th>
	<td colspan="3"><label type="text" name="mother_name" ><?php echo $row["mother_name"]; ?></label></td>
</tr>
<tr height="40px">
	<th>Date Of Birth</th>
	<td><label type="text" name="DOB" ><?php echo $row["DOB"]; ?></label></td>

	<th>Blood Group</th>
	<td><label type="text" name="Blood_group" ><?php echo $row["Blood_group"]; ?></label></td>
</tr>

<tr height="40px">
	<th>Registration Number</th>
	<td><label type="text" name="Reg_no" ><?php echo $row["Reg_no"]; ?></label></td>

	<th>Aadhar No.</th>
	<td><label type="text" name="Aadhar_no" ><?php echo $row["Aadhar_no"]; ?></label></td>
</tr>
<tr height="40px">
	<th>Parent Email</th>
	<td><label type="text" name="parent_email" ><?php echo $row["parent_email"]; ?></label></td>

	<th>Student Email</th>
	<td><label type="text" name="Student_email" ><?php echo $row["Student_email"]; ?></label></td>
</tr>
<tr height="40px">
	<th>Correspondence Address</th>
	<td width="300px"><label type="text" name="Corr_address" ><?php echo $row["Corr_address"]; ?></label></td>

	<th>Permanent Address</th>
	<td width="300px"><label type="text" name="Per_address" ><?php echo $row["Per_address"]; ?></label></td>
</tr>
<tr height="40px">
	<th>Parent Contact No.</th>
	<td><label type="text" name="parent_contact" ><?php echo $row["parent_contact"]; ?></label></td>

	<th>Student Contact No.</th>
	<td><label type="text" name="Student_contact" ><?php echo $row["contact_no"]; ?></label></td>
</tr>
<tr height="40px">
	<th>Health Problem</th>
	<td colspan="3"><label type="text" name="Health_problem" ><?php echo $row["Health_problem"]; ?></label></td>
</tr>
<tr height="40px">
	<th>Family Doctor Name</th>
	<td><label type="text" name="Family_dr_name" ><?php echo $row["Family_dr_name"]; ?></label></td>

	<th>Doctor Contact No.</th>
	<td><label type="text" name="dr_contact" ><?php echo $row["dr_contact"]; ?></label></td>
</tr>
</table>
</div>
<?php
			}
 ?>
 
 </br>
  <div>
 <center><h1>Academic Record</h1></center><br/>
 
 <table border="2" align="center">

		<th>Year</th><th>Semester</th><th>Result</th><th>No.of Heads of failure</th><th>Name of Heads of failure</th><th>Percentage</th>
 <?php
include_once("mentorshipdata.php");

	$query="SELECT * FROM academic_record WHERE  Student_id='".$Student_id."'";
	
		$result = $conn->query($query);
	
			while($row= $result->fetch_assoc() )
			{		
			
	?>
	<tr>
		<td><label type="text" name="academic_year" ><?php echo $row["academic_year"]; ?></label></td>
		<td><label type="text" name="Semester" ><?php echo $row["Semester"]; ?></label></td>	
		<td><label type="text" name="Result" ><?php echo $row["Result"]; ?></label></td>	
		<td><label type="text" name="No_heads_failure" ><?php echo $row["No_heads_failure"]; ?></label></td>
		<td><label type="text" name="Name_failure_head" ><?php echo $row["Name_failure_head"];?> </label></td>
		<td colspan="3"><label type="text" name="Percentage" ><?php echo $row["Percentage"]; ?></label></td>
		
	</tr>

<?php
			}
 ?>
 </table>
 </div>
 
  </br>
   <div>
 <center><h1>Attendance Record</h1></center><br/>
 
 <table border="2" align="center">

		<th>Academic Year</th><th>Semester</th><th>Attendance at the</th><th>Percentage</th><th>Remark</th>
 <?php
include_once("mentorshipdata.php");

	$query="SELECT * FROM attendance_record WHERE  Student_id='".$Student_id."'";
	
		$result = $conn->query($query);
	
			while($row= $result->fetch_assoc() )
			{		
			
	?>
	<tr>
		<td><label type="text" name="academic_year" ><?php echo $row["academic_year"]; ?></label></td>
		<td><label type="text" name="Semester" ><?php echo $row["Semester"]; ?></label></td>	
		<td><label type="text" name="Result" ><?php echo $row["Attendance_at"]; ?></label></td>	
		<td><label type="text" name="No_heads_failure" ><?php echo $row["Percentage"]; ?></label></td>
		<td><label type="text" name="Name_failure_head" ><?php echo $row["Remark"];?> </label></td>
	
	</tr>

<?php
			}
 ?>
 </table>
 </div>
 
   </br>
   <div>
 <center><h1>Extra-Curricular Activity</h1></center><br/>
 
 <table border="2" align="center">

		<th>Semester</th><th>Activity</th><th>Activity Performance</th>
 <?php
include_once("mentorshipdata.php");

	$query="SELECT * FROM extra_curricular_activities WHERE  Student_id='".$Student_id."'";
	
		$result = $conn->query($query);
	
			while($row= $result->fetch_assoc() )
			{		
			
	?>
	<tr>
		<td><label type="text" name="Semester" ><?php echo $row["Semester"]; ?></label></td>	
		<td><label type="text" name="Result" ><?php echo $row["Activities"]; ?></label></td>	
		<td><label type="text" name="No_heads_failure" ><?php echo $row["Activity_performance"]; ?></label></td>	
	</tr>

<?php
			}
 ?>
 </table>
 </div>
 
    </br>
   <div>
 <center><h1>Co-Curricular Activity</h1></center><br/>
 
 <table border="2" align="center">

		<th>Semester</th><th>Activity</th><th>Activity Performance</th>
 <?php
include_once("mentorshipdata.php");

	$query="SELECT * FROM co_curricular_activities WHERE  Student_id='".$Student_id."'";
	
		$result = $conn->query($query);
	
			while($row= $result->fetch_assoc() )
			{		
			
	?>
	<tr>
		<td><label type="text" name="Semester" ><?php echo $row["Semester"]; ?></label></td>	
		<td><label type="text" name="Result" ><?php echo $row["Activities"]; ?></label></td>	
		<td><label type="text" name="No_heads_failure" ><?php echo $row["Activity_performance"]; ?></label></td>	
	</tr>

<?php
			}
 ?>
 </table>
 </div>
 
     </br>
   <div>
 <center><h1>Mentorship Report</h1></center><br/>
 
 <table border="2" align="center">

		<th>Meeting No.</th><th>Date</th><th>Academic Year</th><th>Problem of Student</th><th>Mentor Suggestion</th><th>Remark</th>
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
		<td><label type="text" name="No_heads_failure" ><?php echo $row["academic_year"]; ?></label></td>
		<td><label type="text" name="Semester" ><?php echo $row["Student_problem"]; ?></label></td>	
		<td><label type="text" name="Result" ><?php echo $row["Mentor_suggestion"]; ?></label></td>	
		<td><label type="text" name="No_heads_failure" ><?php echo $row["Remark"]; ?></label></td>		
	</tr>

<?php
			}
 ?>
 </table>
 </div>
 
      </br>
   <div>
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
</div>
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
