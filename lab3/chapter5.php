echo fix_names("WILLIAM", "henry", "gaTES");

function fix_names($n1, $n2, $n3){
	$n1 = ucfirst(strtolower($n1));
	$n2 = ucfirst(strtolower($n2));
	$n3 = ucfirst(strtolower($n3));
	return "$n1 $n2 $n3";
}
echo "<br>";

$names = fix_names2("WILLIAM", "henry", "gaTES");
echo "$names[0] $names[1] $names[2]";

function fix_names2($n1, $n2, $n3){
	$n1 = ucfirst(strtolower($n1));
	$n2 = ucfirst(strtolower($n2));
	$n3 = ucfirst(strtolower($n3));
	return array($n1, $n2, $n3);
}
echo "<br>";

$a1 = "WILLIAM";
$a2 = "henry";
$a3 = "gatES";

echo "$a1 $a2 $a3";
fix_names3();
echo "<br>";
echo "$a1 $a2 $a3";

function fix_names3(){
	global $a1, $a2, $a3;
	$a1 = ucfirst(strtolower($a1));
	$a2 = ucfirst(strtolower($a2));
	$a3 = ucfirst(strtolower($a3));	
}
echo "<br>";

class User{  //parent
	public $name, $password;
	
	function save_user(){
		echo "save user code here";
	}
	
}

$object = new User;
$object->name = "Joe";
$object->password = "mypass";
$object->save_user();
echo "<br>";
echo $object->name;
echo "<br>";
echo $object->password;
echo "<br>";

class User2{
	public $name, $password;
	
	function __construct($name, $pass){
		$this->name = $name;
		$this->password = $pass;
	}
}

$object2 = new User2('death star', 'FN287');
echo $object2->name; 
echo "<br>";
echo $object2->password;
echo "<br>";

class Subscriber extends User{ //child 
	public $phone, $email;
	
	function display(){
		echo "Name -- $this->name <br>";
		echo "Password -- $this->password <br>";
		echo "Phone -- $this->phone <br>";
		echo "Email -- $this->email <br>";
	}	
}

$object = new Subscriber();
$object->name = 'Fred';
$object->password = 'pword';
$object->phone = '232 3232 232';
$object->email = 'fred@blogs.com';

$object->display();
