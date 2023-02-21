<?php
	session_start();
	include_once('connection.php');

     $queryResult=$connect->query("SELECT * members");

$result=array();

   while($fetchData=$queryResult->fetch_assoc()){
	$result[]=$fetchData;
}

echo json_encode($result);

?>
