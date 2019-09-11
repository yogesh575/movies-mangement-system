<?php




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
		}
	?>












?>