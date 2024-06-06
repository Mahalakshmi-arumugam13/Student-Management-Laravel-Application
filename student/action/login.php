<?php
session_start(); 
include '../../config/config.php';

if(isset($_POST["username"]) && isset($_POST["pwd"]) && ($_POST["username"] !="") && ($_POST["pwd"] !=""))
{
	 $username=$_POST["username"];
	 $pwd=md5($_POST["pwd"]);
	
	 $query = $db_connection->query("select * from student where usename='$username'and pwd='$pwd' and status='1'");
	
	 if($query->num_rows > 0){
		 $student_det= $query->fetch_object();
		
		$_SESSION['student_id']=$student_det->id;
		$_SESSION['student_name']=$student_det->name;
	header("Location:". STUDENTPATH."/video.php");
	 }
	 else{
		 $_SESSION['log_error']="Invalid Login";
		 	header("Location:". STUDENTPATH."/login.php");
	 }
}
?>

