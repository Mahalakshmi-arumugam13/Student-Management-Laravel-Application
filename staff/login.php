<?php 
session_start();
include '../config/config.php';
?>
<html>
<body>
<head>
</head>
<div style="text-align:center;">
<h1>Staff Login</h1>

<?php
 if(isset($_SESSION['log_error']))
{
	echo  $_SESSION['log_error'];
	session_destroy();
}
?>
<form action="<?php echo STAFFPATH;?>/action/login.php" method="post">
  <label>Username:</label><br>
  <input type="text" name="username"><br>
  <label>Password:</label><br>
  <input type="text"  name="pwd"><br><br>
  <input type="submit" value="Submit" style="cursor:pointer;">
</form> 
</div>
</body>
</html>	
