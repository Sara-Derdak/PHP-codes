<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <label for="num1">Entier 1 :</label><br>
        <input type="text" id="num1" name="num1" required placeholder="donner num 1"><br>

        <label for="num2">Entier 2 :</label><br>
        <input type="text" id="num2" name="num2" required placeholder="donner num2"><br>
        <input type="submit" value="Calculer la somme">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["num1"]) == True && isset($_POST["num2"]) == true) 
    {
        if (is_numeric($_POST["num1"]) == true && is_numeric($_POST["num2"]) == true) 
        {
            echo "la somme est ", $_POST["num1"] + $_POST["num2"];
        } 
        else 
        {
            echo "Errour";
        }
    }
    ?>
    </body>

</html>