<?PHP

// Example 10-9
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

//drop
$query = "delete from cats where name='Growler' ";

$result = $conn->query($query);
if(!$result) die("Database access failed: " . $conn->error);

?>