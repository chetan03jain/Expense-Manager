
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
$user=$_POST['txt2'];
if (isset($_POST["submit"]))
 {
 
     $query = "SELECT * FROM user_master WHERE Username = '". mysqli_real_escape_string($link,$user)."'" ;
     $result = mysqli_query($link,$query);
	 $row = mysqli_fetch_array($result);
$username = $row['Username'];
     if ($username == $user) 
      {
        $show="<script>alert('Submitted successfully')</script>";
		echo $show;
		include("home.html");
		exit;
		} 
       else 
      {
       $show="<script>alert('Unsuccessful.. Try Again')</script>";
		echo $show;
		include("manage.php");
		exit;
      }

 }
 ?>