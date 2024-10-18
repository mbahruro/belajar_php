<?php

// biasanya untuk menggabungkan tag HTML pada logic

    $a = "<div>";
    $a .= "<h3>Hello World</h3>";
    $a .= "<p>hai hai hai</p>";
    $a .= "<p>sambungan lagi</p>";
    $a .= "</div>";

    echo $a;

    //Boolean true / false || 1 / 0

    var_dump(1 == "1"); // true- krn membandingkan valuenya saja
    var_dump(1 === "1"); // false- krn membandingkan dengan tipe datanya


    // operator logika && (and), 
    // || (or),
    // ! (not),
    // > (more than),
    // < (less than),
    // = (equal),
    // >= (more than or equal)
    // <= (less than or equal)
    // != (not equal)

    $umur = 15;
    var_dump($umur < 20 && $umur >=16);

    $nama = "TG";
    var_dump($nama == "TG");

    $cek = "";
    var_dump($cek =="")

?>