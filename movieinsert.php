<?php

include("dbcon.php"); 
$id=$_POST['id'];
$name=$_POST['name'];
$certificate=$_POST['certificate'];
$language=$_POST['language'];
$type=$_POST['type'];
$duration=$_POST['duration'];
$director=$_POST['director'];
$Casting=$_POST['Casting'];
$description=$_POST['description'];
$date=$_POST['date'];
$trailor=$_POST['trailor'];


$filename=$_FILES['upload']['name'];


$tempname=$_FILES['upload']['tmp_name'];
$folder="Img/".$filename;

move_uploaded_file($tempname,$folder);





	
	
$sql="INSERT INTO movies (id, name,certificate,language,type,duration,Casting,director,description,date,trailor,img) values('".$id."','".$name."','".$certificate."','".$language."','".$type."','".$duration."','".$Casting."','".$director."','".$description."','".$date."','".$trailor."','".$folder."')";
if(mysqli_query($conn,$sql))
	{?><script>
			window.alert('Data updated sucessfully');	</script>
		<?php }
		else{
			echo "error";
			echo mysqli_error($conn);
		}
	?>












?>