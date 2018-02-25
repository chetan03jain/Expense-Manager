<html>
<?php

define('DB_NAME','project');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_HOST','127.0.0.1');

$link = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);

if(!$link){
	die('COuld not connext:' .mysqli_error());
}
$db_selected=mysqli_select_db($link,DB_NAME);
if(!$db_selected)
{
	die('Can\' t use' . DB_NAME.':'.mysqli_error());
}
$name=$_POST['txt2'];
$type='Food';
$date=$_POST['dt1'];
$amount=$_POST['txt3'];
$description=$_POST['ta1'];

$sql="INSERT INTO expense (Name,Type,Date,Amount,Description) values ('$name','$type','$date','$amount','$description')";
if(mysqli_query($link,$sql))
{
	$show="<script>alert('Submitted successfully')</script>";
	echo $show;
	include("Food.php");
	exit;
}
if(!mysqli_query($link,$sql))
{
	die('Error'.mysqli_error($link));
}
 mysqli_close($link);
 ?>