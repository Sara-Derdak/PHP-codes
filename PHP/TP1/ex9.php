<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Calculatrice Simple</h2>
    <form method="post" action="">
        <label for="nombre1">Nombre 1 :</label>
        <input type="number" name="nombre1" id="nombre1" required><br><br>
        
        <label for="operateur">Opérateur :</label>
        <select name="operateur" id="operateur" required>
            <option value="">Sélectionnez un opérateur</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select><br><br>
        
        <label for="nombre2">Nombre 2 :</label>
        <input type="number" name="nombre2" id="nombre2" required><br><br>
        
        <input type="submit" value="Calculer">
    </form>

    <?php
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les valeurs saisies dans le formulaire
        $nombre1 = $_POST["nombre1"];
        $operateur = $_POST["operateur"];
        $nombre2 = $_POST["nombre2"];

        // Vérifier si les nombres saisis sont valides
        if (!is_numeric($nombre1) || !is_numeric($nombre2)) {
            echo "<p>Erreur : Veuillez saisir des nombres valides.</p>";
        } else {
            // Calculer le résultat en fonction de l'opérateur choisi
            switch ($operateur) {
                case '+':
                    $resultat = $nombre1 + $nombre2;
                    break;
                case '-':
                    $resultat = $nombre1 - $nombre2;
                    break;
                case '*':
                    $resultat = $nombre1 * $nombre2;
                    break;
                case '/':
                    // Vérifier si le deuxième nombre est différent de zéro pour éviter une division par zéro
                    if ($nombre2 != 0) {
                        $resultat = $nombre1 / $nombre2;
                    } else {
                        echo "<p>Erreur : Division par zéro.</p>";
                    }
                    break;
                default:
                    echo "<p>Erreur : Opérateur invalide.</p>";
                    break;
            }

            // Afficher le résultat si aucun message d'erreur n'a été affiché
            if (isset($resultat)) {
                echo "<p>Résultat : $nombre1 $operateur $nombre2 = $resultat</p>";
            }
        }
    }
    ?>
</body>
</html>