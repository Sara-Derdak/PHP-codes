<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Voicie ma page </h1>
    <?php
    if(isset($_FILES['cv']) && $_FILES['cv']['error']==0)
    {
        // echo "Bien"; size/type'jpg'
        if(move_uploaded_file($_FILES['cv']['tmp_name'],$_FILES['cv']['name']))
        // if(move_uploaded_file($_FILES['cv']['tmp_name'],"./file/".$_FILES['cv']['name']))
        {
            echo "Bien";
        }
        else
        {
            echo"Erreur de transefre";
        }
    }
    else
    {
        echo"Erreur de transefre";
    }
    var_dump($_FILES["cv"]);
    ?>
</body>
</html>