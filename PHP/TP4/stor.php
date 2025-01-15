<?php
include "conn.php";

if(isset($_POST['id']))
{
    $id = $_POST['id'];
    $designation=$_POST['designation'];
    $prix_unitaire=$_POST['prix_unitaire'];
    $quantite=$_POST['Quantite'];

    $sql="update articles set designation=:designation , prix_unitaire=:prix_unitaire , quantite=:quantite where id=:id";
    $stmt=$con->prepare($sql);

    $stmt->bindParam("designation",$designation);
    $stmt->bindParam("prix_unitaire",$prix_unitaire);
    $stmt->bindParam("quantite",$quantite);
    $stmt->bindParam("id",$id);

    $r=$stmt->execute();

    if($r)
    {
        if($stmt->rowCount()!=0)
        header("Location:show.php?id=".$id."&update=true");
        else
        header("Location:show.php?id=".$id."&update=false");
    }
    else
        header("Location:show.php?id=".$id."&update=false");
}
else
{
    $designation=$_POST['designation'];
    $prix_unitaire=$_POST['prix_unitaire'];
    $quantite=$_POST['Quantite'];

    $sql="insert into articles(designation,prix_unitaire,quantite) values(:designation,:prix_unitaire,:quantite)";
    
    $stmt=$con->prepare($sql);

    $stmt->bindParam("designation",$designation);
    $stmt->bindParam("prix_unitaire",$prix_unitaire);
    $stmt->bindParam("quantite",$quantite);

    $r=$stmt->execute();

    if($r)
        {
        if($stmt->rowCount()!=0)
        header("Location:index.php?created=true");
        else
        header("Location:index.php?created=false");
        }
        else
        header("Location:index.php?created=false");
}
?>