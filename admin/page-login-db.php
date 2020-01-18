<?php
session_start();
include("../config.php");
if(isset($_POST['submit'])){
	$login = $_POST['login'];
	$password = $_POST['password'];
	if(! Is_mail($login)){
	
		$sql = "select * from  admin where name='$login' and password='$password' ";
		$query = mysqli_query($con,$sql);
		$row = mysqli_num_rows($query);
		if($row == 1){
			if($login==$_POST['login'] && $password==$_POST['password']){
			$_SESSION['login']=$login;
			$_SESSION['start']=time();
			$_SESSION['expire']=$_SESSION['start'] + (120*60);  //expire session after 120 minutes 														   120minutes* 60sec(per minute)=6000 sec	
			$_SESSION['password']=$password;
			header('location:index.php');
			}
		 } else{

		 	 echo "login failed";			
		 	 header('location:page-login.php');
		  }
		}
	else{
			$sql = "select * from  admin where email='$login' and password='$password' ";
			$query = mysqli_query($con,$sql);
			$row = mysqli_num_rows($query);
			if($row == 1){
				if($login==$_POST['login'] && $password==$_POST['password']){
				$_SESSION['login']=$login;
				$_SESSION['start']=time();
				$_SESSION['expire']=$_SESSION['start'] + (120*60);  //expire session after 120 minutes 														120minutes* 60sec(per minute)=6000 sec
				$_SESSION['password']=$password;
				header('location:index.php');
				}
			}
			else{
				 echo "login failed";			
				 header('location:page-login.php'); 
			 	}
		}
}
function Is_mail($email){
	return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) ?false:true;
}
?>
