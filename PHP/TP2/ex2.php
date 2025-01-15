<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $notes_apprenants = [
        "Mohamed" => "16",
        "Ahmed" => "14",
        "Rafika" => "13",
        "Aicha" => "15",
        "Samir" => "13",
        "Samar" => "13",
        "Rafik" => "10",
        "Samiha" => "09",
        "Fourat" => "07",
        "Sami" => "07",
        "Noura" => "14"
    ];
?>

    <!-- // Q1 -->
   <!-- <table border='1'><tr><th>Nom</th><th>Note</th></tr> -->
   <?php
    // foreach ($notes_apprenants as $nom => $note) {
    //     echo "<tr><td>$nom</td><td>$note</td></tr>";
    // }
?>
   <!-- </table> -->
<?php
    //  Q2
    // ksort($notes_apprenants);
    // echo "<h3>Tableau trié en ordre croissant</h3>";
    // echo "<table border='1'coll><tr><th>Nom</th><th>Note</th></tr>";
    // foreach ($notes_apprenants as $nom => $note) {
    //     echo "<tr><td>$nom</td><td>$note</td></tr>";
    // }
    // echo "</table>";
    ?>
<?php
    arsort($notes_apprenants);

    echo "<h3>Tableau trié en ordre décroissant</h3>";
    echo "<table border='1'><tr><th>Nom</th><th>Note</th></tr>";
    foreach ($notes_apprenants as $nom => $note) {
        echo "<tr><td>$nom</td><td>$note</td></tr>";
    }
    echo"</table>";  
    ?>
</body>
</html>