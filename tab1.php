<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  margin-top:110px;
  float: left;
  border: 2px solid #ccc;
  background-color: #f1f1f1;
  width: 20%;
  height: 110%;

}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: 0.5px solid;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
	margin-top:110px;
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 100%;
}
</style>
</head>
<body>




<div class="tab">
			<a class="" href="academicrecord.php"><button>Academic Record</button></a>

              <a class="" href="studentAttendance.php"><button>Attendance Record</button></a>

              <a class="" href="sessionalTest.php"><button>Sessional Test Record</button></a>

              <a class="" href="exactivity.php"><button>Extra-Curricular Activity</button></a>

			  <a class="" href="coactivity.php"><button>Co-Curricular Activity</button></a>
			  
			  <a class="" href="studentmeetings.php"><button>Student Meeting</button></a>
			  
			  <a class="" href="parentmeetings.php"><button>Parent Meeting</button></a>
</div>

  
</body>
</html> 
