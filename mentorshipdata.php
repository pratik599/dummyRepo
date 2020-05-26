<?php
$servername="localhost";
$username="root";
$password="";
$database="mentorship";
$conn= new mysqli($servername,$username,$password,$database);
if($conn->connect_error)
{
die("connection faild".$con->connect_error);

}
	?>