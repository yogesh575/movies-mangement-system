<?php
  // include('session.php');
  session_start();
?>
<html>
   
   <head>
      <title>Welcome </title>
	  <style>
	  
	  
	  
	  
	  
.title h1 {

letter-spacing:5px;
font-size:5em;
font-family:sans-serif;
color:purple;
background:#eee;
} 
header{
		background-color:#eee;
	}

.title h3 {
padding:10px;
font-size:2em;
font-family:sans-serif;
color:purple;
background:#eee;

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
nav ul li:hover a{ color:red;}</style>
   </head>
   
   <body>
      
	  <header>
	<div class="title">
	<h1>MOVIES TICKET<br> MANAGEMENT SYSTEM</h1>
	<h3>Online Movies Ticket Booking</h3>
		<h2>Hi <?php  echo $_SESSION['login_user'] ?></h2>
	</div>
		<nav>
		<ul>
		
		
			<li><a href="#">Home</a></li>
			<li><a href="showmovies.php">All Movies</a></li>
			<li><a href="#">Booking</a></li>
			<li><a href="#">Update</a></li>
			<li><a href="#">History</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
		</nav>
		
</header>
     
   </body>
   
</html>