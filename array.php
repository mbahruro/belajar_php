<?php
    // cara lama
    $arr1 = array("Senin", "Selasa","Rabu");

    // cara baru
    $arr2 = ["Kamis","Jumat", "Sabtu", "Minggu"];

    // echo hanya bekerja utk string/integer
    // khusus debugging/developer
    // gunakan var_dump
    var_dump($arr1);
    echo "<br>";
    print_r($arr2);
    echo "<br>";
    echo $arr1[1];
    echo "<hr>";

    for($i = 0; $i < count($arr2); $i++){
        echo $arr2[$i] . "<br>";
    }
    echo "<hr>";
    foreach($arr2 as $hari){
        echo $hari . "<br>";
    }
?>