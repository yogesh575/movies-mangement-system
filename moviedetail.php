

    <?php include("dbcon.php"); 
	$sql = "SELECT * FROM movies where id='".$_POST['id']."'";
$result = mysqli_query($conn, $sql);
if (isset($_POST['id'])){?>
	<!DOCTYPE html>
<html>
<head>
<style>
  body {
   
    font-family: sans-serif;
	background-image:url('Img/back.jpg');
		}   

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
nav ul li:hover a{ color:red;}

main{
	
postion:relative;

}

table{
	
width:100%;
padding-left:20px;
padding-top:40px;
padding-bottom:20px;
height:auto;


}
td{
		font-size:18px;
	padding:10px 10px 10px 10px;
	border-bottom:2px solid purple;
	box-sizing:box-border;
}
th{padding:10px 290px 10px 0px;
border-radius:5px;
font-size:20px;
background-color:purple;
color:white;
font-family:arial;

}
tr{}
input[type="submit"]{
background-color:purple;
color:white;
font-size:20px;
width:150px;
height:40px;
border-radius:5px;
border:none;
padding:5px 5px 5px 5px;
margin-left:30%;


}

.container{
	margin-bottom:5%;
	margin-top:5%;
	left:10%;
	width:75%;
	height:720px;
	position:relative;
	background-color:#fff;
border:2px solid purple;
padding-right:30px;

}
.poster{
	width:60%;
	height:500px;
	position:absolute;
	left:30px;
	top:50px
}
.poster img{
	width:60%;
	height:500px;
}
.movie_details{
	position:absolute;
	left:40%;
	height:400px;
	padding:20px;
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

<main>
	<div class="container">
		<div class="poster"><form action="	seat/booking2.php" method="post">';
		<?php while($row = mysqli_fetch_assoc($result)){?>
<img src="admin/<?php echo $row["img"];?>"></div><div class="movie_details"><table><tr><th colspan="2">Details of Movie</th></tr><tr><td>Name</td>';
		<?php 
		echo '<td>'.$row["name"].'</td></tr><tr><td>Certificate</td>';
		echo '<td>'.$row["certificate"].'</td></tr><tr><td>Type</td>';
		echo'<td>'.$row["type"].'</td></tr><tr><td>Language</td>';
		echo '<td>'.$row["language"].'</td></tr><tr><td>Duration</td>';
		echo '<td>'.$row["duration"].'</td></tr><tr><td>Director</td>';
		echo '<td>'.$row["director"].'</td></tr><tr><td>cast</td>';
		echo '<td>'.$row["Casting"].'</td></tr><tr><td>Description</td>';	
		echo '<td>'.$row["description"];?></td></tr></table><input type="submit" value="Book Ticket">
	</form></div><?php }} ?>
	</div>
	
	
	</main>
</body>
</html>


