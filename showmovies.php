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
.thumbnail{
	
	display:flex;
	width:90%;
	margin-left:200px;
	




	}
.des{margin-top:-5px;

	text-align:center;
	background-color:white;

	}


.gallery{
	width:100%;
          height:auto;
border: 2px solid purple;
	
	}

	input[type="submit"]{
background-color:purple;
color:white;
font-size:20px;
width:150px;
height:40px;

border-radius:5px;
border:none;
padding:5px 5px 5px 5px;



}

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
			<li><a href="showmovies.php">All Movies</a></li>
			<li><a href="#">Booking</a></li>
			<li><a href="#">Update</a></li>
			<li><a href="#">History</a></li>
			<li><a href="#">Logout</a></li>
		</ul>
		</nav>
		<h2>All Movies</h2>
</header>

<?php
include("dbcon.php"); 
							
						$sql="SELECT id ,name,certificate,type,img FROM movies ";
						if($result=mysqli_query($conn,$sql))
						{?>
						<div class="thumbnail">
							<?php	while($row = mysqli_fetch_assoc($result)){?>
											<form action="moviedetail.php" method="post">

						<div class="gallery"> <img src="admin/<?php echo $row['img'];?>" width="240em" height="300em";>
								<div class="des"><h3><?php echo $row['name']?>	</h3>
									<input type="hidden" value="<?php echo $row['id'];?>" name="id"><br>
										<input type="submit" name="submit" value="All Details" ></form>
										
							</div>	</div>
						
					<?php	}}else {echo mysqli_error($conn);}
									?>
	</body>
</html>