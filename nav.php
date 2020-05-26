<?php
if(isset($_POST['logout'])){
		session_start();
session_destroy();
	header("Location:login.php");
}
?>
  <style>
.nav-link{
	padding: 0px 10px;
	text-decoration: none;
	color:white;
	font-size: 25px;
	}
.bt1 {
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 25px;
}
</style>

<nav class="navbar navbar-expand-sm bg-primary navbar-dark fixed-top">
      
      <div class="container">

		  <a class="navbar-brand" href="index.php"><img src="./img/logo.png" alt="logo"/></a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          
		  <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link text-white" href="index.php">Home</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white" href="#" id="navbardrop" >Student Details</a>
			   
            </li>
			<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" id="navbardrop" data-toggle="dropdown">Mentor</a>
			   <div class="dropdown-menu">
				<a class="dropdown-item" href="mentorhed_hom.php">Assign Mentor</a>
				<a class="dropdown-item" href="#">View</a>
			   </div>
            </li>
			
			<form action="" method="post"><li class="header_li"><input class="bt1 bg-primary" type="submit" name="logout" value="Logout"></li></form>
          </ul>
        </div>
      </div>
  </nav>