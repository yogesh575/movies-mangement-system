
<?php
if(isset($_POST['submit'])){
	
$name=$_POST['name'];
$mob=$_POST['mob'];
$pwd=$_POST['pwd'];
$cpwd=$_POST['cpwd'];
$Email=$_POST['Email'];
$hno=$_POST['hno'];
$phn=$_POST['phn'];
$city=$_POST['city'];
$zip=$_POST['zip'];
$state=$_POST['state'];
$add=$_POST['add'];
include('dbcon.php');	
$sql="INSERT INTO register (name,pwd,mob,Email,Hno,Phn,city,zip,state,address) values('".$name."','".$pwd."','".$mob."','".$Email."','".$hno."','".$phn."','".$city."','".$zip."','".$state."','".$add."')";
if(mysqli_query($conn,$sql))
	{?><script>
			window.alert('Data updated sucessfully');	</script>
		<?php }
		else{
			echo "error";
			echo mysqli_error($conn);
}}

	?><!doctype html>
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


.container{ 
position:relative;

width:100%;
height:650px;	
color:black;
font-family:arial;
font-size:20px;		
	}
	.formbox{

margin-top:50px;
margin-left:50px;

width:80%;
height:400px;	
color:black;
	
	}
	.sidebar{float:right;

margin-top:20px;	
margin-right:50px;	
	 width:40vh;
	 height:100vh;
	 border:2px solid black;
}
.sidebar img{ width:100%;
height:50%;
}
table{

padding-left:20px;
padding-top:40px;
padding-bottom:20px;


}
	
	th{
	background-color:purple;
	padding:5px;
	color:white;
	font-size:25px;
	
	
	}
.heading	{
padding-left:10px;
padding:10px;

font-size:2em;
width:180px;
margin-left:40%;
font-family:sans-serif;
background-color:purple;
color:white;
border-radius:10px;

} 
form input[type='text'],input[type='number'],input[type='email']{
outline:none;
border: 2px solid purple;
height:35px;
width:300px;
border-radius:5px;
font-size:25px;
margin:20px;
margin-left:0px;
margin-top:5px;
}
textarea
{
outline:none;
border: 2px solid purple;
height:200px;
width:500px;
border-radius:5px;
font-size:25px;
margin:20px;
margin-left:0px;
margin-top:5px;
}	
	
	
	
	

form input[type='submit'],input[type='reset']{
background-color:purple;
color:white;
width:200px;
height:40px;
border-radius:5px;
border:none;

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
			<li><a href="#">Home</a></li>
			<li><a href="#">All Movies</a></li>
			<li><a href="#">Booking</a></li>
			<li><a href="#">Update</a></li>
			<li><a href="#">History</a></li>
			<li><a href="#">Logout</a></li>
		</ul>
		</nav>
		
</header>
<div class="container"><form action="signup.php" method="post">
<div class="sidebar"><img src="img/M1.jpg">
<img src="img/U1.jpg">
		
		
		</div>
<div class="formbox">
<table>
<tr><h3 class="heading">Sign Up</h3></tr>
<tr>
<td>First Name</td><td>Mobile No.</td></tr>

<tr><td><input type="text" name="name"></td>


<td><input type="number" name="mob"></td></tr>
<tr><td>Password</td>
<td>Confirm Password</td> 
</tr>
<tr>
<td><input type="password" name="pwd" ></td>
<td><input type="password" name="cpwd" ></td>
</tr>
<tr>
<tr><td>Email Id </td></tr>
<tr><td><input type="email" name="Email"  max="100000"/></td></tr>
<tr>
<tr><th>Address Details</th></tr>
<tr><td><br></td></tr>
<td>House No</td>
<td>Phoneno</td>
</tr>
<tr>

<td><input type="text" name="hno" ></td>
<td><input type="number" name="phn" maxlength="11"/></td>	
</tr>
<tr><td>City</td>
<td>Pincode</td></tr>
<tr><td><input type="text" name="city" maxlength="10"/></td>

<td><input type="text" name="zip" ></td></tr>
<tr><td>State</td></tr>
<tr><td><input type="text" name="state"  max="100000"/></td></tr>
<tr><td>Address<br>
<textarea cols="20" rows="4" name="add"></textarea></td></tr>
<tr>
<td><input type="submit" name="submit" >
<input type="reset" name="submit" ></td>
</tr></form></table>
</div>
</div>



               
</body>
</html>

