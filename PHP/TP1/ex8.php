<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

</head>
<body>
    <form action="" method="post"> 
        
        <p>Quel est votre langage de programmation préféré ?</p>
        <div>
            <label for="c">Langage C</label>
            <input type="checkbox" name="r[]" value="c" id="c">
        </div>
        <div>
            <label for="java">Langage Java</label>
            <input type="checkbox" name="r[]" value="java" id="java">
        </div>
        <div>
            <label for="py">Langage Python</label>
            <input type="checkbox" name="r[]" value="python" id="py">
        </div>
        <div>
            <label for="php">Langage PHP</label>
            <input type="checkbox" name="r[]" value="php" id="php">
        </div>
        <input type="submit" value="envoyer">

    </form>
    

    

    <?php 
    if ( $_SERVER['REQUEST_METHOD'] == 'POST'&& isset($_POST["r"]))
    {
        $T=$_POST["r"];
        foreach($T as $x)
        {
            switch($x)
            {
                case "c":echo"Felecitation d'avoir un langage puissant<br>";
                break;
                case "java":echo"Felecitation d'avoir un langage polyvalant<br>";
                break;
                case "python":echo"Felecitation d'avoir un langage facile<br>";
                break;
                case "php":echo"Felecitation d'avoir un langage web<br>";
                break;
            }

        }
    }

















    //     // echo $_POST["r1"] ; 
    //     $choix = $_POST["r1"];

    //     if ( $choix == "c")
    //     {
    //         echo "Le langage $choix : Bon choix";
    //     }
    //     elseif( $choix == "java" )
    //     {
    //         echo "Le langage $choix : Bon choix";
    //     }
    //     elseif( $choix == "python" )
    //     {
    //         echo " Le langage $choix : Bon choix</h3>";
    //     }
    //     elseif( $choix == "php" )
    //     {
    //         echo "Le langage $choix : Bon choix";
    //     };

    // }
    // if( $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["r1"])==false)
    //     {
    //         echo "<h3>Veuillez sélectionner au moins un langage.</h3>";
    //         header("Location:ex8");
    //     };
    ?>
</body>
</html>