<?php




include("dbcon.php"); 
	
	
$sql = "SELECT * FROM movies where id='".$_POST['id']."'";
		
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
if($_POST['submit']){
	$id=$_POST['id'];
$name=$_POST['name'];
$certificate=$_POST['certificate'];
$language=$_POST['language'];
$type=$_POST['type'];
$duration=$_POST['duration'];
$director=$_POST['director'];
$Casting=$_POST['Casting'];
$description=$_POST['description'];

$filename=$_FILES['upload']['name'];


$tempname=$_FILES['upload']['tmp_name'];
$folder="Img/".$filename;
$sql="update movies set id='".$id."', name='".$name."',certificate='".$certificate."',language='".$language."',type='".$type."',duration='".$duration."',Casting='".$Casting."',director='".$director."',description='".$description."',img='".$folder."' ";

if(mysqli_query($conn,$sql))
	{?><script>
			window.alert('Data updated sucessfully');	</script>
		<?php }
		else{
			echo "error";
			echo mysqli_error($conn);
		}

}
?>

<!doctype html>
<html><style>
  body {
    margin:0px;
    padding:0px;
    font-family: sans-serif;
	background-color:#eee;
		}   

.title h1 {

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



table{
	
width:100%;
padding-left:20px;
padding-top:40px;
padding-bottom:20px;


}
td{
		font-size:18px;

	
	box-sizing:box-border;
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
	height:820px;
	position:relative;
	
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
	height:600px;
}
.movie_details{
	position:absolute;
	left:40%;
	height:400px;
	padding:20px;
}
input[type='text'],input[type='number'],input[type='email']{
outline:none;
border: 2px solid purple;
height:30px;
padding:2px;
width:300px;
font-size:15px;
margin:10px;
cursor:pointer;		

}
textarea {outline:none;
border: 2px solid purple;
height:100px;
width:500px;
border-radius:5px;

margin:10px;		
}

</style><body>

	<div class="container">
		<div class="poster"><form action="updatemovies	.php" method="post">


<img src="<?php if(isset($row['img'])){echo $row['img'];}?>"><input type="file" name="upload"></div>
<div class="movie_details">
<h2>Update Movie</h2><table>
<tr><td>Name</td><td><input type="text" name="name" value="<?php if(isset($row['name'])){echo $row['name'];}?>"></td>
<tr><td>Certificate</td><td><input type="text" name="certificate" value="<?php if(isset($row['certificate'])){echo $row['certificate'];}?>" ></td></tr>
<tr><td>Type</td><td><input type="text" name="type" value="<?php if(isset($row['type'])){echo $row['type'];}?>" ></td></tr>
<tr><td>Language</td><td><input type="text" name="language" value="<?php if(isset($row['language'])){echo $row['language'];}?>" ></td></tr>
<tr><td>Duration</td><td><input type="text" name="duration" value="<?php if(isset($row['duration'])){echo $row['duration'];}?>" ></td></tr>
<tr><td>Director</td><td><input type="text" name="director" value="<?php if(isset($row['director'])){echo $row['director'];}?>" ></td></tr>
<tr><td>Casting</td><td><input type="text" name="Casting" value="<?php if(isset($row['Casting'])){echo $row['Casting'];}?>" ></td></tr>
<tr><td>Description</td><td><textarea cols="20" rows="4" name="description"> <?php if(isset($row['description'])){echo $row['description'];}?></textarea> </td></tr>

<input type="hidden" name="id" value="<?php if(isset($row['id'])){echo $row['id'];}?>" ><br>




</table>
<input type="submit" name="submit">
</form>
 </div></div>              
</body>
</html>

