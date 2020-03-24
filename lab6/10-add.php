<?php

require_once 'login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

//$query = "INSERT INTO cats (family, name, age) values ('Lion','Leo',4) ";
//$query = "INSERT INTO cats (family, name, age) values ('Cougar','Growler',2) ";
$query = "INSERT INTO cats (family, name, age) values ('Cheetah','Charly',3) ";
	
$result = $conn->query($query);
if(!$result) die($conn->error);
	
$conn->close();

?>