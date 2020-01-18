<html>
<head>
  <title>Dynamic Website</title>

  <!---------------------------Bootstrap css --------------------------->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- like for editable rows -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.tabledit.js"></script>
      <!-----------------font awesome------------------------>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/home.css">
</head>
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.php">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cart.php">Cart</a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
         Gallery
        </a>     
      </li>
      <li> <button type="button" class="btn btn-info" data-toggle="modal" data-target="#login" style="margin-top:7%;">
    Login
  </button></li>
    </ul>
  </div>
</nav>
</html>
  <!-- The Modal -->
  <div class="modal fade" id="login">
    <div class="modal-dialog">
      <div class="modal-content"> 
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Log In</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>       
        <!-- Modal body -->
        <div class="modal-body">
          <form action="user-login-db.php" method="post">
              <div class="form-group">
                <label>Mobile </label>
               <input class="form-control" type="text" name="mobile" placeholder="mobile number" required="true">
              </div>
              <div class="form-group">
                  <label>password </label>
                  <input class="form-control" type="text" name="password" placeholder="password" required="true">
             </div>
             <div>
              <button name="submit" class="btn btn-success">Login</button>
              <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
            </div>
          </form>
        </div> 
        <!-- Modal footer --> 
       
        <div class="modal-footer"><span><a href="forget-password.php">forget Password?</a></span>
         <a href="contact.php" class="text-muted">Create An Account</a></div>      
      </div>
    </div>
  </div>  
<!-- </div> -->