<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <?php 
    if (isset($_GET['update']))
    {
     if($_GET['update'])
     echo'<div class=" alert alert-success d-flex justify-content-center align-content-center ms-5 mx-5">Article Modifier avec succes . </div>';
     else
     echo'<div class=" alert alert-danger d-flex justify-content-center align-content-center ms-5 mx-5">Aucun article a ete modifier !! . </div>';
    }
   ?>
    <div class="d-flex justify-content-center align-content-center"> 
        <h2 class="modal-title">Details </h2>
    </div>
<?php
   if(isset($_GET['id'])||isset($_POST['id']))
   {
    include "conn.php";
    if(isset($_GET['id']))
    {$id=$_GET['id'];}
    else
    {$id=$_POST['id'];}
    $sql = "select * from articles where id=:id";
    
    $stmt= $con->prepare($sql);

    $stmt->bindParam("id",$id);

    $r=$stmt->execute();

    if($r)
    {
        $resultat=$stmt->fetchAll(PDO::FETCH_ASSOC);
        if(count($resultat)==0){
        echo'<div class="d-flex justify-content-center align-content-center"> ';
        echo "<div class=' alert alert-danger '>Aucun Article à afficher</div></div>";
    }
        else
        {
            // var_dump($resultat);
            echo"<div class=' d-flex justify-content-around align-content-center '>";
            echo "<table class='table table-light w-75' border='1'>";
            echo"<tr><th>Id</th><td>".$id."</td></tr>";
            echo"<tr><th>Designation</th><td>".$resultat[0]['designation']."</td></tr>";
            echo"<tr><th>Prix</th><td>".$resultat[0]['prix_unitaire']."</td></tr>";
            echo"<tr><th>Quantite</th><td>".$resultat[0]['quantite']."</td></tr>";
            echo "</table>";
            echo "</div>";
        }
        echo'<div class="d-flex justify-content-center align-content-center"> ';
        echo '<a href="index.php" class="btn btn-primary">Retour a la liste des articles</a></div>';
    }
}
else{
    header("Location:index.php");
}
?>

</body>
</html>