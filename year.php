<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.hello
	{
	z-index:3;
	position:fixed;
	top:3%;
	left:20%;
	font-family:Tempus Sans ITC;
	font-weight:bold;
	font-size:60px;
	color:#133163;
	}
#button{
z-index:50;
background-color:#4285f4;
color:white;
height:30px;
width:140px;
font-size:20px;
font-weight:bold;
top:20%;
left:60%;
 position: fixed;
     border:3px solid;
    border-radius:10px;
	border-color:#4285f4;
}	
.form{
z-index:50;
position:fixed;
top:20%;
left:15%;
color:#133163;
font-size:24px;
font-family:Tempus Sans ITC;
font-weight:bold;
}
#button:hover {background-color: #2e65c1;
border:3px solid;
    border-radius:10px;
	border-color:#2e65c1;
	}
</style>
</head>
<body>
<div class="hello"> <i class="fa fa-calendar"> Yearly Report</i></div>
<form class="form" action="y_table.php" method="post">
<table width=100%><tr><td>
<b>Year</b><font color="red">*</font><input type="month" name="txt2" ></td><td>
<b>Category</b><font color="red">*</font>
<select name="list">
 <option disabled selected value> -- select an option -- </option>
<option>Automobile</option>
<option>Bills</option>
<option>Clothing</option>
<option>Household</option>
<option>Food</option>
<option>Entertainment</option>
<option>Travel</option>
<option>Medical</option>
<option>Others</option>
</select>
</td>
<td><input type="submit" value="Generate" id="button" name="submit"></td>
</table>
</form>
</body>
</html>