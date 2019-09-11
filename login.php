<?php
   include("dbcon.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
      
      $sql = "SELECT * FROM register WHERE name = '".$myusername."' and pwd = '".$mypassword."'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result);
 
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        // session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "!!!!Your Login Name or Password is invalid!!!!";
      }
   }
?>
<!doctype html>
<html>
<head>  <title>login</title>
<style>
*{margin:0px;
padding:0px;}
body{ 

background-color:#f2bff2;
}

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

.formbox { position:absolute; 
width:40%;
top:55%;
left:25%;
height:400px;

box-shadow:0 15px 40px rgba(0,0,0.5);
	background:#fff;
	
}



.right { position:absolute; 
width:100%;
top:10%;
left:13%;
height:400px;


box-sizing:border-box;

	
}
.right p{
	margin:0px;
	padding:0px;
	font-weight:bold;
	color:purple;
}
.right input{
	margin-bottom:20px;
}
.right input[type="text"],.formbox input[type="password"]{
border:none;
border-bottom:2px solid purple;
	outline:none;
	height:40px;
	width:300px;
}

.right input[type="submit"],a{
	border:none;
	outline:none;
	height:40px;
	width:80px;
	text-decoration:none;
	color:#fff;
	padding:10px;
	background:purple;
	cursor:pointer;
}



</style></head>
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
<div class="formbox">


<div class="right"><form action="" method="post">

		<p>User Id</p><br>
			<input type="text" name="username" value=""/><br><br>
				<p>Password</p><br>
				<input type="password" name="password" value""/ required><br><br>
				<input type ="submit" value="Login">
				<a  href="register.html" >Signup</a><br>
				

				
				
				
				</form>

               <span style="color:red;font-size:25px;"><?php if(isset($error)){echo $error;} ?></span></div></div>
					
           
				
         
			
      

   </body>
</html>
