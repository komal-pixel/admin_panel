<?php 
include('../config.php');
$id=$_POST['book_id'];
$sql=mysqli_query($con,"SELECT * FROM book_subcategory WHERE book_id='$id'");
?>
<!-- <option>Select price</option> -->
<?php 
while($res=mysqli_fetch_array($sql)){ ?>
	<option name="<?php echo $res['book_id'];?>"><?php echo $res['price']; ?></option>
<?php 
}

?>