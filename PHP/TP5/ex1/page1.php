<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page protegee</title>
    <link rel="stylesheet" href="../../bootstrap.css">
</head>
<?php
session_start();
?>
<body>
    <?php
    if(!isset($_SESSION['isloggedin']) || $_SESSION['isloggedin']!= true)
    {
        header('location:index.php?connected=false');
        exit;
    }
    else
    {
        echo"<div class='container d-flex justify-content-center align-items-center p-2'>
        <div><img src='verifier.png' alt='mal cahrgee' width='280px' height='200px'></div>
        <div class='alert alert-success'>Bonjour ".$_SESSION['nom']." ".$_SESSION['prenom']." dans votre espace privee</div></div>";
    }
    ?>
    <div  class='container d-flex justify-content-center align-items-center'>
    <a href='deconn.php' class='btn btn-primary'>Se déconnecter</a>
    </div>
    
</body>
</html>