<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Grade of students</h1>
<h4>Grading System</h4>
<p>- < 50 = F </p>
<p>- 50 < 59 = D </p>
<p>- 60 < 69 = C </p>
<p>- 70 < 79 = B </p>
<p>- 80 < 89 = A </p>
<p>- => 90 = A+ </p>
    <?php
$x = 90;

if($x < 50){
    echo "F";
}else if($x >= 50 & $x < 60){
    echo "D";
}else if($x >= 60 & $x < 70){
    echo "C";
}else if($x >= 70 & $x < 80){
    echo "B";
}else if($x >= 80 & $x < 90){
    echo "A";
}else{
    echo "A+";
}
    ?>

    
</body>
</html>