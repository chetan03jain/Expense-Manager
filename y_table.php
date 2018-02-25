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
$date=$_POST['txt2'];
$category=$_POST['list'];
if (isset($_POST["submit"]))
 {
	 if($date==null&&$category==null)
	 {
	$show="<script>alert('Select One option')</script>";
	echo $show;
	include("year.php");
	exit;
	 }
 if($date!=null&&$category==null)
 {
     $query = "SELECT * FROM expense WHERE YEAR(Date) = '". mysqli_real_escape_string($link,$date)."'" ;
     $result = mysqli_query($link,$query);

echo "<link rel='stylesheet' type='text/css' href='style.css'></head><table border='1' class='table'>
<tr>
<th>Name</th>
<th>Type of Expense</th>
<th>Date</th>	
<th>Amount</th>
<th>Description</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Name'] . "</td>";
echo "<td>" . $row['Type'] . "</td>";
echo "<td>" . $row['Date'] . "</td>";
echo "<td>" . $row['Amount'] . "</td>";
echo "<td>" . $row['Description'] . "</td>";
echo "</tr>";
}
echo "</table>";
 }
 if($date==null&&$category!=null)
 {
	  $query = "SELECT * FROM expense WHERE Type = '". mysqli_real_escape_string($link,$category)."'" ;
     $result = mysqli_query($link,$query);

echo "<link rel='stylesheet' type='text/css' href='style.css'></head><table border='1' class='table'>
<tr>
<th>Name</th>
<th>Type of Expense</th>
<th>Date</th>	
<th>Amount</th>
<th>Description</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Name'] . "</td>";
echo "<td>" . $row['Type'] . "</td>";
echo "<td>" . $row['Date'] . "</td>";
echo "<td>" . $row['Amount'] . "</td>";
echo "<td>" . $row['Description'] . "</td>";
echo "</tr>";
}
echo "</table>";
 }
 if($date!=null&&$category!=null)
 {
	  $query = "SELECT * FROM expense WHERE YEAR(Date) = '". mysqli_real_escape_string($link,$date)."'AND Type= '".mysqli_real_escape_string($link,$category)."'" ;
     $result = mysqli_query($link,$query);

echo "<link rel='stylesheet' type='text/css' href='style.css'></head><table border='1' class='table'>
<tr>
<th>Name</th>
<th>Type of Expense</th>
<th>Date</th>	
<th>Amount</th>
<th>Description</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Name'] . "</td>";
echo "<td>" . $row['Type'] . "</td>";
echo "<td>" . $row['Date'] . "</td>";
echo "<td>" . $row['Amount'] . "</td>";
echo "<td>" . $row['Description'] . "</td>";
echo "</tr>";
}
echo "</table>";
 }
 }
mysqli_close($link);
?>