<?php
if(isset($_POST['logout'])){
		session_start();
session_destroy();
	header("Location:login.php");
}
	session_start();
	if( isset($_SESSION['psw']) && isset($_SESSION['Student_id']))  
	{
		echo  print_r($_SESSION, TRUE) ;
		$e_id=$_SESSION['psw'];
		$ses_s_id=$_SESSION['Student_id'];
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
					  
             <center><h1>Sessional Test</h1></center><br/>
          </div>
        </div>
      </div>
    </header>
    </header>
	


 <form action="" method="post">
 
  <?php
include_once("mentorshipdata.php");

	$query="SELECT * FROM student WHERE  Student_id='".$ses_s_id."'";
	
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
    <input type="text" class="form-control-sm" id="year" name="s_acad"></td>

  <td>
	  <label for="sem">Choose semester:</label>&nbsp;&nbsp;&nbsp;&nbsp;
		<select class="form-control-lg" id="sem" name="s_sem"> 
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
<td align="center" colspan="2">
    <label for="sem">Choose Test:</label>&nbsp;&nbsp;
	<select class="form-control-lg" id="sem" name="s_test"> 
	    <option>--</option>
	    <option>Test 1</option>
		<option>Test 2</option>
	</select>
</td>
</tr>
  
  <tr height="40px">
	<th><label for="sub">Subjects</label></th>
	<th><label for="mrk">Marks obtained</label></th>
  </tr>
  <tr height="40px">
	<td><div class="form-group col">
    <input type="text" class="form-control-sm" id="dnm" name="s1">
    </div></td>
	<td>
  <div class="form-group col">
    <input type="text" class="form-control-sm" id="dcno" name="m1">
	</div></td>
  </tr>
  
   <tr height="40px">
	<td><div class="form-group col">
    <input type="text" class="form-control-sm" id="dnm" name="s2">
    </div></td>
	<td>
  <div class="form-group col">
    <input type="text" class="form-control-sm" id="dcno" name="m2">
	</div></td>
  </tr>
  
   <tr height="40px">
	<td><div class="form-group col">
    <input type="text" class="form-control-sm" id="dnm" name="s3">
    </div></td>
	<td>
  <div class="form-group col">
    <input type="text" class="form-control-sm" id="dcno" name="m3">
	</div></td>
  </tr>
  
   <tr height="40px">
	<td><div class="form-group col">
    <input type="text" class="form-control-sm" id="dnm" name="s4">
    </div></td>
	<td>
  <div class="form-group col">
    <input type="text" class="form-control-sm" id="dcno" name="m4">
	</div></td>
  </tr>
  
   <tr height="40px">
	<td><div class="form-group col">
    <input type="text" class="form-control-sm" id="dnm" name="s5">
    </div></td>
	<td>
  <div class="form-group col">
    <input type="text" class="form-control-sm" id="dcno" name="m5">
	</div></td>
  </tr>
  
   <tr height="40px">
	<td><div class="form-group col">
    <input type="text" class="form-control-sm" id="dnm" name="s6">
    </div></td>
	<td>
  <div class="form-group col">
    <input type="text" class="form-control-sm" id="dcno" name="m6">
	</div></td>
  </tr>
  
	<tr height="40px"> 
	<td align="center" colspan="2">
		<input type="submit" name="ses_submit" id="button" value="SUBMIT" onclick="loadDoc()" class="btn btn-info">
	</td>
	</tr>
  
  </table>
  
</form>

</div>


<?php
include_once("mentorshipdata.php");

if(isset($_POST['ses_submit']))
{
$s_acad=$_POST['s_acad'];	
$s_sem=$_POST['s_sem'];
$s_test=$_POST['s_test'];
$s1=$_POST['s1'];$m1=$_POST['m1'];
$s2=$_POST['s2'];$m2=$_POST['m2'];
$s3=$_POST['s3'];$m3=$_POST['m3'];
$s4=$_POST['s4'];$m4=$_POST['m4'];
$s5=$_POST['s5'];$m5=$_POST['m5'];
$s6=$_POST['s6'];$m6=$_POST['m6'];


switch(isset($_POST["ses_submit"]))
	{
	case (empty($s_acad)):
	$message = " !  Academic year is required.";
	echo "<script type='text/javascript'>alert('$message');</script>";
  	break;
	
  	case (empty($s_sem)):
	$message = " !  Semester is required.";
	echo "<script type='text/javascript'>alert('$message');</script>";
	break; 
	
	case (empty($s_test)):
	$message = " !  Test is required.";
	echo "<script type='text/javascript'>alert('$message');</script>";
	break; 
		
	default:
	
	$query="INSERT INTO sessional_test_record(student_id,academic_year,Semester,test_no,sub1,m1,sub2,m2,sub3,m3,sub4,m4,sub5,m5,sub6,m6)
				VALUES('$ses_s_id','$s_acad','$s_sem','$s_test','$s1','$m1','$s2','$m2','$s3','$m3','$s4','$m4','$s5','$m5','$s6','$m6')";
				 						 
						 
				$result = $conn->query($query);
			if($result === TRUE)
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
							