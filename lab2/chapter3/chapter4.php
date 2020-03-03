/////////////////////
//example 4-1 pg. 64
/////////////////////

echo "a: [".(20>9)."]<br>"; //true statement, so will evaluate to 1
//"a: [" is one string, "]<br>" is another string
echo "b: [ ".(5== 6)."] <br>"; //false statement, so will evaluate to null/nothing

/////////////////////
//example 4-3 pg. 65
/////////////////////

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

/////////////////////
//example 4-12 pg. 71
/////////////////////
$month = "March";
if($month == "March") echo "It's springtime";

echo '<br>';

/////////////////////
//example 4-15 pg. 72
/////////////////////
$a = 2; $b = 3; //these are actually two expressions, the ; separates them out

if($a > $b) echo "$a is greater than $b<br>";
if($a < $b) echo "$a is less than $b<br>";
if($a >= $b) echo "$a is greater than or equal to $b<br>";
if($a <= $b) echo "$a is less than or equal to $b<br>";

/////////////////////
//example 4-16 pg. 73
/////////////////////

$a = 1; $b =0;  //1 is true while 0 is false
echo "AND test " . ($a AND $b) . "<br>";
echo "OR test " . ($a OR $b). "<br>"; //either can be true for result to be true or both can be true
echo "XOR test " . ($a XOR $b) . "<br>"; //if both are true, then will be false; only one of them can be true
echo "NOT test " . (!$a) . "<br>"; //! is code for NOT

/////////////////////
//example 4-19 pg. 76
/////////////////////

if($bank_balance < 100)
{
	$money = 1000;
	$bank_balance += $money;
}

/////////////////////
//example 4-20 & 4-21 pg. 77/78
/////////////////////

//need to define bank_balance and savings, not money b/c that is already defined w/in the if statement
$bank_balance = 600;
$savings = 100;

if($bank_balance < 100)
{
	$money = 1000;
	$bank_balance += $money;
}
elseif($bank_balance > 200)
{
	$savings += 100;
	$bank_balance -= 100;
}
else 
{
	$savings += 50;
	$bank_balance -= 50;
}

//can echo these to see results
echo $bank_balance;
echo "<br>";
echo $savings . "<br>";

/////////////////////
//example 4-23 pg. 80
/////////////////////

$page = "Hom"; //test is assigning $page to a string
switch ($page)
{
	case "Home":
		echo "You selected Home";
		break; //"break" breaks out of that particular statement
	case "About":
		echo "You selected About";
		break;
	case "News":
		echo "You selected News";
		break;
	case "Login":
		echo "You selected Login";
		break;
	case "Links":
		echo "You selected Links";
		break;
/*keep in mind this code only caters for the specific strings listed
default helps fix this issue 
*/		
	default:
		echo "Unrecognized";
		break;
}
//switch statement is cleaner and easier to understand than multiple if...elseif statements

echo "<br>";

/////////////////////
//example 4-26 pg. 82
/////////////////////

$fuel = 1;
echo $fuel <= 1 ? "Fill tank now" : "There's enough fuel";

echo "<br>";

/////////////////////
//example 4-28 pg. 84
/////////////////////

$fuel =9;
while($fuel > 1)
{
	//keep driving
	echo "There's enough fuel" . "<br>";
	--$fuel;
}

echo "<br>";

/////////////////////
//example 4-32 pg. 86
/////////////////////
$count = 1;

do {
	echo "$count times 12 is " . $count * 12;
	echo "<br>";	
} while ( ++$count <= 12 );


/////////////////////
//example 4-34 pg. 87
/////////////////////

for ($count = 0; $count <= 12; ++$count)
{
	echo "$count times 12 is " . $count * 12;
	echo "<br>";
	if($count == 7) break;
}
echo "<br>";
//example of continue
for ($count = 0; $count <= 12; ++$count)
{
	if($count == 7) continue; //skips 7 times 12, but continues with the rest of the multiplications
	echo "$count times 12 is " . $count * 12;
	echo "<br>";
	
}

$s=0
while($s<5)
{
	echo "x:".$s;
	$s++;
}




