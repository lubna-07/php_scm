<?php
	//Establishing Connection with the server.
	include "../user/connection.php";
	
	//Collecting usn by GET method.
	$id=$_GET['id'];
	
	//Approving the user by setting status as 'yes'.
	$res=mysqli_query($link,"delete from company_name where id=$id");
?>
 <script> alert( 'Company deleted' ); </script>
	<script>
	window.location="add_new_company.php";
	</script>