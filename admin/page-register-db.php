<?php 
session_start();
include ('config.php');
if(isset($_POST['submit']))
{
    
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$pwd=$password;
		$sql=mysqli_query($con,"SELECT * FROM admin WHERE name='$name' AND email='$email'");

		if(mysqli_num_rows($sql) != 0){
			$_SESSION['error']="User Already Exsist";
			header('location:page-register.php');
		}else{
		$query=mysqli_query($con, "INSERT INTO admin(name,email,password) VALUES ('$name','$email','$pwd')");

				if($query){
					 $_SESSION['success']="Added succesfully";
					echo '<script> alert("Successfully submited")
					window.location="page-login.php";</script>';
				}
				else{
					echo "failed".mysqli_error($con);
					 $_SESSION['error']="failed";
					header('location:page-register.php');
					}
			}
}
					

?>
	