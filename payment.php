<?php

if(isset($_POST['submit'])){
include('dbcon.php');	

$cardno=$_POST['cardno'];
$cardname=$_POST['cardname'];
$cardtype=$_POST['cardtype'];
$cvv=$_POST['cvv'];
$expdate=$_POST['expdate'];
$year=$_POST['year'];
$amount=$_POST['amount'];
$mob=$_POST['mob'];



	

$sql="INSERT INTO payment (cardno,cardname,cardtype,expdate,year,mobile,cvv,amount) values('".$cardno."','".$cardname."','".$cardtype."','".$expdate."','".$year."','".$mob."','".$cvv."','".$amount."')";
if(mysqli_query($conn,$sql))
	{?><script>
			window.alert('Data updated sucessfully');	</script>
		<?php }
		else{
			echo "error";
			echo mysqli_error($conn);
		}}
	?>





<!DOCTYPE html>
<html>
<head>
<style>
*{margin:0px;
padding:0px;}
body{

background-color:#f2bff2;}
.title h1 {

letter-spacing:5px;
font-size:5em;
font-family:sans-serif;
color:purple;
background-color:white;
} 

.title h3 {
padding:10px;
font-size:2em;
background-color:white;
font-family:sans-serif;
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
  nav ul li:hover{ background-color:white;} 
nav ul li:hover a{ color:red;}
header h2 {
padding:10px;
font-size:2em;
font-family:sans-serif;
color:white;
margin-top:20px;
margin-bottom:30px;
background-color:purple;
padding-left:40%;

} 

	table{margin-left:20%;}
	form label{
	margin-left:10px;
	padding:5px;
	color:black;
	font-size:25px;
	
	
	}
form input[type='text'],input[type='number'],input[type='email'],input[type='month'],input[type='date'],select{
outline:none;
border: 2px solid purple;
height:35px;
width:300px;
border-radius:5px;
font-size:25px;
margin:10px;		

}
textarea {outline:none;
border: 2px solid purple;
height:200px;
width:300px;
border-radius:5px;

margin:10px;		
}

form input[type='submit'],input[type='reset']{
background-color:purple;
color:white;
width:200px;
height:40px;
margin:20px;
border-radius:5px;
border:none;




</style>
<body>
<header>
	<div class="title">
	<h1>MOVIES TICKET<br> MANAGEMENT SYSTEM</h1>
	<h3>Online Movies Ticket Booking</h3>
	</div>
		<nav>
		<ul>
			<li><a href="home.php">Home</a></li>
			<li><a href="#">All Movies</a></li>
			<li><a href="#">Booking</a></li>
			<li><a href="#">Update</a></li>
			<li><a href="#">History</a></li>
			<li><a href="#">Logout</a></li>
		</ul>
		</nav>
		<h2>Make Payment</h2>
</header>
	<div class="container">
		<div class="pay-form">
		
		<form action="download.php" method="post">
		<table>
		<tr><td><label>Credit Card Number</label>
		<td><input type="text" name="cardno"></td></tr>
		<tr><td><label>Name on Credit Card </label>
	<td><input type="text" name="cardname"></td></tr>
		<tr><td><label>Credit Card Type</label>
	<td><input type="text"  name="cardtype"></td></tr>
		<tr><td><label>Expiry Date</label></td>
		<td><select  placeholder="Jan" name="expdate">
	<option>Jan</option>
	<option>Feb</option>
	<option>Mar</option>
	<option>Apr</option>
	<option>May</option>
	<option>Jun</option>
	<option>July</option>
	<option>Aug</option>
	<option>Sept</option>
	<option>Oct</option>
	<option>Nov</option>
	<option>Dec</option></select>
<input type="number" placeholder="year" name="year"></td></tr>
		<tr><td><label>Cvv No.</label></td>
		<td><input type="text" name="cvv"></td></tr>
		<tr><td><label>Mobile no.</label></td>
		<td><input type="number" name="mob"></td></tr>
		<tr><td><label>Amount</label></td>
		<td><input type="number" name="amount"></td></tr>
		<tr><td><input type="submit" name="submit"></td>
		<td><input type="reset"></td></tr>
			</table>
		</form>
	
		</div>
		

		
	</div>


</body>
</html>