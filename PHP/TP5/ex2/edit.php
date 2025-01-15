<?php

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['tel']) && isset($_POST['login']) && isset($_POST['password']))
{
    include "../conn.php";
    session_start();
    $nom = $_POST['nom'];
    $prenom=$_POST['prenom'];
    $tel=$_POST['tel'];
    $login=$_POST['login'];
    $password=$_POST['password'];
    $numero=$_SESSION['numero'];

    $sql="update stagiaires set nom=:nom , prenom=:prenom , telephone=:tel , login=:login , motDePasse=:password where numero=:numero";
    $stmt=$con->prepare($sql);

    $stmt->bindParam("nom",$nom);
    $stmt->bindParam("prenom",$prenom);
    $stmt->bindParam("tel",$tel);
    $stmt->bindParam("login",$login);
    $stmt->bindParam("password",$password);
    $stmt->bindParam("numero",$numero);
    // $stmt->bindParam("numreo", $numero);


    $r=$stmt->execute();

    if($r)
    {
        if($stmt->rowCount()!=0)
        {
            $_SESSION['updated']=true;
            header("Location:page2.php");
        }
        else
        {
            $_SESSION['updated']=false;
            header("Location:page2.php");
        }
    }
    else
        $_SESSION['updated']=false;
        header("Location:page2.php");
}
?>