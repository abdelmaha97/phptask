<?php
	session_start();
	include_once('connection.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM members WHERE id = '".$_GET['id']."'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'deleted successfully';
		}
		
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting';
		}
	}
	else{
		$_SESSION['error'] = 'Select to delete first';
	}

	header('location: index.php');
?>