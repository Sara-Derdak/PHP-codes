<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action=""  method="post">
        <label name="nom" >Nom : </label>
        <input type="text" name="nom" required><br>
        <label name="age" >Age : </label>
        <input type="numbre" name="age" required><br>
        <input type="submit">
    </form>
    <br>
    <?php    
    if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["nom"])==true && isset($_POST["age"])==true)
    {
     echo("Bonjeur ".$_POST["nom"]." qui a ".$_POST["age"] ." ans <br>") ;
    }
    else
    {
        header("Location:ex2.html");
    }
    ?>
</body>
</html>