<html>
<head>
<title>Hello!</title>
<style>
.content {
    width: 35%;
    height: 60%;
    border:3px solid;
    border-radius:20px;
	border-color:#133163;
    position: fixed;
    top: 33%;
    left: 32%;
    z-index:10;  
}
.background{
   width:100%;
    height:18%;
    background-image:url('Blue-solid-color-wallpaper-hd-wallpapers.jpg');
    z-index:2;
    position:fixed;
	}
	.hello
	{
	z-index:3;
	position:fixed;
	top:20%;
	left:43%;
	font-family:Tempus Sans ITC;
	font-weight:bold;
	font-size:60px;
	color:#133163;
	}
#img{
z-index:50;	
width: 100px; height: 100px; 
 display: inline-block;
}
#t1{
z-index:50;
width: 200px; height: 100px; 
 display: inline-block

}
#t2{
z-index:50;
width: 100px; height: 100px; 
 display: inline-block
}
.form{
z-index:50;
position:fixed;
top:37%;
left:37%;
color:#133163;
font-size:24px;
font-family:Tempus Sans ITC;
font-weight:bold;
}
#button{
z-index:50;
background-color:#4285f4;
color:white;
height:40px;
width:100px;
font-size:20px;
font-weight:bold;
top:83%;
left:45%;
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
<div class="background">
<div id="img"><img src="hand.png" width=90 height=90></div><div id="t1"><font face="Tempus Sans ITC" color="00FF00" size=32><b>EXPENSE</b></font></div>
<div id="t2">
<font color="gold" size=32 face="Tempus Sans ITC"><b>MANAGER</b></font></div>
<div class="hello">Hello!</div></div>
<div class="content">
<div>
<form class="form" action="demo9.php" method="post">
<input type="radio" name="gender" value="Male" id="rb1">Mr. / <input type="radio" name="gender" value="Male" id="rb1">Ms. <font color="red">*</font><input name="txt1" required><br><br>
Average Monthly Income <font color="red">*<br></font><input type="number"name="txt2" required><br><br>
Average Monthly Expenses <font color="red">*<br></font><input type="number" name="txt3" required><br><br>
Username<font color="red">*</font><input name="user" required><br><br>
<input type="submit" value="Submit" id="button">
</form>
</div>
</div>
</body>
</html>