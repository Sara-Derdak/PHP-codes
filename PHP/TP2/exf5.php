<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de fichier</title>
</head>
<style>
      body {
        height: 100vh;
        font-size: 24px;
        color: #fefefe;
        background: linear-gradient(to top left, #28b487, #7dd56f);
      }
    
    </style>
<body>

<form  method="post" enctype="multipart/form-data">
    <h2>Télécharger un fichier</h2>
    <input type="file" name="file" accept=".pdf, .doc, .docx"><br><br>
    <input type="submit" value="Télécharger">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" ) {


    if (isset($_FILES["file"]) && $_FILES["file"]['error'] == 0 ){
        
        $fileName = $_FILES["file"]["name"];

        if($_FILES["file"]["size"] < 5 * 1024 * 1024){
            echo "la taille du fichier est valide <br>"    ; 
            if (move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/" . $fileName)) {
                echo "Le fichier a été téléchargé avec succès.";
            } 
            else { echo "Une erreur s'est produite lors du téléchargement du fichier.";
            }                                                    
        }
        else {
                    echo "La taille du fichier dépasse la limite autorisée (5 Mo).";
                }
    }

    else {
        echo "Veuillez sélectionner un fichier à télécharger.";
    }
}
?>



</body>
</html>
