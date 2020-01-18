<?php session_start();?>
<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin panel-login</title>
    <!-- Favicon icon -->
    <link rel="icon" type="../image/png" sizes="16x16" href="../assets/images/favicon.png">
    <link href="../css/style.css" rel="stylesheet">
    
</head>

<body class="h-100">

    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href="index.html"> <h4>Sign In</h4></a>
        
                                <form action="page-login-db.php" class="mt-5 mb-5 login-input" method="post">
                                    <div class="form-group">
                                        <input type="text" name="login" class="form-control" placeholder="Enter Username Or Email ">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                    </div>
                                    <button name="submit" class="btn login-form__btn submit w-100">Sign In</button>       
                                </form>
                                <p class="mt-5 login-form__footer">Don't have account? <a href="page-register.php" class="text-primary">Sign Up</a> now</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="../plugins/common/common.min.js"></script>
    <script src="../js/custom.min.js"></script>
    <script src="../js/settings.js"></script>
    <script src="../js/gleek.js"></script>
    <script src="../js/styleSwitcher.js"></script>
</body>
</html>





