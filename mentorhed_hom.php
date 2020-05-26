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
 <form action=" " method="post">
	<div class="container-fluid">
<div class="row">
  <div class="form-group col-md-3">
  <label for="branch">Choose branch:</label>
	<select class="form-control-sm" id="branch" name="branch">
	
		<option>Chemical</option>
		<option>Electrical</option>
		<option>EXTC</option>
		<option>IT</option>
		<option>MCA</option>
        <option>Mechnical</option>
	</select>
  </div>
  <div class="form-group col-md-3">
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
  
  <div class="form-group col-md-1">
   
     <input type="submit" name="submit" id="button" value="select Teacher"  class="btn btn-primary"></input>
  </div>
  
  </div>
	</div>
	</form>
	<?php
if(isset($_POST['submit']))  
{
	if(!empty($_POST['branch']) && !empty($_POST['class']) && !empty($_POST['year'])) 
		{
			$branch=$_POST['branch'];
		$class=$_POST['class'];
		$year=$_POST['year'];
		$_SESSION['s_branch']=$branch;
		$_SESSION['s_class']=$class;
		$_SESSION['s_year']=$year;
		if(isset($_SESSION['s_branch']) && isset($_SESSION['s_class']) &&  isset($_SESSION['s_year']))  
				{
					header("Location: mentorhed_select_teacher.php"); 
				
				}
		}
}
?>
	 
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
	