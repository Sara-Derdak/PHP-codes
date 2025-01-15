<?php
$host = "localhost";
$database = "rh";
$user = "root";
$password = "";

try {
    $con = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    // echo "Connexion bien établie<br>";
} catch (PDOException $e) {
    die("Impossible de se connecter à la base de donnée $dbname :" . $e->getMessage());
}
?>