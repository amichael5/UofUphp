<?php

require_once 'login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

$query = "SELECT * from cats";
	
$result = $conn->query($query);
if(!$result) die($conn->error);
	
$rows = $result->num_rows;

for($j=0; $j<$rows; ++$j){
	$result->data_seek($j);
	$row = $result->fetch_array(MYSQLI_NUM);
	
echo <<<_END
	<pre>
	family: <a href='update.php?id=$row[0]'>$row[1]</a>
	name: $row[2]
	age: $row[3]
		
	</pre>
	
_END;

}

$conn->close();

?>