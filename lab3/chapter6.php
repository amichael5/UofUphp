<?php
$paper[] = "copier";
$paper[] = "inkjet";
$paper[] = "laser";
$paper[] = "photo";
print_r($paper);
echo "<br>";

$paper[0] = "copier";
$paper[1] = "inkjet";
$paper[2] = "laser";
$paper[3] = "photo";
print_r($paper);
echo "<br>";

$paper['copier'] = "color and multipurpose";
$paper['inkjet'] = "inkjet printer";
$paper['laser'] = "laser printer";
$paper['photo'] = "photographic paper";
echo $paper['laser'];
echo "<br>";

$paper = array("Copier","Inkjet","Laser","Photo");
echo count($paper);
echo "<br>";

foreach ($paper as $item){
	echo $item.'<br>';
}

echo "<br>";

$temp = explode(' ', "PHP is a server-side scripting language designed primarily for web development but also used as a general-purpose programming language. Originally created by Rasmus Lerdorf in 1994,[5] the PHP reference implementation is now produced by The PHP Development Team.[6] PHP originally stood for Personal Home Page,[5] but it now stands for the recursive acronym PHP: Hypertext Preprocessor.[7]");

print_r($temp);

echo "<br>";
?>