<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style>
        .x
         {
            max-width: 600px;
            margin: 0 auto;
            background: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 30px 30px rgba(0, 0, 0, 0.1);
        }

        input{
            border-color: gainsboro;
            border-radius: 5px;
            padding: 8px;
        }
    </style>
</head>
<body>
<div class="d-flex justify-content-center align-content-center" class="x"> 
    <table>
    <tr><td colspan="2"><h2>Recherher un article</h2></td><br></tr>
    <form action="show.php" method="post" class=" form-check" >
        <tr>
        <th><label for="id" class=" form-check-label">id</label></th>
        <td><input type="text" name="id" id="id" ><br><br></td>
    </tr>
        <td colspan="2"  class=" border-top "><br>
            <input type="submit" value="Rechercher" class="btn btn-primary">
            <input type="reset" value="Reinitialiser" class="btn btn-danger">
            <a href="index.php" class="btn btn-dark">Annuler</a>
        </td>
        </tr>
    </form>
    </table>
    </div>
</body>
</html>