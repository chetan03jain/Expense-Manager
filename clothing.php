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
	left:30%;
	font-family:Tempus Sans ITC;
	font-weight:bold;
	font-size:60px;
	color:#133163;
	}
	.content {
    width: 55%;
    height: 70%;
    border:3px solid;
    border-radius:20px;
	border-color:#133163;
    position: fixed;
    top: 20%;
    left: 18%;
    z-index:10;  
}
.form{
z-index:50;
position:fixed;
top:25%;
left:21%;
color:#133163;
font-size:24px;
font-family:Tempus Sans ITC;
font-weight:bold;
}
.table{
font-size:26px;
	color:#133163;
	font-weight:bold;
}
#button{
z-index:50;
background-color:#4285f4;
color:white;
height:40px;
width:140px;
font-size:20px;
font-weight:bold;
top:80%;
left:40%;
 position: fixed;
     border:3px solid;
    border-radius:10px;
	border-color:#4285f4;
}
#button:hover {background-color: #2e65c1;
border:3px solid;
    border-radius:10px;
	border-color:#2e65c1;
	}
	</style>
	</head>
<body>

<div class="hello"> <i class="fa fa-black-tie"> Clothing</i></div>
<div class="content"></div>
<form class="form" action="demo2.php" method="post">
<table width=100% class="table">
<tr>
<td width=50%>
Name<font color="red">*<br><br></font></td><td><input name="txt2" required><br><br></td></tr>
<tr>
<td width=50%>
Date <font color="red">*<br><br></font></td><td><input type="date" name="dt1" required><br><br></td></tr>
<tr><td width=50%>Amount <font color="red">*</font><br><br></td><td><input type="number" name="txt3" required><br><br></td></tr>
<tr><td width=50%>Description<font color="red">*</font><br><br></td><td><textarea cols="20" name="ta1"></textarea><br><br></td></tr></table>
<input type="submit" value="Submit" id="button">
</form>
</body>
</html>