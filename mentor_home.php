<?php
if(isset($_POST['logout'])){
		session_start();
session_destroy();
	header("Location:login.php");
}


	session_start();
 	
		if(isset($_SESSION['psw']))   {
			echo  print_r($_SESSION, TRUE) ;
		
		$e_id=$_SESSION['psw'];
	
 }
		
		
	else
	{
		echo "session not start";
		header("Location:login.php");
	}
	




?>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <title>Mentorship System</title>
		<link href="./css/bootstrap.min.css" rel="stylesheet">
		<script src="./js/jquery-3.3.1.min.js"></script>
		<script src="./js/bootstrap.min.js"></script>	
		<link href="css/clean-blog.min.css" rel="stylesheet">
<style>
.nav-link{
	padding: 0px 10px;
	font-size:20px;
	text-decoration: none;
	color:white;
	font-size: 25px;
	}

.bt2 {
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 25px;
}
#d1{
	height:400px;
}
</style>
  
  </head>

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
              <a class="nav-link" href="mentor_home.php">View Students</a>
            </li>
			<li class="nav-item">
			<form method="post"><button class="bt2 bg-primary" type="submit" name="logout" value="logout">Logout</button></form>
			</li>
		</ul>
		</div>
	</div>
</nav>
  <br/><br/><br/><br/><br/></br>
 <form action=" " method="post" enctype="multipart/form-data">
	<div class="container-fluid">
<div class="row">
 
  <div class="form-group col-md-4">
  <label for="class1">Choose class:</label>
	<select class="form-control-sm" id="class1" name="class"> 
	  
	    <option>FE</option>
		<option>SE</option>
		<option>TE</option>
		<option>BE</option>
	</select>
	
	
  </div>
  
  <div class="form-group col-md-4">
    <label for="year">Academic year:</label>
    <input type="text" class="form-control-sm" id="year" name="year">
  </div>
  
  <div class="form-group col-md-4">
     <input type="submit" name="submit" id="button" value="select"  class="btn btn-primary"></input>
  </div>
  
  </div>
	</div>
	</form><?php
if(isset($_POST['submit']))  
{
	if(!empty($_POST['class']) && !empty($_POST['year'])) 
		{
			
		$class=$_POST['class'];
		$year=$_POST['year'];
	
		$_SESSION['s_class']=$class;
		$_SESSION['s_year']=$year;
		if(isset($_SESSION['s_class']) &&  isset($_SESSION['s_year']))  
				{
					header("Location:view_student.php");
				
				}
		}
}
?>
	  <div id="d1">
  <center><h3>STUDENT DETAILS</h3></center>
<table class="table text-dark table-bordered ">
<div class="table-responsive">
<tr class="bg-primary"><th >Roll No</th><th >Reg No</th><th>Student Name</th>
<th>Academic Year</th><th>Branch</th><th>Class</th><th></th><th></th>

</tr>
<?php
include_once("mentorshipdata.php");

		
			$query2="SELECT * FROM student WHERE   t_id='".$e_id."' ";
			$result2 = $conn->query($query2);
			while($row2= $result2->fetch_assoc() )
			{
	?>
	
	<tr>
	<form action="" method="post"  enctype="multipart/form-data">
	<input type="text" name="Student_id" style="display:none; "value="<?php echo $row2["student_id"]; ?> "/>
	<input type="text" name="Reg_no" style="display:none; "value="<?php echo $row2["Reg_no"]; ?> "/>
	<td ><label type="text" name="Roll_no" ><?php echo $row2["Roll_no"]; ?></label></td>	
	<td ><label type="text" name="Reg_no_l" ><?php echo $row2["Reg_no"]; ?></label></td>	
	<td ><label type="text" name="student_name" ><?php echo $row2["student_name"];?> </label></td>
	<td ><label type="text" name="academic_year" ><?php echo $row2["academic_year"]; ?></label></td>
	<td ><label type="text" name="contact_no" ><?php echo $row2["branch_name"]; ?></label></td>
	<td ><label type="text" name="contact_no" ><?php echo $row2["class"]; ?></label></td>
	
	
	
		<td > <input type="submit" name="Add" id="button" value="Add Record"  class="btn btn-info"></input>
		

		 <td colspan="2"> <input type="submit" name="View" id="button" value="View Record"  class="btn btn-info"></input>
		 		</form>
				<?php
include_once("mentorshipdata.php");
if(isset($_POST['Add']))  
{
	if(!empty($_POST['Student_id'])) 
		{
			$s_id=$_POST['Student_id'];
			$s_Reg_no=$_POST['Reg_no'];
		$_SESSION['Student_id']=$s_id;
		$_SESSION['Reg_no']=$s_Reg_no;
		if(isset($_SESSION['Student_id']) && isset($_SESSION['Reg_no']))  
				{
					header("Location:add_record2.php"); 
				
				}
		}
}

if(isset($_POST['View']))  
{
	if(!empty($_POST['Student_id'])) 
		{
			$s_id=$_POST['Student_id'];
			$s_Reg_no=$_POST['Reg_no'];
		$_SESSION['Student_id']=$s_id;
		$_SESSION['Reg_no']=$s_Reg_no;
		if(isset($_SESSION['Student_id']) && isset($_SESSION['Reg_no']))  
				{
					header("Location:view_record.php"); 
				
				}
		}
}
	 ?>
	</tr> 
	<?php
			}
 ?>
 	
	</div>
	</table>
	</div>
<footer class="bg-dark text-light">
      <div class="container">
        <div class="row">
          <div class="col">
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
	
