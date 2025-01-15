<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">

        <label for="num">Entrez un nombre :</label>
        <input type="numbre" name="num" >
        <input type="submit" value="Envoyer">
    </form>

    <?php 
        if ( $_SERVER['REQUEST_METHOD'] == 'POST')
        { 
           if ( !empty($_POST["num"] && is_numeric($_POST["num"])))
           {
                $num = $_POST["num"];
                echo "<h1> La table de multiplication de  $num  est : </h1> ";
                echo "<ul>";
                for ($x = 1 ; $x <=10 ; $x++)
                {
                    $s = $x * $num ;
                    echo "<li> $num  x  $x  =  $s </li>";
                }
                echo "</ul>";
            }
            else
            {
               echo "Erreur / Donner un nombre valid !!!!";
            };
        }
    ?>
</body>
</html>