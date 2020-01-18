<?php 
include("../config.php");

    $id=$_REQUEST['book_id'];
    $query="DELETE FROM book_category WHERE book_id=$id";
    $sql=mysqli_query($con,$query)or die(mysqli_error($con));
    header('location:category.php');
    // $sql=mysqli_query($con,"DELETE FROM book_category WHERE book_id=$id") or die(mysqli_error($con));

// if($sql){
// echo'<script>alert("Data Deleted Successfully");
// window.location="category.php";</script>';

//}

?>