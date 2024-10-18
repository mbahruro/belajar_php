<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengkondisian</title>
</head>
<body>
    <?php
    // if-else
    // if-else if-else
    // ternary
    // switch

    $umur = 20;

    if($umur == 20){
        echo"umur sama dengan 20"; //true
    }
    else if($umur < 30){
        echo "umur kurang dari 30";
    }
    else{
        echo"umur lebih dari 30"; //false
    }
    ?>
    <hr>

    <?php

    // ternary
    $age = 20; 

    echo ($age < 30 ? "umur kurang dari 30 " : "umur sama dengan " . $age);
    ?>
    <hr>    
    
    <?php
    // switch
    $yusua = 10;
    switch($yusua){
        case 15:
        case 16:
        case 17:
        case 18:
        echo "umur dibawah 20 diatas 14";
        break;
        case 20:
            echo "umur 20";
            break;  
        default:
        echo "umur tidak didefinisikan";
    }
    ?>
    
</body>
</html>