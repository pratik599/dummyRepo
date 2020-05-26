<?php
session_start();
if(isset($_SESSION['psw']))
{
	header('Location: mentor_index.php');
}
?>