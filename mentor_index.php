<?php
if(isset($_POST['logout'])){
		session_start();
session_destroy();
	header("Location:login.php");
}


	session_start();
 	
		if(isset($_SESSION['psw']))   {
	
		
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
		<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">

    <title>Mentorship System</title>
		<link href="./css/bootstrap.min.css" rel="stylesheet">
		<script src="./js/jquery-3.3.1.min.js"></script>
		<script src="./js/bootstrap.min.js"></script>
		<link href="css/clean-blog.min.css" rel="stylesheet">
		
	<!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	-->
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
</br></br></br>
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/college.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Mentorship System</h1>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
   <div class="container">
		<div class="alert alert-warning">
		<H2 style="text-align:center">Vision</h2>
		<p>The academy aspires to nurture students as leaders who are in tune with global trends, 
		equipped with engineering knowledge and practical skills, to excel in creativity and innovation 
		in order to play their part in technological advancement of the nation.</p>
		</div>
		
		<div class="alert alert-success">
		<H2 style="text-align:center">Mission</h2>
		<p>1. To become foremost seat of advanced technical learning as a center of excellence in the region.<br>
		2. To offer state of the art facilities and quality education at affordable cost.<br>
		3. To inculcate in students the culture of 'Play Hard and Play Fair'.<br>
		4. To advance sustainable development in the region through opportunities for entrepreneurship and 
		industry-institute interaction.<br>
		5. To create a generation of young professionals who appreciate in all its aspects the necessity of balance 
		between technological advances and traditional values.</p>
		</div>
		
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
