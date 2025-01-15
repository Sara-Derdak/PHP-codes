<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex2</title>
    <link rel="stylesheet" href="../../bootstrap.css">
</head>
<body>
    <div class="d-flex justify-content-center container p-3">
        <form action="" method="post">
            <table class=" d-flex justify-content-center">
                <tr>
                    <td>
                        <img src="../ex1/img.png" alt="mal chargee" width="220px" height="190px">
                    </td>
                </tr>
                <tr>
                    <td><label for="login" class="form-label">Nom d'utilisateur :</label></td>
                </tr>
                <tr>
                    <td><input type="text" name="login" id="login" placeholder="Entrer votre nom" class="form-control" required></td>
                </tr>
                <tr>
                    <td><label for="password" class="form-label">Mot de passe :</label></td>
                </tr>
                <tr>
                    <td><input type="password" name="password" id="password" placeholder="Entrer votre mot de passe" class="form-control" required></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Connexion" class="btn btn-primary m-1">
                    <input type="reset" value="Annuler" class="btn btn-danger m-1"></td>
                </tr>
            </table>
        </form>
    </div>

    <?php
    if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['login']) && isset($_POST['password']) )
    {
        include("../conn.php");
        try
        {
            $login=$_POST['login'];
            $password=$_POST['password'];
            $sql="select * from stagiaires where login=:login and motDePasse=:password";
            $stmt=$con->prepare($sql);
            $stmt->bindParam("login",$login);
            $stmt->bindParam("password",$password);
            $r=$stmt->execute();
            if($r){
                $stagiaire=$stmt->fetchAll(PDO::FETCH_ASSOC);
                if(count($stagiaire)==0)
                {echo "<div class='container d-flex justify-content-center align-items-center'>
                    <div class='alert alert-danger'>Nom d utilisateur ou mot de passe incorrect.</div></div>";
                }
                else{
                    session_start();
                    $_SESSION['login']=$login;
                    $_SESSION['numero']=$stagiaire[0]['numero'];
                    $_SESSION['password']=$stagiaire[0]['motDePasse'];
                    $_SESSION['nom']=$stagiaire[0]['nom'];
                    $_SESSION['prenom']=$stagiaire[0]['prenom'];
                    $_SESSION['tel']=$stagiaire[0]['telephone'];
                    $_SESSION['isloggedin']=true;
                    header("location:page2.php");
                    exit;
                }
            }
            else
            {
                echo"Erreur l'hors de la lecture";
            }
        }
        catch(PDOException $e)
        {echo $e->getMessage();}
    }
    ?>
    
</body>
</html>