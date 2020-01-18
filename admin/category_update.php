<?php 
include('../config.php');
$book_id=$_REQUEST['book_id'];
$status=$_REQUEST['status'];
if($status == 'Active'){
	$sql=mysqli_query($con,"UPDATE book_category SET status='Inactive' WHERE book_id='$book_id' ") or die (mysqli_error($con));
	header('location:category.php');
}else{
	$sql=mysqli_query($con,"UPDATE book_category SET status='Active' WHERE book_id='$book_id' ") or die(mysqli_error($con));
	header('location:category.php');
}

?>