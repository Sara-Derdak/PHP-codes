<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .matable
        {
            background-color: yellow;
        }
    </style>
</head>
<body>
    <?php
    $host="localhost";
    $database="rh";
    $user="root";
    $password="";
    
    try
    {
    $con= new PDO("mysql:host=$host;dbname=$database",$user,$password);
    echo "Connexion bien établie<br>";
    }
    catch(PDOException $ex)
    {
        echo $ex->getMessage();
        
        
    }

    // 1 CREATE

    // try
    // {
    // $matricule=6;
    // $nom="NOM6";
    // $prenom="PRENOM6";
    // $date="2009/4/4";
    // $salaire=66666;
    // $service=1;

    // // $sql = "insert into Employes values($matricule,'$nom','$prenom','$date',$salaire,$service)";
    // $sql = "insert into Employes values(:matricule,:nom,:prenom,:date,:salaire,:service)";
    
    // $stmt= $con->prepare($sql);

    // $stmt->bindParam("matricule",$matricule);
    // $stmt->bindParam("nom",$nom);
    // $stmt->bindParam("prenom",$prenom);
    // $stmt->bindParam("date",$date);
    // $stmt->bindParam("salaire",$salaire);
    // $stmt->bindParam("service",$service);

    // $r=$stmt->execute();

    // if($r)
    // echo " Employé bien ajouté";
    // else
    // echo "Erreur lors de l'insertion";
    // }
    // catch(PDOException $ex)
    // {
    //     echo "Erreur!!!";
    // }

    // 2 UPDATE

    // try
    // {
    // $matricule=4;
    // $nom="NOM44444";
    // $prenom="PRENOM444";
    // $date="2009/4/4";
    // $salaire=44444444;
    // $service=1;

    // // $sql = "insert into Employes values($matricule,'$nom','$prenom','$date',$salaire,$service)";
    // $sql = "update employes set Nom=:nom, Prenom=:prenom, DateNaissance=:date, Salaire=:salaire where Matricule=:matricule";
    
    // $stmt= $con->prepare($sql);

    // $stmt->bindParam("matricule",$matricule);
    // $stmt->bindParam("nom",$nom);
    // $stmt->bindParam("prenom",$prenom);
    // $stmt->bindParam("date",$date);
    // $stmt->bindParam("salaire",$salaire);
    // // $stmt->bindParam("service",$service);

    // $r=$stmt->execute();

    // if($r)
    // {
    // if($stmt->rowCount()!=0)
    // echo " Employé bien modifié";
    // else
    // echo "Aucun employé à modifier";
    // }
    // else
    // echo "Erreur lors de la modification";
    // }
    // catch(PDOException $ex)
    // {
    //     echo "Erreur!!!";
    // }

    // 3 DELETE

//     try
//     {
//     $matricule=6;
    

//     // $sql = "insert into Employes values($matricule,'$nom','$prenom','$date',$salaire,$service)";
//     $sql = "delete from employes where Matricule=:matricule";
    
//     $stmt= $con->prepare($sql);

//     $stmt->bindParam("matricule",$matricule);
    

//     $r=$stmt->execute();

//     if($r)
//     {
//         if($stmt->rowCount()==0)
//         echo "Aucun employé à supprimer";
//         else
//         echo " Employé bien supprimé";
//     }
//     else
//     echo "Erreur lors de la suppression";
//     }
// catch(PDOException $ex)
// {
//     echo "Erreur!!!";
// }

    // 4 READ
    try
    {
    $matricule=2;
    // $salaire=1000;
    

    // $sql = "insert into Employes values($matricule,'$nom','$prenom','$date',$salaire,$service)";
    $sql = "select * from employes where Matricule=:matricule";
    
    $stmt= $con->prepare($sql);

    $stmt->bindParam("matricule",$matricule);
    // $stmt->bindParam("salaire",$salaire);
    

    $r=$stmt->execute();

    if($r)
    {
        $resultat=$stmt->fetchAll(PDO::FETCH_ASSOC);
        if(count($resultat)==0)
        echo "Aucun employé à afficher";
        else
        {
        // var_dump($resultat);
        echo "<table class='matable' border='1'>";
        echo "<tr><th>Matricule</th><th>Nom</th><th>Prenom</th><th>Date Naissance</th><th>Salaire</th><th>Service</th></tr>";

        foreach($resultat as $e)
        {
            echo "<tr>";
            echo "<td>".$e["Matricule"]."</td>";
            echo "<td>".$e["Nom"]."</td>";
            echo "<td>".$e["Prenom"]."</td>";
            echo "<td>".$e["DateNaissance"]."</td>";
            echo "<td>".$e["Salaire"]."</td>";
            echo "<td>".$e["idService"]."</td>";
            echo "</tr>";
        }
        echo "</table>";
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