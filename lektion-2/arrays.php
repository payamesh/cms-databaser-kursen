<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php


$your_array = array(23, 45, 54, 12, 77);

echo "<h1>$your_array[0]  , $your_array[4]</h1> <br>"; //     23  , 77

$your_array[4] = 1;
echo $your_array[4]; // 1


$best_array = array(1, 2, 3, 4, 5);

for ($i=0; $i < count($best_array) ; $i++) { //12345
    echo $best_array[$i] .  '<br>';
}
$sum = $best_array[0];

for ($i=0; $i < count($best_array) ; $i++) { //1,2,6,24,120
    $sum = $sum * $best_array[$i] . '<br>' ;
    echo $sum;
}
echo $sum;



$ok_array = array("fine", "FINE", "good", "what is this stuff?", "sweet", "i don't even live here");

foreach ($ok_array as $text) {
    if(strlen($text)<= 5)
    echo $text . "<br>";
    # code...
}



$worst_array_yet = array("string", true, 42, "another string", 54, true, 1);

foreach ($worst_array_yet as $value) {
    if(is_string($value)){
        echo $value . '<br>';//string
                             //another string
    }
    else{
        $sum2 += $value; 
    }
}
echo $sum2; //219
?>




</body>
</html>