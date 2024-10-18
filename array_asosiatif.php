<?php

    $arr =[
        ["senin", "selasa", "rabu"],
        ["Januari", "Februari", "Maret"],
        ["2020", "2021", "2022"]
    ];

    $dataperson = [
        [
            "nama"=>"Mbah Ruro",
            "kota"=>"Bandung",
            "baju"=>"biru",
            "makanan_favorit"=> ["Ayam", "Soto","Randang"]
        ],
        [
            "nama"=>"Mbah Ira",
            "kota"=>"Bogor",
            "baju"=>"Hijau",
            "makanan_favorit"=> ["coklat", "ice"]
        ],
        [
            "nama"=>"Mbah Rue",
            "kota"=>"Jakarta",
            "baju"=>"Merah",
            "makanan_favorit"=> ["pentol", "cilok","kebab","tahu bulat"]
        ]
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Asosiatif</title>
</head>
<body>
<?php foreach($arr as $data):?>
    <ul>
        
            <li>index 1 <?= $data[0]?></li>
            <li>index 2 <?= $data[1]?></li>
            <li>index 3 <?= $data[2]?></li>
       </ul>
<?php endforeach?>
<hr>

<?= $dataperson[0]["nama"]; ?>

<hr>

<?php foreach($dataperson as $datap):?>
    <ul style="margin-bottom: 24px;">
        <li>Nama : <?= $datap["nama"];?></li>
        <li>Kota : <?= $datap["kota"];?></li>
        <li>Baju : <?= $datap["baju"];?></li>
        <li>makanan :
            <ol>
                <?php foreach($datap["makanan_favorit"] as $makanan):?>
                    <li><?= $makanan;?></li>
                <?php endforeach;?>
            </ol> 
        </li>
    </ul>
<?php endforeach;?>
</body>
</html>