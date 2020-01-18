
<?php 
session_start();
include('config.php');
if(isset($_POST['submit'])){

  $mobile=$_POST['mobile'];
  $password=$_POST['password'];

  $sql = "SELECT * FROM users WHERE mobile='$mobile' AND password='$password'";
  $query = mysqli_query($con,$sql);
  $row =mysqli_num_rows($query);
  if($row == 1){
    echo"<script>('Login Successful')</script>";
    $_SESSIONT['$mobile']=$mobile;
    $_SESSION['password']=$password;
    header('location:user_dashboard.php');
  }
  else{
   $_SESSION['message']="failed to login <br>reset via forget password";
    // header('location:home.php');
  }

} ?>