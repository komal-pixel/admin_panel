<?php
session_start(); 
include('header.php')?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="dist/jquery.tabledit.js"></script>
<body>
	<div id="responsecontainer">
	<div class="">
		<img src="images/big/ice.jpg" style="width: 100%;height: auto">
	</div>

	<div class="container-fluid">
		<div class="heading">
		<h2 class="text-center">About Us</h2>	
	</div>
		<div class="row">
			<div class="col-lg-6 col-sm-12">
				<p> I am a Web developer. This home page is build dynamically. Almost all the contenets are fetched from database, Also this page contenet dynamic gallery, Banner image, Table with using  with different types of join, Editable table Using ajax CRUD Oeration and Add to cart demo.</p>
				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda deleniti dolor ipsum molestias mollitia ut. Aliquam aperiam corporis cumque debitis delectus dignissimos. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				
			</div>
			<div class="col-lg-6 col-sm-12">
				<img class="img-responsive" src="images/christmas-4.jpg" style="height:250px;width:100%;">
				
			</div>
		</div>
	</div>
<section> 
<div class="container-fluid">
	<div class="heading">
		<h2 class="text-center">
			Dynamic Gallery
		</h2>	
	</div>
	<div class="row">
		<?php 

		include('config.php');
		$query=mysqli_query($con,"SELECT * from gallery");
		$rowcount=mysqli_num_rows($query);
		for($i=1;$i<=$rowcount;$i++){
			$row=mysqli_fetch_array($query);
		?> 
		<div class="col-lg-4 col-sm-12">
			<div class="gallery">
			  <a target="_blank" href="gallery/<?php echo $row['image']; ?>">
			    <img class="img-fluid shadow-lg mb-1 bg-white rounded" 
			    src="gallery/<?php echo $row['image']; ?>" alt="Cinque Terre">
			  </a>
			  <div class="desc"><?php echo $row['caption'] ?></div>
			</div>
		</div>
		
<?php } ?>
</div>
</section>

<section id="editable">
	<div class="container">
		<div class="heading text-center">
			<h2>Editable table</h2>
			<p>Click on the given values to edit data and press enter to change it.</p>
		</div>
		<div class="table-responsive">
			<table id="data_table" class="table table-light table-hover">

				<thead>
					<tr>
						<th>id</th>
						<th>Name</th>
						<th>Address</th>
						<th>Salary</th>
						<th>Email</th>
					</tr>
					</thead>
					<tbody>
					<?php
					include('config.php');
					$sql=mysqli_query($con,"SELECT * FROM editable");
					while($row=mysqli_fetch_assoc($sql)){
					?>
					<tr id="<?php echo $row['id']; ?>">
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['name'];?></td>
						<td><?php echo $row['address'];?></td>
						<td><?php echo $row['salary'];?></td>
						<td><?php echo $row['email'];?></td>
					<?php } ?>
					</tr>
				</tbody>
			</table>			
		</div>
	</div>

</section>
<section id="join">

	<div class="container">
		<div class="heading text-center">
			<h2>JOIN table</h2>
			<p>INNER JOIN</p>
		</div>
		<div class="table-responsive">
			<table class="table table-striped table-hover">
			
				<thead>
					<tr>
						<th>Sr. No.</th>
						<th>Student_name</th>
						<th>Address</th>
						<th>Marks</th>
						<th>Grade</th>
					</tr>	
				</thead>
				<tbody>
				<?php 
				$con=mysqli_connect('localhost','root');
				mysqli_select_db($con,'phpprrac');
				$query=mysqli_query($con,"SELECT  student_table.s_name, student_table.address, s_mark.marks,s_mark.grade,student_table.id FROM  student_table INNER JOIN s_mark ON student_table.id=s_mark.id");
					while($row=mysqli_fetch_array($query)){
						?>

					<tr>
						<td><?php echo $row['id'];?></td>
						<td><?php echo $row['s_name'];?></td>
						<td><?php echo $row['address'];?></td>
						<td><?php echo $row['marks'];?></td>
						<td><?php echo $row['grade']; ?></td>
					</tr>
					<?php 
				}
					?>
				</tbody>
				
			</table>
			
		</div>
		
	</div>
	
