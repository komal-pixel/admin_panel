<?php include('header.php')?>

<?php 
include('config.php');
if(isset($_POST['submit']))
{


			$name=$_POST['name'];
			$lname=$_POST['lname'];
			$mobile=$_POST['mobile'];
			$address=$_POST['address'];
			$designation=$_POST['designation'];
			$salary=$_POST['salary'];
			$password=$_POST['password'];
			$confirmpassword=$_POST['confirmpassword'];

			if($password === $confirmpassword)
			{
				$query=mysqli_query($con, "INSERT INTO users
					(name, lname, mobile, address,designation,salary,password) VALUES
					('$name','$lname','$mobile', '$address','$designation','$salary','$password')");

				if($query){
					echo '<script> alert("Successfully submited");</script>';
				
					}
				else{
					echo "failed".mysqli_error($con);
					// echo $_SESSION['status']="failed";
					header('location:contact.php');
					}
			 }
}

?>
<section id="contactinfo">

<div class="container">
			<div  class="text-left">
			<h1>Contact Form</h1>
			</div>
			<form method="post" class="needs-validation" novalidate>
			  <div class="form-row">
			    <div class="col-md-7 mb-3">
			      <label for="validationCustom01">First name</label>
			      <input type="text" class="form-control" name="name" id="validationCustom01" placeholder="First name" required>
			      <div class="valid-feedback">
			        Please enter first name
			      </div>
			    </div>
			    <div class="col-md-7 mb-3">
			      <label for="validationCustom02">Last name</label>
			      <input type="text" class="form-control" name="lname" id="validationCustom02" placeholder="Last name" required>
			      <div class="valid-feedback">
			         Please enter last name
			      </div>
			    </div>
			    <div class="col-md-7 mb-3">
			      <label for="validationCustomUsername">Mobile Number</label>
			      <div class="input-group">
			       <!--  <div class="input-group-prepend">
			          <span class="input-group-text" id="inputGroupPrepend">@</span>
			        </div> -->
			        <input type="text" class="form-control" pattern="[0-9].{9}" name="mobile" id="validationCustomUsername" placeholder="mobile number" aria-describedby="inputGroupPrepend" required>
			        <div class="invalid-feedback">
			          Please enter mobile number.
			        </div>
			      </div>
			    </div>
			  </div>
			  <div class="form-row">
			    <div class="col-md-7 mb-3">
			      <label for="validationCustom03">Address</label>
			      <input type="text" class="form-control" name="address" id="validationCustom03" placeholder="Address" required>
			      <div class="invalid-feedback">
			        Please enter Address.
			      </div>
			    </div>
			    <div class="col-md-7 mb-3">
			      <label for="validationCustom03">Designation</label>
			      <input type="text" class="form-control" name="designation" id="validationCustom03" placeholder="Designation" required>
			      <div class="invalid-feedback">
			        Please enter Designation.
			      </div>
			    </div>
			     <div class="col-md-7 mb-3">
			      <label for="validationCustom03">Salary</label>
			      <input type="text" class="form-control" pattern="[0-9].{0,}" name="salary" id="validationCustom03" placeholder="Salary" required>
			      <div class="invalid-feedback">
			        Please enter salary.
			      </div>
			    </div>
			     <div class="col-md-7 mb-3">
			      <label for="validationCustom05">Password</label>
			      <input type="password" class="form-control" name="password" id="validationCustom05" placeholder="Password" required>
			      <div class="invalid-feedback">
			        Please enter Password.
			      </div>
			    </div>
			    <div class="col-md-7 mb-3">
			      <label for="validationCustom05">Confirm Password</label>
			      <input type="password" class="form-control" name="confirmpassword" id="validationCustom05" placeholder="Confrim password" required>
			      <div class="invalid-feedback">
			        Please Confirm Password.
			      </div>
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="form-check">
			      <input class="form-check-input" type="checkbox" name="agree" id="invalidCheck" required>
			      <label class="form-check-label" for="invalidCheck">
			        Agree to terms and conditions
			      </label>
			      <div class="invalid-feedback">
			        You must agree before submitting.
			      </div>
			    </div>
			  </div>
			  <button class="btn btn-primary" name="submit" type="submit">Submit form</button>
			</form>
</div>
</section>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
<?php include('footer.php')?>