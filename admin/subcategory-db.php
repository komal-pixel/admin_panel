<?php
@ob_start();
@session_start();
include('config.php');
$book_id=$_REQUEST['bname'];
$edition=$_REQUEST['edition'];
$price=$_REQUEST['price'];

		$sql="INSERT INTO book_subcategory set book_id='$book_id',edition='$edition',price='$price'";
		$query=mysqli_query($con,$sql) or die ( mysqli_error ($con) );

		if($query){

			echo '<script>alert("data save successfully");
			window.location="subcategory.php"</script>';
		}
	

 ?> 