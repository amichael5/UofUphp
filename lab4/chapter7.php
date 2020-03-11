<?php
//Precision Setting

//Exercise page 140
printf("My name is %s. I'm %d years old, which is %x in hexadecimal", 'Simon', 33, 33);

//Example 7-1 page 141 Part 3
// Pad to 15 spaces, 2 decimal places precision
printf("The result is $%15.2f\n", 123.42 / 12);

//Exercise page 143
//sprintf
$out = sprintf("The result is: $%.2f", 123.42 / 12);
echo $out;

//mktime
echo mktime(0,0,0,1,1,2000);
echo '<br>';

//Example 7-3 page 146
//checkdate
$month = 9;    // September (only has 30 days)
$day   = 31;   // 31st
$year  = 2018; // 2018
  if (checkdate($month, $day, $year)) echo "Date is valid";
  else echo "Date is invalid";

//count words in string
echo str_word_count("My name is Inigo Montoya");

//reverse string
echo strrev("My name is Inigo Montoya");

//Search for text within a string and returns character
echo strpos("My name is Inigo Montoya", "Inigo");

//Search for text within a string and returns remaining text
echo strstr("My name is Inigo Montoya", "Inigo");

//Replace text within a string
echo str_replace("Inigo", "Fezzik", "My name is Inigo Montoya");

//Check for file
if (file_exists("testfile.txt")) echo "File exists";

//Example 7-4 page 147
//Create a new file
$fh = fopen("testfile.txt", 'w') or die("Failed to create file");
$text = <<<_END
Line 1
Line 2
Line 3
_END;
  fwrite($fh, $text) or die("Could not write to file");
  fclose($fh);
  echo "File 'testfile.txt' written successfully";

//Example 7-5 page 149
//reading from file
$fh = fopen("testfile.txt", 'r') or
    die("File does not exist or you lack permission to open it");
$line = fgets($fh);
fclose($fh);
echo $line;

//Example 7-7 page 150
//copy file
if (!copy('testfile.txt', 'testfile2.txt')) echo "Could not copy file";
else echo "File successfully copied to 'testfile2.txt'";

//Example 7-9 page 150
//Move a file
if (!rename('testfile2.txt', 'testfile2.new'))
  echo "Could not rename file";
else echo "File successfully renamed to 'testfile2.new'";

//Example 7-10 page 151
//delete file
if(!unlink('testfile2.new')) echo "Could not delete file";
else echo "File 'testfile2.new' successfully deleted";

//Example 7-11 page 151
//Update a file
$fh   = fopen("testfile.txt", 'r+') or die("Failed to open file");
$text = fgets($fh);
fseek($fh, 0, SEEK_END);
fwrite($fh, "$text") or die("Could not write to file");
fclose($fh);
echo "File 'testfile.txt' successfully updated";

//Example 7-14 page 154
//read entire file
echo file_get_contents("http://oreilly.com");
?>