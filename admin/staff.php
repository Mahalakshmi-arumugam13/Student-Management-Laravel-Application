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
<h1>Comments</h1>

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
 
  $query = $db_connection->query("select *,n.id as vid,a.name as sname,n.name as vname from student a inner join video n ON a.id = n.sid where a.status='1'");
  while ($obj = $query -> fetch_object()) { ?>
  
   <tr>
    <td><?php echo $obj->vid;?></td>
    <td><?php echo $obj->sname;?></td>
	 <td><img src="<?php echo SITEPATH.'/upload/'.$obj->vname;?>" style="width:20px;hight:20px;"/></td>
	<td>
<?php if($obj->staff_id == 0) { ?>

	<form method="post" action="<?php echo ADMINPATH;?>/action/staff.php">
	
	<?php 
		 $squery = $db_connection->query("select * from staff_login where status='1'");
		 if( $squery->num_rows >0){
			 ?><h4>Comments</h4>	
	<select name="staff_id" id="staff_id">
<?php  while ($sobj = $squery -> fetch_object()) { ?>
     <option value="<?php echo $sobj->id;?>"><?php echo $sobj->username;?></option>
 <?php }?>
</select>
		 <?php }?>
	
	<input type="hidden" name="vid" value="<?php echo $obj->vid;?>"/>
	
	<input type="submit" value="Assign"/></form> 
	<br>
	<?php }else{
	$stquery = $db_connection->query("select * from staff_login where id='$obj->staff_id'");
	$stobj = $stquery -> fetch_object(); ?>
	<p style="font-weight:normal;">Assigned to staff - <?php echo $stobj->username;?></p>
	<?php 
		 $cquery = $db_connection->query("select * from comment where vid='$obj->vid'");
		 if( $cquery->num_rows >0){
			 ?><h4>Comments</h4>
		<?php  while ($cobj = $cquery -> fetch_object()) { ?>
  
	
	<p style="font-weight:normal;"><?php echo $cobj->comment;?></p></n>
	<?php }} } ?>


	<td>
  </tr>
  <?php } ?>
</table>  
</div>
</body>
</html>	
