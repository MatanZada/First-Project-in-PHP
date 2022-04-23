<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>PHP Arithmetic Operations</h2>
<!-- Used to compare Two values -->

    <?php
/* 
Operator Groups:
- Arithmetic operatirs
- Assignment operators
- Comparison operators
- Increment/Document operators
- Logical operators
- String operators
- Array operators
*/
//10
$numberOneX = 50;
$numberTwoY = 20;

//addition
echo $numberOneX + $numberTwoY;
echo "<hr/>";

//subtraction
echo $numberOneX - $numberTwoY;
echo "<hr/>";

//multiplication 
echo $numberOneX * $numberTwoY;
echo "<hr/>";

// division
echo $numberOneX / $numberTwoY;
echo "<hr/>";

//modulus
echo $numberOneX % $numberTwoY;

    ?>

<h2>PHP Assignment Operations</h2>
<!-- used with numeric values to write values to a variable -->
<?php
//The left operand is assigned the value on the right 
$x = 20;
echo $x;
?>

<h2>Comparison Operations</h2>
<!-- used to compare two values (number to string) -->

<?php
//Equal 
$x = 300;
$y = "300";
var_dump($x == $y); //output is true because x = y 

//Identical 
$x = 300; 
$y = "300";
var_dump($x === $y); //output is false because type are not equal


//Not equal 
$x = 300;
$y = "300";
var_dump($x != $y); //output is false because values are equal 

//not equal 
$x = 300;
$y = "300";
var_dump($x <> $y); //output is false because values are equal 

//not identical 
$x = 300;
$y = "300";
var_dump($x !== $y); // output is false because types are not equal

//greater than 
$x = 300;
$y = "300";
var_dump($x > $y); //output is false because x is not greater than y
?>

<h2>Increment/Document Operations</h2>
<!-- Used to Increment or document a variables value -->

<?php
//post-increment - returns $x , then increments $x by one
$x = 50;
echo $x++; 
echo "<hr/>";

//pre-increment - increments $x by one,then returns $x
$x = 50;
echo ++$x;
echo "<hr/>";

//pre-decrement - decrements $x by one,then returns $x
$x = 50;
echo --$x;
echo "<hr/>";

//post-decrement - returns $x , then decrements $x by one
$x = 50;
echo $x--;

?>

<h2>Logical operators</h2>
<!-- Used to combine conditional statements -->

<?php
//and - true if both $x and $y are true
$x = 200;
$y = 300;

if ($x == 200 and $y == 300){
    echo true;
    echo "<hr/>";
}

//Or - true if either $x or $y is true 
$x = 200;
$y = 300;

if($x == 200 or $y == 90){
    echo true;
    echo "<hr/>";
}

//and - true if both $x and $y are true
$x = 200;
$y = 300;

if($x == 200 or $y == 300){
echo "true";
echo "<hr/>";

}

//Or - $x || $y - true if either $x or $y is true
$x = 200;
$y = 300;

if($x == 200 or $y == 80){
    echo "true";
    echo "<hr/>";
}

// not = !$x - true if $x is not true
$x = 200;
$y = 300;

if($x !== 100){
    echo "true";
    echo "<hr/>";
}
?>

<h2>PHP String Operations</h2>
<!-- used to specifically for String -->

<?php
//Concatenation - Concatenation of $x and $y
$x = "Hello";
$y = " World!";

echo $x . $y;
echo "<hr/>";

//concatenation assignment - appends $txt2 to $txt1
$x = "matan";
$y = "zada";
$x .= $y;
echo "<hr/>";
?>

<h2>Array Operations</h2>
<!-- used to compare Arrays -->

<?php
//Union - union of $x and $y
$x = array("a"=> "blue","b"=>"red");
$y = array("c"=>"yellow","d"=>"black");

print_r($x + $y); //Union
echo "<hr/>";

//Equality - returns true if $x and $y have the same key/value pairs
$x = array("a"=>"blue","b"=>"red");
$y = array("c"=>"yellow","d"=>"black");

var_dump($x == $y);
echo "<hr/>";

// Identity - returns true if $x and $y have the same key/value pairs in the same order and of the same types
$x = array("a"=>"blue","b"=>"red");
$y = array("c"=>"yellow","d"=>"black");
var_dump($x === $y);
echo "<hr/>";

// Identity - returns true if $x is not equal to $y
$x = array("a"=>"blue","b"=>"red");
$y = array("c"=>"yellow","d"=>"black");
var_dump($x != $y);
echo "<hr/>";
?>
</body>
</html>