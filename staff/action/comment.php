<?php
session_start(); 
include '../../config/config.php';

if(isset($_POST["vid"]) && isset($_POST["vid"]) && ($_POST["comment"] !="") && ($_POST["comment"] !=""))
{
	 $vid=$_POST["vid"];
	  $comment=$_POST["comment"];
	  
	 $query = $db_connection->query("insert into comment(vid,comment,datetime) values('$vid','$comment',now())");
		
	 if($query){
		$_SESSION['success']="Comment Added Successfully";
	header("Location:". STAFFPATH."/dashboard.php");
	 }
	 else{
		 $_SESSION['error']="Invalid Comment details";
		 	header("Location:". STAFFPATH."/dashboard.php");
	 }
}
?>

