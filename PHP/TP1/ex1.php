<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex1</title>
</head>
<body>
    <?php    
    // 1
    echo "Bonjour , PHP !<br><br>";
    ?>

    <!-- 2 -->
    <form  method="post">
        <label name="nom" >Nom : </label>
        <input type="text" name="nom"><br>
        <label name="prenom" >Prenom : </label>
        <input type="text" name="prenom"><br>
        <input type="submit">
    </form>
    <br>
    <?php    
    if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["nom"])==true && isset($_POST["prenom"])==true)
    {
     echo("Bonjeur ".$_POST["nom"]." ".$_POST["prenom"] ."<br><br>") ;
    }

    // 3
    $a=4;
    $b=2;
    echo "Addition :".$a+$b."<br>";
    echo "Soustraction :".$a-$b."<br>";
    echo "Multiplication :".$a*$b."<br>";
    echo "Division :".$a/$b."<br><br>";

    // 4
    if($a%2==0)
    {
        echo "L'entier $a est paire <br><br>";
    }
    else
    {
        echo "L'entier $a est impaire<br><br>";
    }

    // 5
    for ($i=1 ; $i<=10 ;$i++)
    {
        echo "    $i    ";
    }
    ?>
     <!-- 6 -->
    <table border ="1">

    <?php 
        $e = 2 ;
        
        for ($i = 1 ; $i <= 10 ; $i++)
        {
            echo "<tr>";
            echo "<td>" . $e . " x ". $i ."</td>";
            echo "<td> = " . $e * $i . "</td>";
            echo "<tr>";
        }
    
    ?>
    </table>
    <?php
    // 7
    $a = 1 ;
    while ($a <= 20)
    {
        echo $a ." " ;
        $a++ ;
    } 

     echo "<br>";

    // 8
    $L=[1,2,3,4,5,6,7,8];
    $s = 0 ;
    foreach ($L as $x)
    {
        $s+= $x ;
    }
    echo "La somme des valeur est : " . $s ;

    echo "<br>";

    // 9
    $pair = function($n)
    {
        if  ($n % 2 == 0)
        {
            // echo "le nombre ". $n . " est pair . ";
            return true ;
        }
        else
        {
            // echo "le nombre ". $n . " est pair . ";
            return false;
        }
    };  

    if ($pair(20)==true){ echo "Le nombre est pair";}
    else{echo "le nombre est impaire";}


    // 10
    $majuscul = function($ch)
    {
        return strtoupper($ch) ;
    };
    $chaine="Sara derdak";
    echo $majuscul($chaine);

    echo "<br>";


    // 11
    $T=["mohamed","ali","sara"];
    $e = [] ;
    foreach ($T as $str) 
    {
        if (strpos($str , "e") !== false) 
        {
            array_push($e , $str);
        }
    };
    foreach ($e as $x)
    {
        echo $x ."<br>";
    };

    // 12
     echo "Salut PHP , nous sommes le  " . date('d/m/Y') ;

    echo "<br>";

    // 13
    $d=new DateTime();
    if ($d->format('H')<=6 && $d->format('H')>=12)
    echo "bonjour";
    else if ($d->format('H')>12 && $d->format('H')<18)
    echo "Bon apres-midi";
    else 
    echo "bonnu nuit ";

    // 14
    $dateN=new DateTime('2006-03-25');
    function Age($d)
    {
    return ($d ->diff(new DateTime()))->y;
    }
    echo Age($dateN);
    ?>
    
</body>
</html>