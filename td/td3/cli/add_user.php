#!/usr/bin/php
<?php
require '../helper/connection.php';

$username = $argv[1];
$password = readline("mot de passe : ");

$query = $pdo->prepare('INSERT INTO users (username, password) VALUES (:username, :password)');

$success = $query->execute([
    "username" => $username,
    "password" => $password
]);

if($success){
    echo "L'utilisateur $username a été créé \n";
} else {
    $error = $query->errorInfo()[2];
    echo "Erreur : $error \n";
}