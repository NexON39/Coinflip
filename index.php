<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $moneta = 0;
    $ilosczerowych = 0;
    for($i=1; $i<=50; $i++){
        $los1 = rand(1,2);
        $los2 = rand(1,2);
        if($los1 == 1){
            $moneta++;
        } elseif ($los1 == 2){
            $moneta--;
        }
        if($los2 == 1){
            $moneta++;
        } elseif ($los2 == 2){
            $moneta--;
        }
        if($moneta == 0){
            $ilosczerowych++;
        }
    }
    echo "Suma punktów: ".$moneta;
    echo "<br/>Ilość razy kiedy było 0 punktów: ".$ilosczerowych;
    
?>

</body>
</html>