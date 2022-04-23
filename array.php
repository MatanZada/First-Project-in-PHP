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
//indexed array
$colors = array("blue","yellow","green","orange");
echo "my favorite colors are " . $colors[0] . " and " . $colors[1] . "<hr/>";

//array length
echo count($colors) . "<hr/>";

//loop through an indexed array 
$arrlength = count($colors);

for($x = 0; $x < $arrlength; $x++){
    echo $colors[$x] . "<br/>";
}
echo "<hr/>";

//associative arrays
$tscore = array("matan"=>"23");
echo "matan acired " . $tscore['matan'];
echo "<hr/>";

// loop through an associative array
foreach ($tscore as $x => $score){
    echo "key=" . $x . " score=" . $score;
    echo "<hr/>";
}
// Sort method
$names = array("matan","nir","yonatan","ariel","michaella");
sort($names);

$nlen = count($names);
for($i = 0; $i < $nlen; $i++) {
    echo $names[$i];
    echo "<br/>";
}
echo "<hr/>";

//associative array sort method according to value
$tscore = array("matan"=> 23, "nir"=>35,"yonatan"=>33);
asort($tscore);

foreach($tscore as $i => $i_value){
    echo "key" . $i . ", value=" . $i_value ;
    echo "<br/>";
}


?>
</body>
</html>