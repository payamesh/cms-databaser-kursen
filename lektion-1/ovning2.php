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

$sum = 1;
/* for($i = 0; $i < 10; $i = $i + 2){
   // $sum += $i;
   echo $i;

} */
//echo $sum;

/* for ($i=10; $i >= 0; $i--) { 
    # code...
    echo $i. ",";
}  */   //10987654321

/* for($i = 0; $i < 10; $i++){
    if( $i % 2 == 0){
        echo $i;
    }
} */

/* while ($a <= 10) {
    
        if( $a % 2 == 0){
            echo $a;
        }
    $a++;
} */


$numberOfSheep = 4;
$monthNumber = 1;
$monthsToPrint = 12;
for ($monthNumber=0; $monthNumber <= $monthsToPrint ; $monthNumber++) { 
/* echo "There will be: ". $i. "sheep after ".  */
$numberOfSheep *= 4;
echo "month: " .$monthNumber.'<br>';
echo "numberofsheep ".$numberOfSheep.'<br>';
}
?>
</body>
</html>