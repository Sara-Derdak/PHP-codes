<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creat</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style>
        input{
            border-color: gainsboro;
            border-radius: 5px;
            padding: 8px;
        }
    </style>
</head>
<body>
<div class="d-flex justify-content-center align-content-center"> 
    <table>
    <tr><td colspan="2"><h2>Creer un nouvel article</h2></td></tr>
    <form action="stor.php" method="post" class=" form-check" >
        <tr>
        <th><label for="designation" class=" form-check-label">Designation</label></th>
        <td><input type="text" name="designation" id="designation" placeholder="Donner la designation" required ><br><br></td>
        </tr>
        <tr  class=" border-top ">
        <th><label for="prix unitaire" class=" form-check-label">prix_unitaire</label></th>
        <td><br><input type="text" name="prix_unitaire" id="prix_unitaire" placeholder="Donner le prix" required><br><br></td>
        </tr>
        <tr  class=" border-top ">
        <th><label for="Quantite" class=" form-check-label">Quantite</label></th>
        <td><br><input type="text" name="Quantite" id="Quantite" placeholder="Donner la quantite" required><br><br></td>
        </tr>
        <tr>
        <td colspan="2"  class=" border-top "><br>
            <input type="submit" value="Creer un articl" class="btn btn-primary">
            <input type="reset" value="Reinitialiser" class="btn btn-danger">
            <a href="index.php" class="btn btn-dark">Annuler</a>
        </td>
        </tr>
    </form>
    </table>
    </div>
</body>
</html>