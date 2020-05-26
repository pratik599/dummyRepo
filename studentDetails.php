
<?php
if(isset($_POST['logout'])){
		session_start();
session_destroy();
	header("Location:login.php");
}


	session_start();
 	
		if(isset($_SESSION['psw']) && isset($_SESSION['s_year']) && isset($_SESSION['s_class']) ) 
			{
	echo  print_r($_SESSION, TRUE) ;
		$year=$_SESSION['s_year'];
		$class=$_SESSION['s_class'];
		$e_id=$_SESSION['psw'];
		$Student_id=$_SESSION['Student_id'];
 }
		
		
	else
	{
		echo "session not start";
		header("Location:login.php");
	}
	




?><html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <title>Mentorship System</title>
		<link href="./css/bootstrap.min.css" rel="stylesheet">
		<script src="./js/jquery-3.3.1.min.js"></script>
		<script src="./js/bootstrap.min.js"></script>
	
		<link href="css/clean-blog.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <style>
.nav-link{
	padding: 0px 10px;
	font-size:20px;
	text-decoration: none;
	color:white;
	}

.bt1 {
  background-color:rgb(0,150,255);
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
}
</style>
  </head>

  <body class="w3-light-grey">
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-bar w3-top w3-blue  fixed-top" style="z-index:4;">
  
  <span class="w3-bar-item w3-left"><a class="navbar-brand" href="mentor_index.php"><img src="./img/logo.png" alt="logo"/></a></span>
  
  <span class="w3-bar-item w3-right" style="margin-top:25px;">
			<form action="" method="post">
			<table>
				<tr>
					<td><a class="nav-link" href="mentor_index.php">Home</a></td>

					<td><a class="nav-link" href="view_student.php">View Students</a></td>

					<td><button class="bt1" style="font-size:20px;" type="submit" name="logout" value="logout">Logout</button></td>
			</tr>
			</table>
		</form>
  </span>
</div>
  <hr>

  <div class="w3-bar-block" style="margin-top:60px">
    <a href="studentDetails.php" class="w3-bar-item w3-button w3-padding w3-hover-blue">Student Details</a>
    <a href="academicrecord2.php" class="w3-bar-item w3-button w3-padding w3-hover-blue">Academic Record</a>
    <a href="studentAttendance1.php" class="w3-bar-item w3-button w3-padding w3-hover-blue">Attendance Record</a>
    <a href="sessionalTest2.php" class="w3-bar-item w3-button w3-padding w3-hover-blue">Sessional Test Record</a>
    <a href="exactivity2.php" class="w3-bar-item w3-button w3-padding w3-hover-blue">Extra-Curricular Activity</a>
    <a href="coactivity2.php" class="w3-bar-item w3-button w3-padding w3-hover-blue">Co-Curricular Activity</a>
    <a href="studentmeetings2.php" class="w3-bar-item w3-button w3-padding w3-hover-blue">Student Meeting</a>
    <a href="parentmeetings2.php" class="w3-bar-item w3-button w3-padding w3-hover-blue">Parent Meeting</a>

  </div>
  </nav>
  
 <div class="w3-main" style="margin-left:300px;margin-top:100px;">
 <header>
      <div class="container">
        <div class="row">
          <div class="col">            
             <center> <h1>Student Details</h1></center><br/>
          </div>
        </div>
      </div>
    </header>
	
	
	
	
	
	
	

 <form action="" method="post"  enctype="multipart/form-data">

 <table border="2" align="center">
