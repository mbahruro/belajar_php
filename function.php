<?php
function salam($nama, $pembelajaran){
    return "Selamat datang di $pembelajaran, $nama";
}

function perhitungan($nominal, $jumlah){
    $num = $nominal * $jumlah; 
    $string_return = "Rp ". number_format($num, 0, ",",".");
    return $string_return; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<body>
    <h3>
        <?= salam("nama kita", "belajar fungsi") ?>
    </h3>
    
    <h3>
        <?= perhitungan(10000000000, 3.5)?>
    </h3>
</body>
</html>