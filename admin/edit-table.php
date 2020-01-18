<?php 
include('config.php');
$input=filter_input_array(INPUT_POST);
if($input==['action']){
	$update_field='';
	if(isset($input['book_id'])){
		$update_field.="book_id='".$input['book_id']."'";
	}elseif(isset($input['bname'])){
		$update_field.="bname= '"$input['bname']."'";
	}elseif(isset($input['edition'])){
		$update_field.="edition= '"$input['edition']." '";
	}elseif(isset($input['price'])){
		$update_field.="price= ' ".$input['price']." '";
	}
	if($update_field && $input['id']){
		$sql="UPDATE book_subcategory SET $update_field WHERE id='".$input['id'] ."'";
		mysqli_query($con,$sql) or die mysqli_query("database error", mysqli_error($con));
	}
}

?>