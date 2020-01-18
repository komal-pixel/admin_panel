<?php session_start();?>
<!DOCTYPE html>
<html class="h-100" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin panel</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
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
                                    <a class="text-center" href="index.php"> <h4>Sign Up For Registration </h4></a>
                                    <?php 
                                if(isset($_SESSION['error']) && $_SESSION['error'] !=''){
                                    echo '<font style="color:red">'.$_SESSION['error'].'</font>';
                                    unset($_SESSION['error']);
                                }
                                 
                                    ?>
                                <form id="pagereg" action="page-register-db.php" class="mt-5 mb-5 login-input" method="post">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control"  placeholder="Name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email"class="form-control"  placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                                    </div>
                                    <button name="submit" type="submit" class="btn login-form__btn submit w-100" onclick="myfunction()">Sign in</button>
                                </form>
                                <script>
                                    
                                    function myfunction(){
                                        document.getEmelementById('pagereg').submit();
                                    }
                                </script>
                                    <p class="mt-5 login-form__footer">Do You Have account?<a href="page-login.php" class="text-primary">Sign In </a> now</p>
                                    </p>
                                </div>
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





