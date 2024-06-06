<?php
session_start(); 
include '../../config/config.php';

if(isset($_POST["id"]) && isset($_POST["id"]) && ($_POST["status"] !="") && ($_POST["status"] !=""))
{
	 $id=$_POST["id"];
	   $status=$_POST["status"] == '1' ? '0' : '1';
	 
	  
	 $query = $db_connection->query("UPDATE student
SET status = '$status', datetime = now()
WHERE id = '$id';");
		
	 if($query){
		$_SESSION['success']="Status Updated Successfully";
	header("Location:". ADMINPATH."/student.php");
	 }
	 else{
		 $_SESSION['error']="Status not Updated";
		 	header("Location:". ADMINPATH."/student.php");
	 }
}
?>

