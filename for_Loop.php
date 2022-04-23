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
    //For loop 
    for($x = 0; $x <= 10; $x++){
        echo "$x <br/>";
    }
echo "<hr/>";

//for Each loop
$cars = array("BMW","mazda","honda","ford");
foreach($cars as $value) {
    echo "$value <br/>";
}
?>
</body>
</html>