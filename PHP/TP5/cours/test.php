<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    if(!isset($_SESSION['isloggedin']) || $_SESSION['isloggedin']!= true)
    {
        header('location:session.php');
        exit;
    }

    echo "Buenvenue ".$_SESSION['login']."<br>";
    // echo session_cache_expire();
    
    
    
    ?>
    <br>
    <a href="deconnecter.php">Se déconnecter</a>
</body>
</html>