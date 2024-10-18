<?php
session_start();//untuk memulai sesi

if(isset($_SESSION['username'])){
    header("Location: dashboard.php");
}

$user = [
    'admin1' => 'password123',
    'user1' => 'password321'
];

// ambil data dari superglobal variable $_POST
if(isset($_POST['submit_login'])){


    $username = $_POST['txt_username'];
    $password = $_POST['txt_password'];

    if(isset($user[$username]) && $user[$username] === $password){
        //kondidi true
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit;
    }
    else{
        //kondisi false
        $err = "username atau password salah";
        $err;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <?php if(isset($err)):?>
    <p style="color: red; margin-bottom: 8px"><?= $err?></p>
    <?php endif?>
    <form method="POST">
        <div style="margin-bottom: 16px;">
            <label for="txt_username" style="margin-bottom: 8px; display: block;">username</label>
            <input type="text" name="txt_username" placeholder="username">
        </div>
        <div style="margin-bottom: 16px; ">   
            <label for="txt_password" style="margin-bottom: 8px; display: block;">password</label>
            <input type="text" name="txt_password" placeholder="password">
        </div>
        <div>
            <button type="submit" name="submit_login">submit</button>
        </div>
    </form>
</body>
</html>