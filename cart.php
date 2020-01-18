<?php include('header.php');?>

<?php

session_start();
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
	foreach($_SESSION["shopping_cart"] as $key => $value) {
		if($_POST["code"] == $key){
		unset($_SESSION["shopping_cart"][$key]);
		$status = "<div class='box' align='center' style='color:red;'>
		Product is removed from your cart!</div>";
		}
		if(empty($_SESSION["shopping_cart"]))
		unset($_SESSION["shopping_cart"]);
			}		
		}
}
if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['product_id'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}
  	
}
?>
<section id=shopping_gallery>
<div class="container">
	<div class="heading"> 
	<?php 
	if(!empty($_SESSION['shopping_cart'])){
		$cart_count=count(array_keys($_SESSION['shopping_cart']));
	}

	if(isset($_SESSION['shopping_cart'])){
	$total_price=0;
	?>
	<h3 align="right"><a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
	<span><?php echo $cart_count ;?></span> </a></h3>
	</div>
		<table class="table table-light">
			<thead>
				<tr>
					<th></th>
					<th>ITIEM NAME</th>
					<th>QUANITY</th>
					<th>UNIT PRICE</th>
					<th>ITEMS TOTAL</th>
				</tr>
			</thead>
		<tbody>
			<?php
			foreach ($_SESSION['shopping_cart'] as $product){
			
			 ?>
			<tr>
				<td><img src="admin/product/<?php echo $product['product_img'];?>" width="90" height="70"></td>
				<td><?php echo $product['product_name']; ?> <br>
					 
				</td>
				<td>
					<form method="post" action="">
						<input type="hidden" name="code" value="<?php echo $product['product_id'];?>">
						<input type="hidden" name="action" value="change">
						<select name="quantity" class="quantity" onchange="this.form.submit();">
							<option <?php if($product['quantity']==1) echo "selected";?> value="1">1</option>
							<option <?php if($product['quantity']==2) echo "selected";?> value="2">2</option>
							<option <?php if($product['quantity']==3) echo "selected";?> value="3">3</option>
							<option <?php if($product['quantity']==4) echo "selected";?> value="4">4</option>
							<option <?php if($product['quantity']==5) echo "selected";?> value="5">5</option>
						</select>
						
					</form>
				</td>
			<td><?php  echo "Rs.".$product['price'];?></td>
			<td><?php echo  "Rs.".$product['price']* $product['quantity'];?></td>
			<td>
				<form method="post" action="">
					<input type="hidden" name="code" value="<?php echo $product['product_id'];?>">
					<input type="hidden" name="action" value="remove">
					<button type="submit"><i class="fa fa-trash-o"></i></button>					
				</form>
			</td>
			</tr>
			<?php 
				$total_price +=($product['price']* $product['quantity']);
			 } ?>
			 <tr>
			 	<td colspan="5" align="right"> 
			 		<strong>Total : <?php echo "Rs." .$total_price; ?></strong>
			 	</td>
			 </tr>
		</tbody>
		</table>
		<?php } else{
			echo "<div align='center'>Your cart is empty</div>";}?>			
</div>
</section>
<?php echo $status; ?>

<?php include('footer.php')?>