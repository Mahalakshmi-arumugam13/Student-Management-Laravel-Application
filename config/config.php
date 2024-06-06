<?php 
global $config;
global $site;
 $config['base_url']=$_SERVER['DOCUMENT_ROOT'].'/Interview-task-2024/music_class/upload/';
$config['site_url']='http://localhost/Interview-task-2024/music_class';
$config['admin_url']='http://localhost/Interview-task-2024/music_class/admin';
$config['staff_url']='http://localhost/Interview-task-2024/music_class/staff';
$config['student_url']='http://localhost/Interview-task-2024/music_class/student';
$config['db_name']='music';
$config['db_host']='localhost';
$config['db_username']='root';
$config['db_pwd']='';
define('BASEPATH',$config['base_url']);
define('SITEPATH',$config['site_url']);

define('ADMINPATH',$config['admin_url']);
define('STAFFPATH',$config['staff_url']);
define('STUDENTPATH',$config['student_url']);
$db_connection = new mysqli($config['db_host'],$config['db_username'],$config['db_pwd'],$config['db_name']);
//$db_connection = new mysqli('127.0.0.1','root','','music');	

?>
