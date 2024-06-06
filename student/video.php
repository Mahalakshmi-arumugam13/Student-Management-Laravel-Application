<?php 
session_start();
include '../config/config.php';
?>
<html>
<body>
<head>
</head>
<div style="text-align:center;">
<h1>Welcome <?php echo $_SESSION['student_name'];?></h1>
<a href="<?php echo STUDENTPATH;?>/logout.php">Logout</a><br>

<br>
<?php
 if(isset($_SESSION['success']))
{
	echo  $_SESSION['success'];
	unset($_SESSION['success']);
}
 if(isset($_SESSION['error']))
{
	echo  $_SESSION['error'];
	unset($_SESSION['error']);
}
?>
<form  method="post" enctype="multipart/form-data" action="<?php echo STUDENTPATH;?>/action/video.php">

<h3>Upload Video</h3>

     <label>Upload Video:<br>
  <input type="file" id="video" name="video"><br>
  <input type="hidden" name="sid" value="<?php echo $_SESSION['student_id'];?>"

  <br>
  <input type="submit" style="cursor:pointer;" value="Submit">
</form>
</div>
</body>
</html>	
