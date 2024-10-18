<?php 
//standard output

// ini untukk menampilkan  kalimat string
// gunakan \n utnuk enter di terminal
// gunakan <br> imtil di browse

echo"hello world " . "(menggunakan echo)\n";


// cara kedua
print "hello world "."(menggunakan print)\n";

// cara ketiga bisa digunakan tuk menampilkan data String, arry, dsb
// print_r adalah fungsi build-in dari PHP
print_r("Hello world "."(menggunakan print_r)\n");

// var dump adalah fungsi build-in dari PHP
// cara ini khusus untuk analisis data / untuk programer
var_dump("Hello world "."(menggunakan var_dump)\n");





$String1 = "Hello World ";
$String2 = "(Menggunakan variabel terpisah)\n";

echo $String1 . $String2;


echo 12 + 8 ."\n"; // Integer
echo "12" + 8; // String

// secara default string di convert ke int oleh php
// bukan cara yang direkomendasikan
echo "\n";
$x =5;
$y =10;

$hasil510 = $x * $y;
echo "hasil kali 5 x 10 =" . $hasil510;

echo "\n";
$x =3;
$y =2;

$hasilxy = $x * $y;
echo "hasil kali " . $x . "x" . $y . " =" . $hasilxy . "\n";

echo 25 + 5;
echo "\n";
echo 25 - 5;
echo "\n";
echo 25 * 5;
echo "\n";
echo 25 / 5;
echo "\n";
echo 25 % 2; //Modulus utnuk mencari nilai akhir apakah ada sisa atau tidak
echo "\n";
?>