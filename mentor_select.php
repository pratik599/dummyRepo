<?php
if(isset($_POST['logout'])){
		session_start();
session_destroy();
	header("Location:login.php");
}
	session_start();
 	
	if( isset($_SESSION['s_teacher']))  
	{
		echo  print_r($_SESSION, TRUE) ;
		$branch=$_SESSION['s_branch'];
	$class=$_SESSION['s_class'];
	$year=$_SESSION['s_year'];
	$id=$_SESSION['s_teacher'];
	
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

  
  </head>

  <body>
 
  <?php
  require "nav.php";
  ?></br></br></br></br>
  <?php echo  print_r($_SESSION, TRUE) ;
		$branch=$_SESSION['s_branch'];
	$class=$_SESSION['s_class'];
	$year=$_SESSION['s_year'];?>
  <center><h3>MENTOR SELECTION</h3></center>
  <?php
include_once("mentorshipdata.php");

	$query= "SELECT * FROM registration WHERE  id='".$id."'  ";     
	
		$result = $conn->query($query);
	
			while($row= $result->fetch_assoc() )
			{		
			
			?>
				<h4 align="center">Teacher Name :  <label type="text" name="tn_name" ><?php echo $row["t_name"];?> </label></h4>
			<?php
			}
			?>
<table class="table text-dark table-bordered">
<div class="table-responsive">
<tr class="bg-primary"><th>Roll no</th><th >Student Name</th><th>Branch</th>
<th>Class</th><th>Year</th><th></th>

</tr>
<?php
include_once("mentorshipdata.php");

	$query= "SELECT * FROM registration WHERE  id='".$id."'  ";     
	
		$result = $conn->query($query);
	
			while($row= $result->fetch_assoc() )
			{		
			
	?>
	
	<tr  >
	<form action="" method="post"  enctype="multipart/form-data">
	<input type="text" name="t_id" style="display:none; " value="<?php echo $row["id"]; ?>"/>
<input type="text" name="s_branch" style="display:none; " value="<?php echo $branch; ?>" />
<input type="text" name="s_class" style="display:none; " value="<?php echo $class; ?>" />
<input type="text" name="s_year" style="display:none; " value="<?php echo $year; ?>" />	
	
	<td ><input type="text" name="s_roll" /></td>
	<td ><input type="text" name="s_name" /></td>
	<td ><input type="text" name="s_branch1" value="<?php echo $branch; ?>" disabled/></td>
	<td ><input type="text" name="s_class2" value="<?php echo $class; ?>" disabled/></td>
<td ><input type="text" name="s_year2" value="<?php echo $year; ?>" disabled/></td>	
	
	
		<td > <input type="submit" name="submit" id="button" value="Done" window.onload="do_change();"  class="btn btn-primary">
		 <button><a href="mentorhed_select_teacher.php">BACK</a></button></td>	
		</form>
	</tr> 
	<?php
			}
 ?>
 	
	</div>
	</table>

	 </body>
	 </html>
	 <script type="text/javascript">
function do_change(){

document.getElementById("Update").style.display = 'block';
}
</script>
	 <?php
	 if(isset($_POST['submit']))
{
	include_once("mentorshipdata.php");
		$s_name=$_POST["s_name"];
		$s_roll=$_POST["s_roll"];
		$s_branch=$_POST["s_branch"];
		$s_class=$_POST["s_class"];
	$t_id=$_POST['t_id'];
	switch(isset($_POST["submit"]))
	{
		case (empty($s_roll)):
		$message = " !  Student Roll Number is required.";
		echo "<script type='text/javascript'>alert('$message');</script>";
		break;
		
		case (empty($s_name)):
		$message = " !  Student name is required.";
		echo "<script type='text/javascript'>alert('$message');</script>";
		break; 
		default:
		$query4="INSERT INTO student(t_id,student_name,branch_name,class,Roll_no,academic_year)
			VALUES('$t_id','$s_name','$s_branch','$s_class','$s_roll','$year')";
		$result4 = $conn->query($query4);
		if($result4==TRUE )
			{
				$message = " Mentor Assign.";
				echo "<script type='text/javascript'>alert('$message');</script>";
						
			}
		else
		{
				$message = " ! Mentor not Assign.";
				echo "<script type='text/javascript'>alert('$message');</script>";
													
		}	
		echo $conn->error;
		$conn->close();
	
	}
	

	
}?>