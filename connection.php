<?php
	//for MySQLi OOP
	$conn = new mysqli('sql306.epizy.com', 'epiz_33634236', 'Mohamed@0909', 'epiz_33634236_mydatabase');
	if($conn->connect_error){
	   die("Connection failed: " . $conn->connect_error);
	}
	
?>