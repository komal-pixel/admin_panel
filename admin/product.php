<?php 
session_start();
include('Includers/session_check.php');
include('Includers/header.php');
include('../config.php');
if(isset($_POST['add'])){
	$product_id=$_POST['product_id'];
	$name=$_POST['name'];
	$price=$_POST['price'];

	$product_img=$_FILES['image']['name'];
	$tmp_name=$_FILES['image']['tmp_name'];
	$path="product/".$product_img;

	move_uploaded_file($tmp_name, $path);
	mysqli_query($con,"INSERT INTO cart (product_id,product_name,product_img,price) VALUES ('$product_id','$name',
		'$product_img','$price')");
}

?>
<div class="content-body">
	<div class="container mt-5">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-md-6 col-12">
							<form method="post" action="" enctype="multipart/form-data">
								<label>Book-id</label>
								<input class="form-control" type="text" name="product_id" placeholder="Enter Book-id"  required="">
								<label>Book-Name</label>
								<input class="form-control" type="text" name="name"  placeholder="Enter Book-Name" required="">
								<label>Book-Price</label>
								<input class="form-control" type="text" name="price"  placeholder="Enter Book-Price" required="">
								<br>
								<input class="form-control" type="file" name="image" required="">
								<button type="submit" name="add" class="btn btn-default mt-3">Add</button>
							</form>							
						</div>
						
					</div>					
				</div>				
			</div>			
		</div>		
	</div>	
</div>
<?php include('Includers/footer.php')?>