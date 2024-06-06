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
<h1>Welcome Staff</h1>

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
 <table>
  <tr>
    <th>ID</th>
    <th>Student Name</th>
    <th>Video</th>
	<th> Comment <th>
  </tr>
 
  <?php 
 
  $staff_id = $_SESSION['staff_id'];
  
  $query = $db_connection->query("select *,n.id as vid,a.name as sname,n.name as vname from student a inner join video n ON a.id = n.sid inner join staff_login st on st.id=n.staff_id where a.status='1' and n.staff_id='$staff_id'");
  if($query->num_rows > 0){
  while ($obj = $query -> fetch_object()) { ?>
  
   <tr>
    <td><?php echo $obj->vid;?></td>
    <td><?php echo $obj->sname;?></td>
	 <td><img src="<?php echo SITEPATH.'/upload/'.$obj->vname;?>" style="width:20px;hight:20px;"/></td>
	<th> <form method="post" action="<?php echo STAFFPATH;?>/action/comment.php"><input type="text" name="comment"/><input type="hidden" name="vid" value="<?php echo $obj->vid;?>"/><input type="submit" value="Submit"/></form> 
	<br>
	<?php 
		 $cquery = $db_connection->query("select * from comment where vid='$obj->vid'");
		 if( $cquery->num_rows >0){
			 ?><h4>Comments</h4>
		<?php  while ($cobj = $cquery -> fetch_object()) { ?>
  
	
	<p style="font-weight:normal;"><?php echo $cobj->comment;?></p></n>
		 <?php }}?>
	<th>
  </tr>
  <?php } } ?>
</table>  
</div>
</body>
</html>	
