


 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script> 
		$(document).ready(function(){
	$('#data_table').Tabledit({
	 deleteButton: true,	//button will be hide if we want see then replace as a true
	 editButton: true,	//button will be hide if we want see then replace as a true
	 columns: {
	 identifier: [0, 'id'],
	 editable: [[1, 'name'], [2, 'address'], [3, 'salary'], [4, 'email']]
	},
	 hideIdentifier: true, //id column will not display into table.
	 url: 'edit_table.php' //it will redirect into live_edit.php page & update data
	});
	});	

</script>
</script>
</body>
</html>