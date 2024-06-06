<?php 
session_start();
include '../config/config.php';
?>
<html>
<body>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<div style="text-align:center;">
<h1>Welcome Admin</h1>


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
<form action="<?php echo ADMINPATH;?>/action/student.php" method="post">

<h3>Add student details</h3>
  <label>Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label>Course Name:</label><br>
  <input type="text" id="c_name" name="c_name"><br>
   <label>Phone Number:<br>
 <input type="text" id="phone" name="phone"><br>
     
  <br>
  <input type="submit" style="cursor:pointer;" value="Submit">
</form>

<table>
  <tr>
    <th>ID</th>
    <th>Student Name</th>
    <th>Course Name</th>
	<th> Phone Number </th>
	<th>Status</th>
  </tr>
 
  <?php 
 
  $query = $db_connection->query("select * from student order by id desc");
   $i=1;
  while ($obj = $query -> fetch_object()) { 
  $status='Inactive' ;
  if($obj->status == '1'){
	$status='Active' ;
  }
 
  ?>
  
   <tr>
    <td><?php echo $i;?></td>
    <td><?php echo $obj->name;?></td>
	    <td><?php echo $obj->cname;?></td>
    <td><?php echo $obj->phone;?></td>
	    <td><form method="post" action="<?php echo ADMINPATH;?>/action/status.php"><input type="hidden" name="id" value="<?php echo $obj->id;?>"/><input type="hidden" name="status" value="<?php echo $obj->status;?>"/><input type="submit" value="<?php echo $status; ?>"/></form> </td>
  </tr>
  <?php 
  $i++;
  } ?>
</table>
</div>
  
</body>
</html>	
