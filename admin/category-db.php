<?php 

include('config.php');
if(isset($_POST['save'])){
	$bname=$_POST['bname'];
	$author=$_POST['author'];

	$sql=mysqli_query($con,"INSERT INTO book_category (bname,author) VALUES ('$bname','$author')");
	if($sql){
		echo '<script> alert("Data saved successfully");
		window.location="category.php"</script>';
	}
	else
		mysqli_error($con);

}



?>