<div class="table-responsive">
<?php
include_once("mentorshipdata.php");
			$query2="SELECT * FROM student WHERE   t_id='".$e_id."' AND class='".$class."' AND academic_year='".$year."'";
			$result2 = $conn->query($query2);
			while($row2= $result2->fetch_assoc() )
			{
	?>
<tr height="40px">
	<th width="250px">Class</th>
	<td><select class="form-control-sm" id="class1" name="class"> 
	  
	    <option>FE</option>
		<option>SE</option>
		<option>TE</option>
		<option>BE</option>
	</select></td>
	
	<th width="250px">Branch</th>
	<td><select class="form-control-sm" id="branch" name="branch">
	
		<option>Chemical</option>
		<option>Electrical</option>
		<option>EXTC</option>
		<option>IT</option>
		<option>MCA</option>
        <option>Mechnical</option>
	</select></td>
</tr>
<tr height="40px">
	<th>Roll No.</th>
	<td><input type="text" class="form-control-sm" id="rollno" name="rollno" value="<?php echo $row2["Roll_no"]; ?> " ></td>

	<th>Academic Year</th>
	<td><input type="text" class="form-control-sm" id="year" name="year" value="<?php echo $year; ?> "></td>
</tr>
<tr height="40px">
	<th>Student Name :</th>
	<td colspan="3"><input type="text" name="name" class="form-control" placeholder="Enter Full Name (First name Middle name Last name)" id="fnm" value="<?php echo $row2["student_name"]; ?> "></td>
</tr>
<tr height="40px">
	<th>Father Name</th>
	<td><input type="text" class="form-control-sm" id="fathernm" name="father"></td>
	<th>Occupation</th>
	<td><input type="text" class="form-control-sm" id="ocp" name="occp"></td>
</tr>

<tr height="40px">
	<th>Mother Name</th>
	<td colspan="3"><input type="text" class="form-control-sm" id="mothernm" name="mother"></td>
</tr>
<tr height="40px">
	<th>Date Of Birth</th>
	<td><input type="date"  value="<?php echo date('Y-m-d'); ?>" class="form-control-sm"  id="dob"  name="DOB"/></td>

	<th>Blood Group</th>
	<td><select class="form-control-sm" id="bgp" name="b_group"> 
						<option>O+</option>
						<option>O-</option>
						<option>A+</option>
						<option>A-</option>
						<option>B+</option>
						<option>B-</option>
						<option>AB+</option>
						<option>AB-</option>
					</select></td>
</tr>

<tr height="40px">
	<th>Registration Number</th>
	<td><input type="text" class="form-control-sm" id="regno" name="re_number"></td>

	<th>Aadhar No.</th>
	<td><input type="text" class="form-control-sm" id="adharno" name="adharno"></td>
</tr>
<tr height="40px">
	<th>Parent Email</th>
	<td><input type="email" class="form-control-sm" id="email1" name="p_email"></td>

	<th>Student Email</th>
	<td><input type="email" class="form-control-sm" id="email2" name="email"></td>
</tr>
<tr height="40px">
	<th>Correspondence Address</th>
	<td width="300px"><textarea class="form-control-lg" rows="2" id="cadrs" name="corre_address"></textarea></td>

	<th>Permanent Address</th>
	<td width="300px"><textarea class="form-control-lg" rows="2" id="padrs" name="per_address"></textarea></td>
</tr>
<tr height="40px">
	<th>Parent Contact No.</th>
	<td><input type="text" class="form-control-sm" id="pcno" name="pa_contact"></td>

	<th>Student Contact No.</th>
	<td><input type="text" class="form-control-sm" id="scno" name="contact"></td>
</tr>
<tr height="40px">
	<th>Health Problem</th>
	<td colspan="3"><input type="text" class="form-control" id="hnm" name="health"></td>
</tr>
<tr>
	<th>Family Doctor Name</th>
	<td><input type="text" class="form-control-sm" id="dnm" name="doctor"></td>

	<th>Doctor Contact No.</th>
	<td><input type="text" class="form-control-sm" id="dcno" name="doc_contact"></td>
</tr>

<tr height="20px">
	
	 <td colspan="2"><label for="photo">Student's Photo</label>
			<input type="file" class="form-control-file" id="photo" name="photos">
	</td>
	<td colspan="2"><label for="signature">Student's Signature</label>
		<input type="file" class="form-control-file" id="signature" name="signature">
	</td>

</tr>
			<?php } ?>
			</div>
