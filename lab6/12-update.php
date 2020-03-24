<?php

require_once 'login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

if(isset($_GET['id'])){
	$id = $_GET['id'];
	
	$query = "SELECT * from cats where id=$id ";
	
	$result = $conn->query($query);
	if(!$result) die($conn->error);
	
	$rows = $result->num_rows;

	for($j=0; $j<$rows; ++$j){
		$result->data_seek($j);
		$row = $result->fetch_array(MYSQLI_NUM);
	
echo <<<_END
	<pre>
	<form method='post' action='update.php'>
		family: <input type='text' name='family' value='$row[1]'>
		name: <input type='text' name='name' value='$row[2]'>
		age: <input type='text' name='age' value='$row[3]'>
		<input type='hidden' name='id' value='$row[0]'>
		<input type='hidden' name='update' value='yes'>
		<input type='submit'>
	</form>	
	</pre>
	
_END;
	
	}
}

if(isset($_POST['update'])){
	
	$id = $_POST['id'];
	$family = $_POST['family'];
	$name = $_POST['name'];
	$age = $_POST['age'];
	
	$query = "UPDATE cats set family='$family', name='$name', age='$age' where id=$id ";
	
	$result = $conn->query($query);
	if(!$result) die($conn->error);
	
	header("Location: retrieve.php");
	
}

$conn->close();

?>