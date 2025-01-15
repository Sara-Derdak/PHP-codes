<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="bootstrap.css">
    <script>
        function Delete(event) {
        if (confirm("Voulez-vous supprimer cet article ?") == false)
            event.preventDefault();
        }
    </script>
</head>
<body>
<?php 
    if (isset($_GET['created']) )
    {
     if($_GET['created'])
     echo'<div class=" alert alert-success d-flex justify-content-center align-content-center ms-5 mx-5">Article creer avec succes . </div>';
     else
     echo'<div class=" alert alert-danger d-flex justify-content-center align-content-center ms-5 mx-5">Aucun article a ete creer !! . </div>';
    }
    if(isset($_GET['delete']))
    {
     if($_GET['delete'])
     echo'<div class=" alert alert-success d-flex justify-content-center align-content-center ms-5 mx-5">Article supprimer avec succes . </div>';
     else
     echo'<div class=" alert alert-danger d-flex justify-content-center align-content-center ms-5 mx-5">Aucun article a ete supprimer !! . </div>';
    }
   ?>
    <div class="d-flex justify-content-center align-content-center"> 
    <h2 class="modal-title">Liste des Articles </h2>
    </div>
    <div  class="d-flex justify-content-center align-content-center m-2">
    <a href="create.php" class="btn btn-primary">Creer un article</a><br><br>
    <a href="search.php" class="btn btn-primary mx-2 ">Rechercher un article</a><br><br>
    </div>
   <?php
   include "conn.php";
   try
    {
   $sql="select * from articles";

   $stmt = $con->prepare($sql);

   $r=$stmt->execute();

   if($r){
   $articles=$stmt->fetchAll(PDO::FETCH_ASSOC);
   if(count($articles)==0)
   echo "<div class=' alert alert-danger'>Aucun Article à afficher</div>";
   else
   {
   // var_dump($articles);
   echo"<div class=' d-flex justify-content-around align-content-center '>";
   echo "<table class='table table-striped w-75 table-hover container' border='1'>";
   echo "<tr><th>Id</th><th>Designation</th><th>Prix</th><th>Qunatite</th><th style='text-align: center;'>Actions</th></tr>";

   foreach($articles as $e)
   {
       echo "<tr>";
       echo "<td>".$e["id"]."</td>";
       echo "<td>".$e["designation"]."</td>";
       echo "<td>".$e["prix_unitaire"]."</td>";
       echo "<td>".$e["quantite"]."</td>";
       echo "<td class=' d-flex justify-content-around align-content-center '><a href='show.php?id=".$e['id']."' class='btn btn-info'>Afficher</a><a href='edit.php?id=".$e['id']."' class='btn btn-warning'>Modifier</a><a onclick='Delete(event)' href='delete.php?id=".$e['id']."' class='btn btn-danger'>Supprimer</a></td>";
       echo "</tr>";
   }
   echo "</table>";
   echo "</div>";
  }
  }
  else
    echo "Erreur lors de la lecture";
}
catch(PDOException $ex)
{
    echo "Erreur!!!";
}
   ?> 
</body>
</html>