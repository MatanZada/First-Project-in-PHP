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
$myCar = "BMW";
switch ($myCar){
    case "BMW":
        echo "you drive a BMW";
        break;
    case "mazda":
        echo "you drive a Mazda";
        break;
    case "honda":
        echo "you drive a Honda";
        break;
    default: 
      echo "you dont drive";
}

?>
    
</body>
</html>