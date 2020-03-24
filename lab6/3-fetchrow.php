<?php

//Example 10-2
require_once  'login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

//example 10-3
$query = "Select * from classics"; //this is the query 
$result = $conn->query($query); //this will run the query
if(!$result) die($conn->error); //if result is false, pull up the error

//example 10-4
$rows = $result->num_rows; //this is a property, not a function

for($j=0; $j<$rows; $j++)
{
	$result->data_seek($j); 
	//example 10-5 use fetch_array and not fetch_assoc below
	$row = $result->fetch_array(MYSQLI_ASSOC);
	echo 'Author: '.$row['author']; echo '<br>';
	echo 'Title: '.$row['title'];echo '<br>';
	echo 'Category: '.$row['category'];echo '<br>';
	echo 'year: '.$row['year'];echo '<br>';
	echo 'isbn: '.$row['isbn'];echo '<br>';
	echo '<br>';
}

$result->close();
$conn->close();

?>
