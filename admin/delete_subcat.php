<?php 
include('config.php');
$id=$_REQUEST['id'];
$sql=mysqli_query($con,"DELETE FROM book_subcategory WHERE id=$id") or die(mysqli_error($con));
if($sql){
	header('location:subcategory.php');
}
?>