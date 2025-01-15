<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $ville = ["Rabat","tange","Marrakech"];
    $b = false ;
    // if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["ville"])==true)
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        if (array_key_exists("ville",$_POST))
        {
            foreach ($ville as $x)
            {
               if (strtolower($x) == strtolower($_POST["ville"]))
               {
                echo "ville valide : ".$x ;
                $b = true ;
                break;
               }
            }
        }
        if ($b == false)
        {
            echo "Ville invalide ";
        };
    }
?>
</body>
</html>