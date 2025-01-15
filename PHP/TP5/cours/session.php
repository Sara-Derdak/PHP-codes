<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Login <input type="text" name="login" id=""> <br>
        Mot de passe <input type="text" name="pass" id=""> <br>
        <input type="submit" value="Envoyer" name="envoyer">
    </form>

    <?php

    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['login']) && isset($_POST['pass']) )
    {
        $login= $_POST['login'];
        $pass=  $_POST['pass'];

        if($login=='admin' && $pass=='12345')
        {
            session_start();
            $_SESSION['isloggedin']=true;
            $_SESSION['login']=$login;
            header("location:test.php");
            exit;
        }
        else
        {
            echo 'login ou mot de passe incorrect';
        }
        
    }
    ?>
</body>
</html>