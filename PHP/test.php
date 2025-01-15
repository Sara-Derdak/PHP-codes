<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            background-color : yellow;
        }
    </style>
</head>
<body>
    <h1>Ma premier page en PHP</h1>
    <script>
        document.write("je suis un code JS")
    </script>
    <?php 
    //  var_dump($_SERVER);
     if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["nom"])==true && isset($_POST["prenom"])==true)
     {
      echo("Bonjeur ".$_POST["nom"]." ".$_POST["prenom"]) ;
     }
     else
     {
        header("Location:form.html");
     }
    ?>
    
</body>
</html>