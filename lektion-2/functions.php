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
echo "<br>----------------------<br>";

    function multiply($numberOne, $numberTwo){
        return $numberOne*$numberTwo;  //32
    }
    $sumMulti = multiply(8,4);
    echo $sumMulti;


echo "<br>----------------------<br>";


function calculate($numberOne, $numberTwo, $numberThree){
    return $numberOne*$numberTwo/$numberThree;
    
}
$sumCalc = calculate(5,4,2);
echo $sumCalc;

echo "<br>----------------------<br>";

function highest_number($first,$second){
    if(is_numeric($first)){

        if(is_numeric($second)){
            return max($first,$second);
        }
        else{
        echo "Du måste ange siffror";

        }
    }else{
        echo "Du måste ange siffror";
    }

}
$sumHighest = highest_number(120,99);
echo $sumHighest;

echo "<br>----------------------<br>";

function count_string($text){
    return "Din text är ". strlen($text). " tecken lång";
}
$textResult = count_string("Hej jag heter payam");
echo $textResult;

echo "<br>----------------------<br>";

function convert_string($param1,$param2){
    if($param2 ==1){
        return strtoupper($param1);
    }else{
        return strtolower($param1);
    }
    
}
$stringConvert = convert_string("Hej Payam", 0);

echo $stringConvert;
echo "<br>----------------------<br>";

function last_char($param){
    return $param[-1];

}
$lastCharacter = last_char("Hej Payam");
echo $lastCharacter;


function make_paragraph($text, $dom, $style){
    echo "<$dom style='$style'>$text</$dom>";
}
make_paragraph("Detta är en paragraf", "h2","color: green;");

function listmaker($array){
    $list = "<ul>";
    foreach ($array as $value) {
        $li = make_paragraph($value, "li", "");
        $list = $list . $li;
    }
    $list = $list . '</ul>';
}
$my_array = [1,2,"doiajso", 41231,"oidhsa", "payam"];


$html_lista = listmaker($my_array);
echo $html_lista;

?>



</body>
</html>