

// This is a single line comment
/*
	This is a section of multiline comment
*/


/////////////////////
//PHP Literals
/////////////////////
'Chewbacca';
3.4;

$user_name = "Chewbacca";
$gpa = 3.4;

echo $user_name;
echo '<br>';
echo $gpa;
echo '<br>';

echo "My name is ".$user_name." not Inigo";
echo "My name is $user_name not Inigo";
echo 'My name is $user_name not Inigo';
echo '<br>';

$number = 12345 * 67890;
echo substr($number, 3,1);


echo "a: [".(20>9)."]<br>"; //true statement, so will evaluate to 1
//"a: [" is one string, "]<br>" is another string
echo "b: [ ".(5== 6)."] <br>"; //false statement, so will evaluate to null/nothing


$myName = "Brian"; //$myname is a variable, "Brian" is a string
echo "a: " . 73 ."<br>"; // numeric literal
echo "b: " . "Hello" . "<br>"; // string literal
echo "d: " . $myName . "<br>"; // string variable

/////////////////////
//example on Precedence
/////////////////////

echo (1-2+3) == (3-2+1); //true
echo '<br>';
echo (1*2+3) == (3*2+1); //false
echo 1*(2+3);

echo '<br>';

$month = "March";
if($month == "March") echo "It's springtime";
