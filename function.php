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
//basic function
function displaytxt(){
    echo "my first function in php";
}
displaytxt();

echo "<hr/>";

//function arguments
function myCar($car){
    echo "$car<br/>";
}

myCar("Volvo");
myCar("BMW");
myCar("Mazda");


//returning values
function add($x,$y){
    $z = $x + $y;
    return $z;
}

echo "1 + 2 = " . add(1,2) . "<br/>";
echo "5 + 5 = " . add(5,5) . "<br/>";
echo "34 + 123 = " . add(34,123) . "<br/>";
?>


</body>
</html>