<?php
session_start(); 
include '../../config/config.php';


if(isset($_FILES["video"]["name"]))
{
	 $name=$_FILES["video"]["name"];
	  $type=$_FILES["video"]["type"];
	   $temp=$_FILES["video"]["tmp_name"];
	$sid=$_POST['sid'];
	     $upload= move_uploaded_file($temp,BASEPATH.$name);
		
	if($upload){
	 $query = $db_connection->query("insert into video(name,sid,status,datatime) values('$name',$sid,'1',now())");
		
	 if($query){
		$_SESSION['success']="Video Added Successfully";
	header("Location:". STUDENTPATH."/video.php");
	 }
	 else{
		 $_SESSION['error']="Invalid Video";
		 	header("Location:". STUDENTPATH."/video.php");
	 }
	}
}
?>

