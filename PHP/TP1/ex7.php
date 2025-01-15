<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["reponse"])==true )
    {
          if(  $_POST["reponse"]=="Oui")
          {
          
          echo "Merci pour votre accord";
         }
        if(  $_POST["reponse"]=="Non")
        {
            echo "Dommage";
         }
          if(  $_POST["reponse"]=="Je ne sais pas")
          {
            echo "C'est pas grave";
          }
}

    ?>
</body>
</html>