</section>
<section>
	<div class="container">
		<div class="heading text-center">
			<h2>Category and sub category</h2>
			
		</div>

		<div class="table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>sr. no.</th>
						<th>Category name</th>
						<th>subcategory name</th>
						<th>status</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					include('config.php');
					$count=1;
					$queryres=mysqli_query($con,"SELECT * FROM sub_category order by date desc");
					 if($count1=mysqli_num_rows($queryres)){
					while($row=mysqli_fetch_array($queryres)){
						$cat=$row['category_id'];
						$query1=mysqli_query($con,"SELECT * FROM category WHERE category_id=$cat");
						$res=mysqli_fetch_array($query1);
						?>
					<tr>
						
						<td><?php echo $count++;?></td>
						<td><?php echo $res['category'];?></td>
						<td><?php echo $row['sub_category'];?></td>
						<td><?php echo $res['status']; ?></td>
					</tr>
				<?php } 
				} ?>
				</tbody>
				
			</table>
			
		</div>
		
	</div>
	<div class="container">
		<div class="heading">
			<h2>LEFT JOIN</h2>
		</div>
		<div class="table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>sr.no</th>
						<th>Category</th>
						<th>Sub_category</th>
						<th>Date</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php
					include('config.php'); 
					$count=1;
					$sql="SELECT Category.category, Sub_category.sub_category,Sub_category.date,Sub_category.status FROM Category LEFT JOIN Sub_category ON Category.category_id=Sub_category.category_id";
					$query=mysqli_query($con,$sql);
					while($row=mysqli_fetch_array($query)){
					?>
					<tr>
						<td><?php echo $count++; ?></td>
						<td><?php echo $row['category'];?></td>
						<td><?php echo $row['sub_category']; ?></td>
						<td><?php echo $row['date'];?></td>
						<td><?php echo $row['status']; ?></td>
					</tr>
				<?php } ?>
				</tbody>				
			</table>	
		</div>
		<div class="table-responsive">
			<div class="heading text-center">
				<h2>JOINS</h2>
				
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
					
						<th>student_id</th>
						<th>Name</th>
						<th>age</th>
						<th>course_id</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					include('config.php');
					//$sql="SELECT a_name,b_name FROM table_a FULL JOIN table_b using(id)";
					$sql="SELECT *,course_id
						FROM student
					 	FULL JOIN course USING (stud_id)";
					// $sql="SELECT student.stud_id, student.name,course.course_id, student.age from student FULL OUTER JOIN course ON student.stud_id=course.stud_id";
// 					"SELECT StudentCourse.COURSE_ID, Student.NAME, Student.AGE FROM Student
// INNER JOIN StudentCourse
// ON Student.ROLL_NO = StudentCourse.ROLL_NO";
					$query=mysqli_query($con,$sql);
					
					while($row=mysqli_fetch_array($query))
					 { ?>
    					 <tr>
						<td><?php echo $row['stud_id']; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['age']; ?></td>
						<td><?php echo $row['course_id']; ?></td>
					</tr>	
				<?php } ?>
				</tbody>
			</table>	
		</div>
	</div>
</section> </span>
<div class="text-center mt-5">

<!-------------------------------- php code for add to cart-------------------->
 <?php 
 $status='';
 if(isset($_POST['product_id']) && $_POST['product_id'] !== '' ){
 	$product_id=$_POST['product_id'];
 	$query= mysqli_query($con,"SELECT * FROM cart WHERE product_id='$product_id'");
 	$row=mysqli_fetch_array($query);
 	$product_id=$row['product_id'];
 	$product_name=$row['product_name'];
 	$product_img=$row['product_img'];
 	$price=$row['price'];
 	$cartarray=array($product_id=>array(
 				'product_id'=>$product_id,
 				'product_name'=>$product_name,
 				'quantity' =>1,
 				'price'=>$price,
 				'product_img' =>$product_img)
 );
 	if(empty($_SESSION['shopping_cart'])){
 		$_SESSION['shopping_cart']=$cartarray;
 		$status= '<div style="color:red">Product is added to your cart !</div>';
 	}else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($product_id,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		Product is already added to your cart!</div>";	
	}else{
 			$_SESSION['shopping_cart']=array_merge($_SESSION['shopping_cart'],$cartarray);
 			$status= '<div style="color:red">Product is added to your cart !</div>';

 		}

 	}
 }

 ?>