</table>
</br>
  
  <input type="submit" name="submit"  class="btn btn-primary" style="border-radius:6px;"></input>
</form>

</div>

   <footer class="w3-container w3-padding-16 w3-light-blue">
    <h5>A project by FAMT </h5>
	<p align="center">Copyright &copy; 2019
	  All rights reserved.
	  Site Designed and Maintained by PKPA, Dept. Of MCA</p>
  </footer>
    <!-- Footer -->
  
    <!-- Bootstrap core JavaScript -->
  </body>

</html>
<?php
include_once("mentorshipdata.php");

if(isset($_POST['submit']))
{
	
	$sname=$_POST['name'];                   $s_b_group=$_POST['b_group'];
	  $s_p_email=$_POST['p_email'];
		 $s_email=$_POST['email'];
	$s_branch=$_POST['branch'];              $s_corre_address=$_POST['corre_address'];
	$s_class=$_POST['class'];                $s_per_address=$_POST['per_address'];
	$s_rollno=$_POST['rollno'];              $s_pa_contact=$_POST['pa_contact'];
	$s_re_number=$_POST['re_number'];      	 $S_contact=$_POST['contact'];
	$s_year=$_POST['year'];                  $s_health=$_POST['health'];
	$s_adharno=$_POST['adharno'];			 $s_doctor=$_POST['doctor'];
	$s_father=$_POST['father'];				 $s_doc_contact=$_POST['doc_contact'];		
	$s_ocp=$_POST['occp'];                  
	
	$s_mother=$_POST['mother'];           
	$s_dob=$_POST['DOB'];
	

  //-------------------------------------------------------------------------------------------------------------------//
	
	
	
$target_dir = "./photo/";
$target_file = $target_dir . basename($_FILES["photos"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


$target_dir1 = "./signature/";
$target_file1 = $target_dir1 . basename($_FILES["signature"]["name"]);
$uploadOk1 = 1;
$imageFileType1 = pathinfo($target_file1,PATHINFO_EXTENSION);

//--------------------------------------------------------------------------------------------------------------------------------//

	switch(isset($_POST["submit"]))
	{
		
		
	case (empty($sname)):
	$message = " !  Name is required.";
  echo "<script type='text/javascript'>alert('$message');</script>";
   
	break; 
	
	case(empty($s_rollno)):
	$message = " !  Roll number  is required.";
  echo "<script type='text/javascript'>alert('$message');</script>";
	break;
	
	case(empty($s_re_number)):
	$message = " ! collage register number is required.";
  echo "<script type='text/javascript'>alert('$message');</script>";
	break;
	case(empty($s_year)):
	$message = " ! academic year  is required.";
  echo "<script type='text/javascript'>alert('$message');</script>";
	break;
	case(empty($s_adharno)):
	$message = " ! adhar number  is required.";
  echo "<script type='text/javascript'>alert('$message');</script>";
	break;
	case(empty($s_father)):
	$message = " ! father  name is required.";
  echo "<script type='text/javascript'>alert('$message');</script>";
	break;
	case(empty($s_mother)):
	$message = " ! mother  name is required.";
  echo "<script type='text/javascript'>alert('$message');</script>";
	break;
	case(empty($s_ocp)):
	$message = " ! occupation is required.";
  echo "<script type='text/javascript'>alert('$message');</script>";
	break;
	case(empty($s_email)):
	$message = " ! email is required.";
  echo "<script type='text/javascript'>alert('$message');</script>";
	break;
	case(empty($s_p_email)):
	$message = " ! parent email is required.";
  echo "<script type='text/javascript'>alert('$message');</script>";
	break;
	case(empty($s_corre_address)):
	$message = " ! Correspondence address is required.";
  echo "<script type='text/javascript'>alert('$message');</script>";
	break;
	case(empty($s_per_address)):
	$message = " ! Permanent address is required.";
  echo "<script type='text/javascript'>alert('$message');</script>";
	break;
	case(empty($s_pa_contact)):
	$message = " ! Permanent contact number is required.";
  echo "<script type='text/javascript'>alert('$message');</script>";
	break;
	case(empty($S_contact)):
	$message = " !  contact number is required.";
  echo "<script type='text/javascript'>alert('$message');</script>";
	break;
	case(empty($s_doctor)):
	$message = " !  doctor name is required.";
  echo "<script type='text/javascript'>alert('$message');</script>";
	break;
	case(empty($s_doc_contact)):
	$message = " !  doctor contact number is required.";
  echo "<script type='text/javascript'>alert('$message');</script>";
	break;
//-----------------------------------------------------------------------------------------------------------------------------------//	
	
		// Check if file already exists
		case (file_exists($target_file)) ;
		$message ="Sorry, file already exists or student photo not selected.";
		$uploadOk = 0;
	echo "<script type='text/javascript'>alert('$message');</script>";
		break;
		// Check file size
	case($_FILES["photos"]["size"] > 500000) ;
  $message ="Sorry, your file is too large.";
    $uploadOk = 0;
	echo "<script type='text/javascript'>alert('$message');</script>";
		break;
		
		
	// Allow certain file formats
case($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) ;
    $message ="Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
	echo "<script type='text/javascript'>alert('$message');</script>";
break;	
		
		// Check if $uploadOk is set to 0 by an error
case ($uploadOk == 0) ;
      $message = "Sorry, your file was not uploaded.";
	echo "<script type='text/javascript'>alert('$message');</script>";
break;
//----------------------------------------------------------------------------------------------------------------------------------------//
		// Check if file already exists
		case (file_exists($target_file1)) ;
		$message ="Sorry, file already exists or signature photo not select.";
		$uploadOk1 = 0;
	echo "<script type='text/javascript'>alert('$message');</script>";
		break;
		// Check file size
	case($_FILES["signature"]["size"] > 500000) ;
  $message ="Sorry, your file is too large.";
    $uploadOk1 = 0;
	echo "<script type='text/javascript'>alert('$message');</script>";
		break;
		
		
	// Allow certain file formats
case($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg"
&& $imageFileType1 != "gif" ) ;
    $message ="Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk1 = 0;
	echo "<script type='text/javascript'>alert('$message');</script>";
break;	
		
		// Check if $uploadOk is set to 0 by an error
case ($uploadOk1 == 0) ;
      $message = "Sorry, your file was not uploaded.";
	echo "<script type='text/javascript'>alert('$message');</script>";
break;
//-----------------------------------------------------------------------------------------------------------------------------------------//
	default:
	// if everything is ok, try to upload file

    if (move_uploaded_file($_FILES["photos"]["tmp_name"], $target_file)) {
       
    } 
	if (move_uploaded_file($_FILES["signature"]["tmp_name"], $target_file1)) {
       
    } 
	$query = "UPDATE student SET t_id='$e_id',student_name='$sname',branch_name='$s_branch',class='$s_class',Roll_no='$s_rollno',father_name='$s_father',mother_name='$s_mother',DOB='$s_dob',Blood_group='$s_b_group',academic_year='$s_year',contact_no='$S_contact',occupation='$s_ocp',Reg_no='$s_re_number',Corr_address='$s_corre_address',Per_address='$s_per_address',parent_contact='$s_pa_contact',Health_problem='$s_health',Family_dr_name='$s_doctor',dr_contact='$s_doc_contact',Aadhar_no='$s_adharno',Student_email='$s_email',parent_email='$s_p_email',image='$target_file',seg_image='$target_file1' WHERE student_id='$Student_id'";
	
		$result = $conn->query($query);
		
		if($result === TRUE )
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
