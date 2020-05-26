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

    <!-- Navigation -->
  <?php
  require "nav.php";
  ?>
  <br/><br/><br/><br/><br/>
 <header>
      <div class="container">
        <div class="row">
          <div class="col">            
             <center><h1>Student Attendance</h1></center><br/>
          </div>
        </div>
      </div>
    </header>
	
	<div class="container">

 <form action="">
 
 <div class="row">
  <div class="form-group col-lg-12">
  <div class="input-group mb-4">
    <div class="input-group-prepend">
	<span class="input-group-text">Student Name</span>
	</div>
    <input type="text" class="form-control" placeholder="First Name" id="fnm">
	<input type="text" class="form-control" placeholder="Middle Name" id="mnm">
	<input type="text" class="form-control" placeholder="Last Name" id="lnm">
  </div>
  </div>
  </div>
  <div class="row">
   <div class="form-group col-md-6">
    <label for="year">Academic year:</label>&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" class="form-control-sm" id="year">
  </div>
  <div class="form-group col-md-6">
  <label for="sem">Choose semester:</label>
	<select class="form-control-lg" id="sem"> 
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
  </div>
  </div>
   <div class="row">
  <div class="form-group col-md-6">
    <label for="attn">Attendance at the:</label>&nbsp;&nbsp;&nbsp;&nbsp;
    <select class="form-control-lg" id="attn"> 
	    <option>--</option>
	    <option>end of first month</option>
		<option>end of second month</option>
		<option>end of third month</option>
	</select>
  </div>
  </div>
  <div  class="row">
   <div class="form-group col">
    <label for="per">Percentage:</label><br/>
    <input type="text" class="form-control-sm" id="per">
  </div>
  <div class="form-group col">
    <label for="remk">Remarks:</label><br/>
    <textarea class="form-control-lg" rows="2" id="remk"></textarea>
  </div>
  </div>
  </div>
	
	 <?php
  require "footer.php";
  ?>