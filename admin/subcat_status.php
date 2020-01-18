<?php 
@ob_start();
@session_start();
include('config.php');
$id=$_REQUEST['id'];
$status=$_REQUEST['status'];
 
 if($status == 'active'){
 	$sql=mysqli_query($con,"UPDATE book_subcategory SET status='Inactive' WHERE id='$id' ");
 	header('location:subcategory.php');
 }
 else{
 	$sql=mysqli_query($con,"UPDATE book_subcategory SET status='active' WHERE id='$id' ");
 	header('location:subcategory.php');
 }



?>