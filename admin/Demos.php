<?php
 session_start(); 
 include('includers/session_check.php');
 include('Includers/header.php');
  ?>
   <div class="content-body">
			<div class="container mt-5">
				<div class="row">
					<div class="col-md-6">	
						<div class="card">
							<div class="card-body">
								<h4>Change event And Get Value</h4>
								<select id="value" name="numbers">
									<option>one</option>
									<option>Two</option>
									<option>Three</option>
								</select>
								<div id="display"></div>
								<br>
								<h4>On KeyUp and KeyDown</h4>
								<label>Name:</label>
								<input id="input" type="text" class="formcontrol">
								<br>
							
								<button>Click Me</button>

								<script>
									//get value from change event
									$('select').change(function(){
										document.getElementById('display').innerHTML="Selected Number is: " +document.getElementById('value').value;
									}) 
									//keydown function
									$('#input').on('keydown',function(){
										$('#input').css('background-color','gray');
									});
									//keyup function
									$('#input').on('keyup',function(){
										$('#input').css('background-color','lightblue');

							   </script>
							</div>	
						</div><br>
					</div>
					<div class="col-md-6">
					<link src="../js/increment.js">

						<div class="card">
							<div class="card-body">
								<h4>Increment Drecrement Button for Product</h4>
								<form method="post" action="">
									<div class="numbers-row">
										<label for="name">Stylish Hand Bag</label>
										<input type="text" name="bag" value="3">
									</div>
									<div class="numbers-row">
										<label for="name">sun screen Cream</label>
										<input type="text" name="cream" value="4">
									</div>
									<div class="numbers-row">
										<label for="name">Red Teddy Bears</label>
										<input type="text" name="toy" value="1">	
									</div>
									<div class="buttons">
										<input type="submit" value="submit" id="submit">
									</div>
								</form>
							</div>		
						</div>						
					</div>
				</div>
			</div>
	  </div>
<style>


input[type=text] {
  float: left;
  width: 20px;
  font: bold 20px Helvetica, sans-serif;
  padding: 1px 0 0 0;
  text-align: center;
}

.button {
  margin: 0 0 0 5px;
  text-indent: -9999px;
  cursor: pointer;
  width: 29px;
  height: 29px;
  float: left;
  text-align: center;
  background: url(../images/buttons.png) no-repeat;
}
.dec {
  background-position: 0 -29px;
}

.buttons {
  padding: 20px 0 0 140px;
}

</style>
<?php include('Includers/footer.php');?>
