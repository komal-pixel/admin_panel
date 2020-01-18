<?php 
include('dbcon.php');
$id=$_REQUEST['id'];
$sql="DELETE FROM oopinsert WHERE id='$id'";

if($conn->query($sql)==TRUE){
	echo "<script>alert('Data deleted succesfully..!')
	window.location='index.php'</script>";
}

?>