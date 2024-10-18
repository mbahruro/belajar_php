<?php
//memulai sesi
session_start();

//dihapus sesinya
session_destroy();
header("Location: login.php");
exit;
?>