<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.dropbtn {
    background-color: #f1f1f1;
    color: black;
    padding: 16px;
    font-size: 24px;
    border: none;
	font-family:Tempus Sans ITC;
font-weight:bold;
width:300px;
}
.dropbtn1 {
    background-color: #f1f1f1;
    color: black;
    padding: 16px;
    font-size: 24px;
    border: none;
	font-family:Tempus Sans ITC;
font-weight:bold;
width:300px;
}
.dropbtn1:hover{ background-color: #133163;
	color:white;}
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 300px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
font-weight:bold;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #133163;
color:white;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #133163;
	color:white;
}

a:link {
    color:black;
}
a:visited {
    color: black;
}
a:hover {
    color: white;
}
</style>
</head>
<body>
<button class="dropbtn1"><a href="m_home.php" target="load_here"><i class="fa fa-home"> Home</i></a></button><br>
<div class="dropdown">
  <button class="dropbtn"><i class="fa fa-plus"> Add Expense</i></button>
  <div class="dropdown-content">            	 
    <a href="automobile.php" target="load_here"><i class="fa fa-car"> Automobile</i></a>
    <a href="bills.php" target="load_here"><i class="fa fa-dollar"> Bills</i></a>
    <a href="clothing.php" target="load_here"><i class="fa fa-black-tie"> Clothing</i></a>
	  <a href="household.php" target="load_here"><i class="fa fa-home"> Household</i></a>
	    <a href="Food.php" target="load_here"><i class="fa fa-cutlery" > Food</i></a>
		  <a href="enter.php" target="load_here"><i class="fa fa-music"> Entertainment</i></a>
		    <a href="travel.php" target="load_here"><i class="fa fa-bus"> Travel</i></a>
			  <a href="medical.php" target="load_here"><i class="fa fa-medkit"> Medical</i></a>
			    <a href="others.php" target="load_here"><i class="fa fa-cc-visa"> Others </i></a>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn"><i class="fa fa-calendar"> View</i></button>
  <div class="dropdown-content">
    <a href="daily.php"target="load_here" ><i>Daily Report</i></a>
    <a href="month.php" target="load_here"><i>Monthly Report</i></a>
	  <a href="year.php" target="load_here"><i>Yearly Report</i></a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn"><i class="fa fa-area-chart"> Graphical View</i></button>
  <div class="dropdown-content">
    <a href="bar.html" target="load_here"> <i class="fa fa-bar-chart"> Bar Graph</i></a>
    <a href="pie.html" target="load_here"><i class="fa fa-pie-chart"> Pie Chart</i></a>
  </div>

</div>
</body>
</html>