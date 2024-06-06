<?php
session_start(); 
include '../../config/config.php';

if(isset($_POST["name"]) && isset($_POST["name"]) && ($_POST["phone"] !="") && ($_POST["phone"] !=""))
{
	 $name=$_POST["name"];
	  $phone=$_POST["phone"];
	   $c_name=$_POST["c_name"];
	      $username=$phone;
		  $password=str_shuffle('WIN').rand(0000,9990);
	 $pwd=md5($password);
	
	 $query = $db_connection->query("insert into student(name,phone,cname,usename,pwd,status,datetime) values('$name','$phone','$c_name',$username,'$pwd','1',now())");
		
	 if($query){
		$_SESSION['success']="Student Added Successfully <br> PWD is ".$password;
	header("Location:". ADMINPATH."/student.php");
	 }
	 else{
		 $_SESSION['error']="Invalid student details";
		 	header("Location:". ADMINPATH."/student.php");
	 }
}
?>

