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

<table class="table text-dark table-bordered " ><h1 >Details</h1>
<div class="table-responsive">
<tr class="bg-primary"><th >Roll No</th><th >Reg No</th><th>Student Name</th><th>Academic Year</th><th>Contact No</th><th>Email id</th><th>Teacher's</th>
<th>Confirm</th>
</tr>
<?php
include_once("mentorshipdata.php");
if(isset($_POST['branch'],$_POST['class1'],$_POST['year'])){
	$branch=$_POST['branch'];
	$class=$_POST['class1'];
	$year=$_POST['year'];
	
	
	
	$query="SELECT * FROM student WHERE  branch_id='".$branch."' AND class='".$class."' AND academic_year='".$year."'";
	
		$result = $conn->query($query);
		
		
		if($result->num_rows!=0 )
		{
			
			while($row= $result->fetch_assoc() )
			{		
			
	?>
	<tr  >
	<form action="" method="post"  enctype="multipart/form-data">
	<td ><label type="text" name="Roll_no" ><?php echo $row["Roll_no"]; ?></label></td>	
	<td ><label type="text" name="Reg_no" ><?php echo $row["Reg_no"]; ?></label></td>	
	<td ><label type="text" name="student_name" ><?php echo $row["student_name"];?> <?php echo $row[ "s_father_name"];?> <?php echo $row[ "s_last_name"];?></label></td>
	<td ><label type="text" name="academic_year" ><?php echo $row["academic_year"]; ?></label></td>
	<td ><label type="text" name="contact_no" ><?php echo $row["contact_no"]; ?></label></td>
	<td ><label type="text" name="contact_no" ><?php echo $row["Student_email"]; ?></label></td>
	<td>	
		<?php
			$query2="SELECT * FROM registration WHERE  t_branch='".$branch."' ";
			$result2 = $conn->query($query2);
			echo "<select name='t_name'>";
			while($row2= $result2->fetch_assoc()){
				
				echo "<option value='".$row2['t_name']."'>".$row2['t_name']."</opyion>";
			}
			echo "</select>";
		?>
	</td>
		<td > <input type="submit" name="submit" id="button" value="Done"  class="btn btn-primary"></input></td>
		 </form>
	</tr>
	<?php
			}
 ?><?php
} }
?>
	</div>
	</table>
	
	 </body>
	 </html>