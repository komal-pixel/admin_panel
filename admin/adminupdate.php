<?php 
 include('includers/session_check.php');

?>

<!DOCTYPE html>
<html class="h-100" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin panel-pixel</title>
    <!-- Favicon icon -->
    <link rel="icon" type="../image/png" sizes="16x16" href="../../assets/images/favicon.png">
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
        
                                <form class="mt-5 mb-5 login-input" method="post">
                                    <?php
                                     include '../config.php';
                                     if(isset($_GET['id'])){
                                        $id=$_GET['id'];

                                            $q = "select * from admin where id=$id";
                                            $query = mysqli_query($con,$q);
                                 }
                                    while($row=mysqli_fetch_array($query)){
                                        ?>
                               
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control"  value="<?php echo $row['name'] ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email"class="form-control"  value="<?php echo $row['email'] ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" value="<?php echo $row['password'] ?>" required>
                                    </div>
                                <?php }?>
                                    <button name="submit" type="submit" class="btn login-form__btn submit w-100" >Update</button>
                                </form>                          
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    if(isset($_POST['submit'])){
        include 'config.php';
         $id = $_GET['id'];
         $name = $_POST['name'];
         $email = $_POST['email'];
         $password = $_POST['password'];
         $query=mysqli_query($con,"UPDATE admin SET name='$name',email='$email',password='$password'WHERE id=$id");
         mysqli_query($con,$query);
         if($query){
          echo '<script> alert("Data updated successfully");
          window.location="index.php";</script>';
         }
    }
    ?> 

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
