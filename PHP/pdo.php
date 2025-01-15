<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #container
        {
            width: 90%;
            height: auto;
            display: flex;
            flex-wrap: wrap;
            /* justify-content: space-around; */
            background-color: blue;
        }
        .block
        {
            margin: 10px;
            width: 30%;
            /* height: 40vh;    */
            border: 3px solid black;
            background-color: aqua;
        }
    </style>
</head>
<body>
<?php
    $host = 'localhost';
    $dbname = 'rh';
    $username = 'root';
    $password = '';
    try {
        $connexion = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        echo "Vous êtes maintenant connecté à $dbname sur $host.";
    } 
    catch (PDOException $e) 
    {
        die("Impossible de se connecter à la base de donnée $dbname :" . $e->getMessage());
    }


    try
    {
    $sql = "select * from employe";
    
    $stmt= $connexion->prepare($sql);

    

    $r=$stmt->execute();

    if($r)
    {
        $resultat=$stmt->fetchAll(PDO::FETCH_ASSOC);
        if(count($resultat)==0)
        echo "Aucun employé à afficher";
        else
        {
        echo "<div id=container>";
        foreach($resultat as $e)
        {
            echo "<div class='block'>";
            echo"<ul><b> Information :</b>";
            echo "<li> Matricule : ".$e["matricul"]."</li>";
            echo "<li> Nom :".$e["nom"]."</li>";
            echo "<li> Prenom : ".$e["prenom"]."</li>";
            echo "<li> Datenaissance : ".$e["datenaissance"]."</li>";
            echo "<li> Salair : ".$e["salair"]."</li>";
            echo "</ul>";
            echo "</div>";
        }
        echo "</div>";
    }
    }
    else
    echo "Erreur lors de la lecture";
    }
    catch(PDOException $ex)
    {
        // echo "Erreur!!!";
        echo $ex->getMessage();
    }
?>

</body>
</html>