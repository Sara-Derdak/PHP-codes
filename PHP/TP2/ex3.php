<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Q1
    $T=[
        "Mohamed"=>["prenomX","casa",20],
        "Ahmed"=>["prenomY","Tanger",30]
    ] ;
    var_dump($T);
    // echo $T['Mohamed'][2];
    
  
    // Q2
    $T=[
        "Mohamed"=>["prenom"=>"x","ville"=>"casa","age"=>20],
        "Ali"=>["prenom"=>"y","ville"=>"rabat","age"=>30],
        "Karim"=>["prenom"=>"z","ville"=>"casa","age"=>19],
    ] ;
    // var_dump($T);

    foreach($T as $k => $v)
    {
        echo "Nom : ".$k."<br>";
        foreach($v as $k2 => $v2)
        {
            echo $v2."  " ;
        }
        echo"<br>";
    }
    
    // echo "<table border=1>";
    // echo "<tr>";
    // echo "<th>Nom</th><th>Prenom</th><th>Age</th>";
    // echo "</tr>";
    // foreach($T as $nom => $x)
    // {
    //     echo "<tr>";
    //     echo "<td>".$nom."</td><td>".$x["prenom"]."</td><td>".$x["age"]."</td";
    //     echo "</tr>";
    // }
    // echo "</table>";

    ?>
     
</body>
</html>