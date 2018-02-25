
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
$name=$_POST['txt1'];
$income=$_POST['txt2'];
$expense=$_POST['txt3'];
$username=$_POST['user'];

$sql="INSERT INTO user_master (Name,Income,Expense,Username) values ('$name','$income','$expense','$username')";
if(mysqli_query($link,$sql))
{
	$show="<script>alert('Submitted successfully')</script>";
	echo $show;
	include("home.html");
	exit;
}
if(!mysqli_query($link,$sql))
{
	die('Error'.mysqli_error($link));
}
 mysqli_close($link);
 ?>