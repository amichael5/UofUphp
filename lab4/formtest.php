//Separate HTML and PHP
<html>

	<body>
		<form method='post' action='lecture5.php'>
			<input type='text' name='name'>
			<input type='submit'>
		</form>
	</body>
</html>

<?php
	$name="";
	if(isset($_POST['name'])!=''){
		$name = $_POST['name'];		
	}else{
		$name = "(Not entered)";
	}	
	echo "your name is $name";
?>


<?php
//formtest2.php
if (isset($_POST['name'])) $name=$_POST['name'];
else $name = "Not entered";

echo <<<_END
<html>
	<head>
		<title>Form Test</title>
	</head>
	<body>
		<form method="post" action ="formtest.php">
			What is your name?
			<input type ="text" name="name">
			<input type="submit">
		</form>
	</body>
</html>
_END

?>