<?php 
include ('config.php');
$input=filter_input_array(INPUT_POST);
if($input['action']=='edit'){
	$update_field='';
	if(isset($input['name'])){
		$update_field.="name='".$input['name']."'";
	}elseif(isset($input['address'])){
		$update_field.="address='".$input['address']."'";
	}elseif(isset($input['email'])){
		$update_field."email='".$input['email']."'";
	}elseif(isset($input['email'])){
		$update_field.="email".$input['email']."'";
	}
	if($update_field && $input['id']){
		$sql="UPDATE editable SET $update_field WHERE id='".$input['id'] ."'";
		mysqli_query($con,$sql) or die mysqli_query("database error", mysqli_error($con));
	}
}

?>