<!-------------------------------- php code for add to cart  end-------------------->
<section id="shopping_gallery">
	<div class="container-fluid">
			<div class="heading">
				<h2 class="text-center">Add To Cart Demo 
							<?php 
						if(!empty($_SESSION['shopping_cart'])){
							$cart_count=count(array_keys($_SESSION['shopping_cart']))
							?>
						<a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true">
											</i>
						<span><?php echo $cart_count ;?></span> </a>
					<?php 	} ?>

				 </h2>
			</div>	
	
		<div class="row">
				<?php
			include('config.php');
			$sql=mysqli_query($con,"SELECT * FROM cart"); 
			while ($row=mysqli_fetch_array($sql)) {		
			?>
					<div class="col-md-4 col-sm-12">
                	    <div class="col-item">
                      			<div class="photo">
			                         <a target="_blank" href="product/<?php echo $row['product_img'];?>"></a>
							        <img class="img-fluid " src="admin/product/<?php echo $row['product_img'] ;?>" alt="book">
		                         </div>
	                    	<div class="info">
			                        <div class="row">
			                            <div class="price col-md-6">
			                 		    <form method="post" action="">
                      					<input type="hidden" name="product_id" value="<?php echo $row['product_id'];?>">
			                              <h5><?php echo $row['product_name']; ?></h5>
			                              <h5 class="price-text-color">RS.<?php echo $row['price']; ?></h5>
			                            </div>
			                           <div class="rating hidden-sm col-md-6">
			                                  <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
			                                  </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
			                                  </i><i class="fa fa-star"></i>
			                           </div>
			                        </div>
			                        <div class="separator clear-left">
			                            <p class="btn-add">
			                                <i class="fa fa-shopping-cart"></i><button type="submit" class="btn btn-warning">Add to cart</button>
			                            </p>
			                            <p class="btn-details">
			                                <i class="fa fa-list"></i><a href="#" class="hidden-sm">More details</a></p>
			                       </div>
		                          <div class="clearfix"></div>
		                          </form>
	                   		</div>
                  		</div>
					</div>
		<?php }
		 ?>
  		</div>
	</div>
</div>
<section>
	<div class="container">
		<div class="heading text-center">
			<h2>OOP Concept In PHP (CRUD Operation)</h2>	
			<h4>Insert Opertaion</h4>	
		</div>
		<div class="form">
			<?php include ('dbcon.php');?>
			<form class="form group" method="post" action="oopcrud.php">
				<label>Name</label>
				<input class="input" type="text" name="name"> <br>
				<label>Email</label>
				<input class=" email" type="text" name="email"> <br><br>	
				<button class="btn btn-info" name="save">submit</button>	
			</form>
		</div>	
	</div>
	<div class="display">
			<div class="heading text-center">
					<h4>Display Opertaion</h4>	
			</div>
			<table class="table table-dark table-hover">
				<thead>
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Email</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$sql="SELECT  * FROM oopinsert";
					$result=$conn->query($sql);
					if($result ->num_rows >0){ 
						while($row=$result->fetch_assoc()){
						?>	
					<tr>
				<?php echo "<td>" .$row['id']. "</td>";
					  echo"<td>".$row['name']."</td>";
					  echo"<td>".$row['email']."</td>"; 
					  echo "<td><a href='update_table.php?id=".$row['id']."'><button class='btn btn-success'>Update</button> </a></td>";
					  echo "<td><a  href='del_table.php?id=".$row['id']."'><button class='btn btn-danger'>Delete</button></></td>";	
						 } } ?>
					</tr>
				</tbody>
			</table>
	</div>
</section>
<?php include('footer.php')?>