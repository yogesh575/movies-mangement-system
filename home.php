
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet"href="https:maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https:ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https:cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https:maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



<style>

   
       body {
    margin:0px;
    padding:0px;
    font-family: sans-serif;
		background-image:url('image/back.jpg');
		}   
		
		
	.carousel-inner .carousel-item img{
	height:100%;
	width:100%;
}
	.title{
		background-color:#fceabb;;
	}
.title h1 {
background-color:#fceabb;;
letter-spacing:5px;
font-size:5em;
font-family:sans-serif;
color:purple;

} 

.title h3 {
padding:10px;
font-size:2em;
font-family:sans-serif;
color:purple;
background-color:white;
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




     
.mainarea{width:80%;
background-color:#f2bff2;
height:auto;
margin:auto;
}



.wrapper h2{
	font-size:1.6em;

margin-top:10%;
	background-color:purple;
	color:white;
	padding:10px 0px 10px 10px;
	
	
}
.gallery-section{
	display:flex;

	padding-left:20px;
	
}
.gallery-section h1{
	display:block;

}
.thumbnail{
	padding:0.6px;
	display:inline-block;
	width:230px;
margin-left:20px;



	}
.des{margin-top:-20px;
	padding:0.6px;
	text-align:center;
	background-color:white;
	border-bottom:2px solid black;
	border-left:2px solid black;
	border-right:2px solid black;
	border-radius:0px 0px 10px 10px ;
	}
	.des p{

	text-align:center;
	font-size:1em;
	}
	.gallery .des img{
height:30px;
margin-top:5px;
width:30px
	}
.gallery{
	width:230px;
          height:auto;
 
	
	}
.gallery img{
	width:230px;
	height:auto;
	
	  border-radius:10px 10px 0px 0px;
	}
.btn-primary{margin-top:-30px;
background-color:purple;}

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
			<li><a href="#">Showmovies</a></li>
			<li><a href="#">Logout</a></li>
			
		</ul>
		</nav>
		
		<div class="container-fluid">
		<div id="slide" class="carousel slide" data-ride="carousel">

 
  <ul class="carousel-indicators">
    <li data-target="#slide" data-slide-to="0" class="active"></li>
    <li data-target="#slide" data-slide-to="1"></li>
    <li data-target="#slide" data-slide-to="2"></li>
  </ul>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/banner.jpg" >
   
    </div>
    <div class="carousel-item">
      <img src="img/banner2.jpg">
    
    </div>
    <div class="carousel-item">
      <img src="img/banner3.jpg" >
 
    </div>
  </div>
	  
  
  </div>
  </div>
</header>


<main>



		

		<div class="mainarea">
			<div class="wrapper">
			<h2>BOLLYWOOD MOVIES</h2> 
				<div class="gallery-section"> ';
				<?php	include("dbcon.php"); 
							
						$sql="SELECT id ,name,certificate,type,img FROM movies limit 4";
						if($result=mysqli_query($conn,$sql))
								{while($row = mysqli_fetch_assoc($result)){?>
											<form action="moviedetail.php" method="post">';
				<div class="thumbnail">
						<div class="gallery"> <img src="admin/<?php echo $row['img'];?>" width="100em">
						
								 <div class="des"><br><h4><?php echo $row['name'];?></h4> 
								<p><?php echo $row['certificate']. " || ".$row['type']; ?></p>
									<input type="hidden" value="<?php echo $row['id'];?>" name="id"><br>
										<input  class="btn btn-primary butn" type="submit" name="submit" value="Book Ticket" >
							</div>
							</div>
							</div>
							</form>'<?php	}}
									else {echo mysqli_error($conn);}?>	
	
				</div>
					
				
			
			<h2>UPCOMING MOVIES</h2> 
			<div class="gallery-section"> 
				
				<div class="thumbnail">      
						<div class="gallery"> <img src="image/U1.jpg">
							<div class="des"><img src="image/heart.png" >80%<p>Dreamgirl  U | Hindi</p> </div>
						</div>
					</div>
					
					<div class="thumbnail">      
						<div class="gallery"> <img src="image/U2.jpg">
							<div class="des"><img src="img/heart.png" >60%<p>Section 375  U | Hindi</p> </div>
						</div>
					</div>
					
					<div class="thumbnail">      
						<div class="gallery"> <img src="image/U3.jpg">
							<div class="des"><img src="img/heart.png" >50%<p>Zoya factor  U | Hindi</p></div>

						</div>
					</div>
					<div class="thumbnail">      
						<div class="gallery"> <img src="image/U4.jpg">
							<div class="des"><img src="img/heart.png" >80%<p>war U | Hindi</p> </div>
						</div>
					</div>
				</div>
				<h2>HOLLYWOOD MOVIES</h2>
				<div class="gallery-section"> 
				
				<div class="thumbnail">      
						<div class="gallery"> <img src="image/H1.jpg">
							<div class="des"><img src="img/heart.png" >80%<p>robs and shaws  U | Hindi</p> </div>
						</div>
					</div>
					
					<div class="thumbnail">      
						<div class="gallery"> <img src="image/H2.jpg">
							<div class="des"><img src="img/heart.png" >80%<p>Stuber  U | Hindi</p> </div>
						</div>
					</div>
					
					<div class="thumbnail">      
						<div class="gallery"> <img src="image/H3.jpg">
							<div class="des"><img src="img/heart.png" >80%<p>Rambo  U | Hindi</p></div>

						</div>
					</div>
					<div class="thumbnail">      
						<div class="gallery"> <img src="image/H4.jpg">
							<div class="des"><img src="img/heart.png" >80%<p>John Wick 3 U | Hindi</p> </div>
						</div>
					</div>
			</div>	
			</div>
</main>
</body>
</html>
    