<?php
session_start(); 
include '../../config/config.php';

if(isset($_POST["username"]) && isset($_POST["pwd"]) && ($_POST["username"] !="") && ($_POST["pwd"] !=""))
{
	 $username=$_POST["username"];
	 $pwd=md5($_POST["pwd"]);
	
	 $query = $db_connection->query("select * from admin_login where username='$username'and pwd='$pwd'");
	
	 if($query->num_rows > 0){
		
	header("Location:". ADMINPATH."/dashboard.php");
	 }
	 else{
		 $_SESSION['log_error']="Invalid Login";
		 	header("Location:". ADMINPATH."/login.php");
	 }
}
?>

