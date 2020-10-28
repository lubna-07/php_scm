<?php
    
	//Connecting to the server.
	$link=mysqli_connect('localhost','root') or die(mysqli_error($link));
	
	//Selecting the desired database.
	mysqli_select_db($link,'php_scm') or die(mysqli_error($link));
?>