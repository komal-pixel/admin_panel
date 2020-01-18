<?php 
include("../config.php");
if(isset($_GET['id'])){
$id=$_GET['id'];


// $query="DELETE FROM `admin` WHERE id=$id";

mysqli_query ($con,"DELETE FROM `admin` WHERE `id` = $id") ;
header("location: index.php");
}
?>