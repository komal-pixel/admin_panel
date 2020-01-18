<?php 
$conn= new mysqli('localhost','root','','admin_panel');

if($conn -> connect_error){
	die('Connection failed:'.$conn->connect_error);
}

?>