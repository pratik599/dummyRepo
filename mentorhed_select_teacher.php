<?php
if(isset($_POST['logout'])){
		session_start();
session_destroy();
	header("Location:login.php");
}
	session_start();
 	
	if(isset($_SESSION['s_branch']) && isset($_SESSION['s_class'])  && isset($_SESSION['psw']) && isset($_SESSION['s_year']))  
	{
		echo  print_r($_SESSION, TRUE) ;
		$branch=$_SESSION['s_branch'];
	$class=$_SESSION['s_class'];
	$year=$_SESSION['s_year'];
	
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
	<title>Registration</title>
  
  </head>
<style>
#demo{
	height:400px;
}
</style>
  <body>
  
  <?php
  require "nav.php";
  ?>
  <br/><br/><br/><br/><br/>

<div class="container-fluid">
<div class="row">
  <div class="form-group col-md-3">
  <label for="branch">branch:</label>
	<label for="branch_mh"><?Php echo $branch?></label>
  </div>
  <div class="form-group col-md-3">
  <label for="class1">class:</label>
<label for="class_mh"><?Php echo $class?></label>
	
  </div>
  
  <div class="form-group col-md-4">
    <label for="year">year:</label>
    <label for="class_mh"><?Php echo $year?></label>
	
  </div>
  
  <div class="form-group col-md-1">
   
     
  </div>
  
  </div>
	</div>
   
 <form action=" " method="post" enctype="multipart/form-data">
 
 <table class="table text-dark table-bordered">
<div class="table-responsive">
<tr class="bg-primary"></th>

</tr>
<?php
include_once("mentorshipdata.php");

	$query= "SELECT * FROM registration WHERE  t_branch='".$branch."'  ";     
	
		$result = $conn->query($query);
	
			while($row= $result->fetch_assoc() )
			{		
			
	?>
	
	<tr  >
	<form action=" " method="post"  enctype="multipart/form-data">
	
	<input type="text" name="t_id" style="display:none;"  value="<?php echo $row["id"];?>"/>	
	<td ><input type="text" name="t_name" value="<?php echo $row["t_name"]; ?>" disabled/></td>	
	
		<td > <input type="submit" name="submit" id="button" value="select"  class="btn btn-primary"></input></td>	
		</form>
		 <?php
if(isset($_POST['submit']))  
{
	if(!empty($_POST['t_id'])) 
		{
			$teacher=$_POST['t_id'];
		$_SESSION['s_branch']=$branch;
		$_SESSION['s_class']=$class;
		$_SESSION['s_year']=$year;
		$_SESSION['s_teacher']=$teacher;
		if(isset($_SESSION['s_teacher']))  
				{
					header("Location:mentor_select.php"); 
				
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

	</form>
	
		
	 
	 <div id="demo">
	
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
	