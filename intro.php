<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

//9 
//case-sensitive
define("WELCOME","hello my name is matan zada");
echo WELCOME;
echo "<hr/>";

//case-Insensitive
define("WELCOME2","hello my name is matan zada",true);
echo WELCOME2;
echo "<hr/>";

//contacts are global
define("CAR","VOLVO");
function myCar(){
    echo CAR;
}
myCar();


//8
//word count
echo str_word_count("Hello world!");
echo "<hr/>";

//reverse words 
echo strrev("Hello world!"); //output !dlrow olleH
echo "<hr/>";

//search for text inside a string 
echo strpos("Hello world!","world"); //output 6
echo "<hr/>";

//replace text inside a string 
echo str_replace("world","John","hello world!"); //outputs hello dolly!
echo "<hr/>";


//7
//Object
// create the class
class Person {
    //create properties - (variables tied to objects)
    public $firstName;
    public $lastName;
    public $age;

    // Assigning Values to the property variables
    public function __construct($firstName, $lastName, $age){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    // create a method (function tied to an objcet)
    public function hello() {
        return "I am " . $this->firstName . " " . $this->lastName . ", my age is: " . $this->age . "";
    }
}
// creating a new person named "John smith" , who is 25 years old 
$person1 = new Person('matan','zada',23);
$person2 = new Person('yonatan','zada',35);
$person3 = new Person('nir','zada',34);

//print out what the hello method returns
echo $person1->hello();
echo "<br>";
echo $person2->hello();
echo "<br>";
echo $person3->hello();



//6
 //string
$matanX = "Hello World";
$matanY = 'Hello World!!';
echo $matanX;
echo "<br>";
echo $matanY;
echo "<hr/>";

// Integer
/* 
-must have at least one digit 
-must not have decimal point 
-can be either postivie or negative
-can be in three formats
*/
$num = 6000;
var_dump($num);
echo "<hr/>";

// float
/* 
a float (floating point number) is a number with a decimal point or a number in exponential form.
*/
$num22 = 20.565;
var_dump($num22);
echo "<hr/>";

// array
$sports = array("soccer","tennis","baseball","football");
var_dump($sports);
echo "<hr/>";

// NULL
// a variable with no value assigned to it - apart from null
$color = "blue";
$color = null;
var_dump($color);

// boolean
$boolT = true;
$boolF = false;
var_dump($boolT);
var_dump($boolF);


//5
//basic output using echo 
echo "<h1>Test Header</h1>";
echo "simple paragraph 1. <br>";
//echo allows multple parameters - print does not.
echo "this ", "string ", "has ", "multiple parameters ";

//output variables echo
$text1 = "sample text 1";
$text2 = "soccer";
$x = 20;
$y = 30;

echo "<h2> . $text1 . </h2>";
echo "i like  . $text2 . <br>";
echo $x + $y;
 
//basic output using print
print "<h1>Test header</h1>";
print "simple paragraph 1. <br>";
print "<hr/>";

//output variables print
$txt1 = "sample text 1";
$txt = "soccer";
$x = 20;
$y = 30;

print "<h2> . $txt1 . </h2>";
print "i like . $txt2 . <br>";
print $x + $y;

    //4
function test4() {
    static $x = 10;
    echo $x;
    $x++;
}
test4();
echo "<br>";
test4();
echo "<br>";
test4();
echo "<br>";
test4();

// 3
$x = 30;
$y = 20;
function test3() {
    // global $x, $y;
    // $y = $x + $y;
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}
test3(); //execute function 
echo $y; //Output value of variable y

//      // 2
//     //global scope example:
//     $x = 5; //global scope
//     function test1(){
//         //will generate Error
//         echo "<p>Value of x is: $x</p>";
//  }
 
//  test1();
//  echo "<p>value of x is: $x</p><hr/>";

 function test2() {
    $y = 5; //local scope
    echo "<p>value of y is: $y </p>";
 }

 test2();
 //will generate error
 echo "<p>value of y is: $y</p>";

   //1
  // echo - כמו return 
  // $Name - משתנה
  $varOne = "football";
  echo "i like $varOne";
  echo "<hr/>";
  $x = 5;
  $y = 6;
  echo $x + $y;

    ?>
</body>
</html>