<?php 
include('dbcon.php');
if(isset($_POST['save'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
$sql="INSERT INTO oopinsert (name,email) VALUES ('$name','$email')";

if ($conn->query($sql) == TRUE) {
	echo "<script>alert('Record inserted Successfully.....!');
	window.location='index.php'</script>";
}
else{
	echo "error :" .$sql. '<br>' .$conn->error;
}
}
?>