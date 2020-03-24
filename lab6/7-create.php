<?php

//Example 10-7 creating a table with php code
require_once  'login.php';

$conn = new mysqli($hn, $un, $pw, $db); //these three lines connect to the db with the login file
if($conn->connect_error) die($conn->connect_error); //all the lines above here will be in all your codes

$query = "
	CREATE TABLE cats (
		id SMALLINT NOT NULL AUTO_INCREMENT,
		family VARCHAR(32) NOT NULL,
		name VARCHAR(32) NOT NULL,
		age TINYINT NOT NULL,
		PRIMARY KEY (id)
)";

$result = $conn->query($query);
if (!$result) die ("Database access failed: ".$conn->error);


$result->close(); 
$conn->close();



?>