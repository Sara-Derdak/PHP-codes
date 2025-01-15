<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style>
        input{
            border-color: gainsboro;
            border-radius: 5px;
            padding: 8px;
        }
    </style>
    
</head>
<body>
    <?php
    if(isset($_GET['id']))
    {
        include "conn.php";
    
        $id=$_GET['id'];
        $sql = "select * from articles where id=:id";
        
        $stmt= $con->prepare($sql);
    
        $stmt->bindParam("id",$id);
    
        $r=$stmt->execute();
        $resultat=$stmt->fetchAll(PDO::FETCH_ASSOC);
        if(count($resultat)==0){
            echo'<div class="d-flex justify-content-center align-content-center"> ';
            echo "<div class=' alert alert-danger '>N'existe pas cet article !!</div></div>";
            die();
            // header("Location:index.php");
        }
    }
    ?>
<div class="d-flex justify-content-center align-content-center"> 
    <table>
    <tr><td colspan="2"><h2>Modifier l'article</h2></td></tr>
    <form action="stor.php" method="post" class=" form-check" >
    <input type="hidden" name="id" value="<?php echo $id  ?>">
        <tr>
        <th><label for="designation" class=" form-check-label">Designation</label></th>
        <td><input type="text" name="designation" id="designation" value="<?php echo $resultat[0]['designation'] ?>"><br><br></td>
        </tr>
        <tr  class=" border-top ">
        <th><label for="prix unitaire " class=" form-check-label">prix_unitaire</label></th>
        <td><br><input type="text" name="prix_unitaire" id="prix_unitaire" value="<?php echo $resultat[0]['prix_unitaire'] ?>"><br><br></td>
        </tr>
        <tr  class=" border-top ">
        <th><label for="Quantite" class=" form-check-label">Quantite</label></th>
        <td><br><input type="text" name="Quantite" id="Quantite" value="<?php echo $resultat[0]['quantite'] ?>" ><br><br></td>
        </tr>
        <tr>
        <td colspan="2"  class=" border-top "><br>
            <input type="submit" value="Enregistrer les modifications" class="btn btn-primary">
            <input type="reset" value="Annuler les modifications" class="btn btn-danger">
            <a href="index.php" class="btn btn-dark">Annuler</a>
        </td>
        </tr>
    </form>
    </table>
    </div>
</body>
</html>