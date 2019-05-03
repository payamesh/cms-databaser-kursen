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
        $name = "Payam";
        $firstname= "Payam";
        $lastname= "Eshtiagh";
        $age = 20; 
        $degrees = 120;
    echo "<p>Programming!!!</p>";

    echo "<div style='background-color: lightcoral; height:200px; width:200px;'> </div>";

    
    
    ?>
    <h1>hello <?php echo $name;  ?>  </h1>
    <h1>hello <?php echo $firstname . " " . $lastname;  ?>  </h1>

    <?php echo "I've seen things you people wouldn't believe.<br> Attack ships on fire off the shoulder of Orion.<br> I watched C-beams glitter in the dark near the Tannhauser gate.<br> All those moments will be lost in time...<br> like tears in rain...<br> Time to die.<br><br><br>" ?>
    <?php echo "my age in dog years: " . $age*7;?>


    <?php 
    $has_header = true;
    if($has_header){
        echo "<h1>Has header</h1>";
    }
    else{
        echo "<p>Has NO header</p>";
    }

    if($age < 18){
        echo "<h1>Den där energidrycken är bara för vuxna unge man!</h1>";

    }else{
        echo "<h1>Det blir 500kr tack!</h1>";
    }

    if($degrees > 100){
        echo "<h1>Vattnet kokar!</h1>";
    }
    elseif ($degrees <100 && $degrees >=50) {
        echo "<h1>Halvägs nu!</h1>";
    }
    else {
        echo "<h1>vattnet kokar inte</h1>";
    }
    
    $has_water = true;
    $water_degrees = 30;
    if ($has_water) {
        echo "<h2>Det finns vatten!</h2>";
        if ($water_degrees < 30) {
            echo "<h2>Det går inte att bada, för kallt</h2>";
        }
        else{
            echo "<h2>Varsågod och bada!</h2>";
        }
    }
    else{
        echo "<h2>Det finns inget vatten</h2>";
    }


$weekend =true;
$vacation = false;
if ($weekend) {
 echo "SOVMORGON!";
}
elseif($vacation){
    echo "SOVMORGON";
}
else{
    echo "dags att jobba";
}

if($age >18 && $age <65){
    echo "Gå upp, gå till jobbet, jobba, jobba, äta lunch";
}
elseif ($age <18) {
    echo "EFTERFEST";
}
else{
    echo "mmm finska pinnar";

}


$ponyage = 20;
$ponyweight = 66;
if ($ponyage > 12) {
    if ($ponyweight <= 30) {
        echo "A-klass Pony";
    }elseif ($ponyweight>30 && $ponyweight <= 50) {
        echo "B-klass Pony";
        # code...
    }
    elseif ($ponyweight >50 && $ponyweight <= 65) {
        echo "C-klass Pony";
    }
    elseif ($ponyweight > 65) {
        echo "Finns ingen viktklass för denna pony";
    }

    # code...
}
else {
    echo "Din pony är för ung";
}

    ?>

</body>
</html>