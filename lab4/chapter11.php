<html>
//Exercise for TextBox

Attending class? Yes<input type="text" name="name" size="20" maxlength="40" value="name">

//Exercise for checkboxes
<input type="checkbox" name="name" value="value" checked="checked">

//Example 11-6 page 273
8am-noon<input type="radio" name="time" value="1">
Noon-4pm<input type="radio" name="time" value="2" checked="checked">
4pm-8pm<input type="radio" name="time" value="3">

//Exercise for hidden field
<input type="hidden" name="submitted" value="yes">

<!--if(isset($_POST['submitted'])){}-->

//Example 11-7 page 275
Vegetables
<form method='post' action='chapter11.php'>
<select name="veg" size="1">
	<option value="Peas">Peas</option>
	<option value="Beans">Beans</option>
	<option value="Carrots">Carrots</option>
	<option value="Cabbage">Cabbage</option>
	<option value="Brocolli">Brocolli</option>
</select>
<input type='submit'>
</form>

<form method='post' action='chapter11.php'>
<select name='veg2[]' size='5' multiple='multiple'>
	<option value="Peas">Peas</option>
	<option value="Beans">Beans</option>
	<option value="Carrots">Carrots</option>
	<option value="Cabbage">Cabbage</option>
	<option value="Brocolli">Brocolli</option>
</select>
<input type='submit'>
</form>

//Exercise for submit buttons
<input type="submit" value="search">

<input type="image" name="submit" src="image.gif">

//Exercise for hyperlinks
<a href="localhost://movie-details.php">Star Wars</a>
<a href="localhost://movie-details.php?id=1234">Star Wars</a>
</>

<?php
if (isset( $_POST['veg'] )){
	$veg=$_POST["veg"];
	echo $veg.'<br>';
}else{
	$veg = "Not entered";
}

if (isset( $_POST['veg2'])){
	$veg2=$_POST["veg2"];
	print_r($veg2);
}else{
	$veg = "Not entered";
}

//Example 11-9 page 278
function sanitizeString($var)
{
    $var = stripslashes($var);
    $var = strip_tags($var);
    $var = htmlentities($var);
    return $var;
}

function sanitizeMySQL($connection, $var)
{
	$var = sanitizeString($var);
	$var = $connection->real_escape_string($var);
	return $var;
}
?>