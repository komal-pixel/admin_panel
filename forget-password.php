<?php 
Include('config.php');
if(isset($_POST['submit']))
{
	$mobile=$_POST['mobile'];
	$password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

$query=mysqli_queery($con,"UPDATE password from users WHERE id=$id");
mysqli_query($query);
header('location:forget-password.php');
}
?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
<style>

	body{background: #eee url(http://subtlepatterns.com/patterns/sativa.png);}
html,body{
    position: relative;
    height: 100%;
}

.login-container{
    position: relative;
    width: 300px;
    margin: 80px auto;
    padding: 20px 40px 40px;
    text-align: center;
    background: #fff;
    border: 1px solid #ccc;
}

#output{
    position: absolute;
    width: 300px;
    top: -75px;
    left: 0;
    color: #fff;
}

#output.alert-success{
    background: rgb(25, 204, 25);
}

#output.alert-danger{
    background: rgb(228, 105, 105);
}


.login-container::before,.login-container::after{
    content: "";
    position: absolute;
    width: 100%;height: 100%;
    top: 3.5px;left: 0;
    background: #fff;
    z-index: -1;
    -webkit-transform: rotateZ(4deg);
    -moz-transform: rotateZ(4deg);
    -ms-transform: rotateZ(4deg);
    border: 1px solid #ccc;

}

.login-container::after{
    top: 5px;
    z-index: -2;
    -webkit-transform: rotateZ(-2deg);
     -moz-transform: rotateZ(-2deg);
      -ms-transform: rotateZ(-2deg);

}

.avatar{
    width: 100px;height: 100px;
    margin: 10px auto 30px;
    border-radius: 100%;
    border: 2px solid #aaa;
    background-size: cover;
}

.form-box input{
    width: 100%;
    padding: 10px;
    height:40px;
    border: 1px solid #ccc;;
    background: #fafafa;
    transition:0.2s ease-in-out;

}

.form-box input:focus{
    outline: 0;
    background: #eee;
}

.form-box input[type="text"]{
    border-radius: 5px 5px 0 0;
    text-transform: lowercase;
}

.form-box input[type="password"]{
    border-radius: 0 0 5px 5px;
    border-top: 0;
}

.form-box button.login{
    margin-top:15px;
    padding: 10px 20px;
}

.password{
    position: relative;
}

.password input[type="password"]{
    padding-right: 30px;
}

</style>
    <div class="container">
        <div class="login-container">
            <div id="output"></div>
            <div class="avatar">
            	<img src="images/user/form-user.png">
            </div>
            <div class="form-box">
                <form action="" method="post">
                	<span>Reset Password</span><br><br>
                    <input name="mobile" type="text" placeholder="mobile">
                    <div class="password">
                        <input type="password" id="passwordfield" placeholder="password"> 
                    </div>
                    <div class="password">
                        <input type="password" name="cpassword" id="passwordfield" placeholder="Confirm password">          
                    </div>
                    <button class="btn btn-info btn-block login" type="submit">Reset password</button>
                </form>
            </div>
       </div>       
    </div>