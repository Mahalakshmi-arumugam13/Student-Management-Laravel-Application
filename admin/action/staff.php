<?php
session_start(); 
include '../../config/config.php';

if(isset($_POST["vid"]) && isset($_POST["staff_id"]) && ($_POST["vid"] !="") && ($_POST["staff_id"] !=""))
{
	 $id=$_POST["vid"];
	   $staff_id=$_POST["staff_id"];
	 
	
	 $query = $db_connection->query("UPDATE video
SET staff_id = '$staff_id', datatime = now()
WHERE id = '$id';");
		
	 if($query){
		$_SESSION['success']="Staff assigned Successfully";
	header("Location:". ADMINPATH."/staff.php");
	 }
	 else{
		 $_SESSION['error']="Staff not assigned";
		 	header("Location:". ADMINPATH."/staff.php");
	 }
}
?>

