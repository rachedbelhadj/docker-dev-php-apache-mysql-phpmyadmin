<?php

echo "hello world!";

echo "<br> ------------------- test DB connexion ------------------- ";
$host = 'db'; //Nom donné dans le docker-compose.yml
$user = 'appdev';
$password = 'password';
$db = 'appdev';

$conn = new mysqli($host, $user, $password, $db);
if (!$conn) {
    echo "<br> Erreur de connexion à MySql<br />";
} else {
    echo "<br> Connexion à MySql ok<br />";
    mysqli_close($conn);
}

