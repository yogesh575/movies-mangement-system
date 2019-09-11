<!doctype html>
<html>
<head>

<style>
*{margin:0;padding:0px;}
body{background-color:#f2bff2;}
.title h1 {

letter-spacing:5px;
font-size:5em;
font-family:sans-serif;
background-color:white;
color:purple;

} 

.title h3 {
padding:10px;
font-size:2em;
font-family:sans-serif;
background-color:white;
color:purple;

} 
nav { width:100%;
background-color:skyblue;
overflow:auto;
}
	

nav ul { list-style:none;
         margin:0px;
     line-height:50px;
padding:0px;
}
  
 nav ul li a{ color:black;
 padding:10px;
 float:left ;
 display:block;
 text-align:center;
 font-size:25px;
 text-decoration:none;
 margin-left:10px;
 
 
		}
  nav ul li:hover{ background:white;} 
nav ul li:hover a{ color:red;}
.wrapper{
	margin-left:30%;
	margin-top:5%;
	
	height:400px;
	
	border:2px solid purple;
	width:400px;
padding-left:40px;
padding-top:40px;
padding-bottom:20px;

	
	
}
table{
	


}
td{ font-family:arial;
		font-size:1.5em;
	padding:10px 50px 10px 0px;
	border-bottom:2px solid purple;
}
th{padding:10px 290px 10px 0px;
border-radius:5px;
font-size:20px;
background-color:purple;
color:white;
font-family:arial;

}

input[type="submit"]{
background-color:purple;
color:white;
font-size:20px;
width:150px;
height:40px;
margin-top:30px;
margin-left:100px;
border-radius:5px;
border:none;
padding:5px 5px 5px 5px;



}
</style>
</head>
<body>

<header>
	<div class="title">
	<h1>MOVIES TICKET<br> MANAGEMENT SYSTEM</h1>
	<h3>Online Movies Ticket Booking</h3>
	</div>
		<nav>
		<ul>
			<li><a href="home.php">Home</a></li>
			<li><a href="showmovies.php">All Movies</a></li>
			<li><a href="#">Booking</a></li>
			<li><a href="#">Update</a></li>
			<li><a href="#">History</a></li>
			<li><a href="#">Logout</a></li>
		</ul>
		</nav>
</header>
<div class="wrapper">
<form action="generate-pdf" method="post">
<table>
<tr><td>Transaction Id </td><td>Tac36556</td></tr>
<tr><td> Name</td><td>Yogesh</td></tr>
<tr><td>Seat No.</td><td>A1,B2,A3,A4</td></tr>
<tr><td>Amount Paid</td><td>Rs.600</td></tr>
<tr><td>Date </td><td>28/8/2019</td></tr>

</table>

<input type="submit" value="Print">
</form>




</div> 		