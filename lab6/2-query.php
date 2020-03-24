<?php

//Example 10-2
require_once  'login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

//example 10-3
$query = "Select * from classics"; 
$result = $conn->query($query); 
if(!$result) die($conn->error); 

//example 10-4
$rows = $result->num_rows; //this is a property, not a function

for($j=0; $j<$rows; $j++)
{
	$result->data_seek($j); 
	echo 'Author: '.$result->fetch_assoc()['author'].'<br>';
	$result->data_seek($j); 
	echo 'Title: '.$result->fetch_assoc()['title'].'<br>';
	$result->data_seek($j); 
	echo 'Category: '.$result->fetch_assoc()['category'].'<br>';
	$result->data_seek($j); 
	echo 'Year: '.$result->fetch_assoc()['year'].'<br>';
	$result->data_seek($j); 
	echo 'ISBN: '.$result->fetch_assoc()['isbn'].'<br>';
	echo '<br>';
}

$conn->close();

?>
