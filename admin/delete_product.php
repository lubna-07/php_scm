<?php
	//Establishing Connection with the server.
	include "../user/connection.php";
	
	//Collecting usn by GET method.
	$id=$_GET['id'];
	
	//Approving the user by setting status as 'yes'.
	$res=mysqli_query($link,"delete from products where id=$id");
?>
 <script> alert( 'Product deleted' ); </script>
	<script>
	window.location="add_new_user.php";
	</script>