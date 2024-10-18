<?php
// $_GET & $_POST adalah variable super global 
// variable ini membawa banyak data yang terjadi di aplikasi
    
// $_GET passing data melalui url   
    // $_GET["nama"]= "Mbah Ruro";
    // $_GET["alamat"]= "Bandung";
    // var_dump($_GET);

$arr = [
    [
        "nama" => "Mbah Ruro",
        "kota" => "Bandung",
        "no_telp" => "456878234698"
    ],
    [
        
        "nama" => "Mbah Riu",
        "kota" => "Jayapura",
        "no_telp" => "9875467943548"
    ]
]


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($arr as $person):?>
        <li><a href="get.php?nama=<?=$person['nama']?>&kota=<?=$person['kota']?>&no_telp=<?=$person['no_telp']?>"><?= $person['nama']?></a></li>    
        <?php endforeach?>
        </ul>

        <hr>


        <form method="POST">
            <input type="text" placeholder="username" name="txt_username">
            <input type="password" placeholder="password" name="txt_password">
            <button type="submit">submit</button>
        </form>

        <?php if(isset($_POST['txt_username'])):?>
            <h3>Hallo, <?=$_POST['txt_username']?></h3>
        <?php endif?>
</body>
</html>