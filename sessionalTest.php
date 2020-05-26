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
	table{
		text-align:center;
	}
	th{
		font-size:25px;
	}
	</style>
  
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
             <center><h1>Record of Sessional Test</h1></center><br/>
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
   <div class="form-group col-md-4">
    <label for="year">Academic year:</label>&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" class="form-control-sm" id="year">
  </div>
  <div class="form-group col-md-4">
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
 
  <div class="form-group col-md-4">
    <label for="sem">Choose Test:</label>
	<select class="form-control-lg" id="sem"> 
	    <option>--</option>
	    <option>Test 1</option>
		<option>Test 2</option>
	</select>
  </div>
  </div>
  <br/>
  <table align="center">
  <tr>
	<th><label for="sub">Subjects</label></th>
	<th><label for="mrk">Marks obtained</label></th>
  </tr>
  <tr>
	<td><div class="form-group col">
    <input type="text" class="form-control-sm" id="dnm">
    </div></td>
	<td>
  <div class="form-group col">
    <input type="text" class="form-control-sm" id="dcno">
	</div></td>
  </tr>
  
   <tr>
	<td><div class="form-group col">
    <input type="text" class="form-control-sm" id="dnm">
    </div></td>
	<td>
  <div class="form-group col">
    <input type="text" class="form-control-sm" id="dcno">
	</div></td>
  </tr>
  
   <tr>
	<td><div class="form-group col">
    <input type="text" class="form-control-sm" id="dnm">
    </div></td>
	<td>
  <div class="form-group col">
    <input type="text" class="form-control-sm" id="dcno">
	</div></td>
  </tr>
  
   <tr>
	<td><div class="form-group col">
    <input type="text" class="form-control-sm" id="dnm">
    </div></td>
	<td>
  <div class="form-group col">
    <input type="text" class="form-control-sm" id="dcno">
	</div></td>
  </tr>
  
   <tr>
	<td><div class="form-group col">
    <input type="text" class="form-control-sm" id="dnm">
    </div></td>
	<td>
  <div class="form-group col">
    <input type="text" class="form-control-sm" id="dcno">
	</div></td>
  </tr>
  
   <tr>
	<td><div class="form-group col">
    <input type="text" class="form-control-sm" id="dnm">
    </div></td>
	<td>
  <div class="form-group col">
    <input type="text" class="form-control-sm" id="dcno">
	</div></td>
  </tr>
  
  </table>
  </div>
	
	 <?php
  require "footer.php";
  ?>