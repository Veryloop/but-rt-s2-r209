#!/usr/bin/php
<?php
require '../helper/connection.php';

$username = $argv[1];
$sip = $argv[2];
$role = $argv[3];

switch($role){
    case "T":
        $role = "Technicien";
        break;
    case "I":
        $role = "Ingénieur réseau";
        break;
    default:
        echo "Rôle manquant";
        die();
        break;
}

$password = readline("mot de passe : ");

$query = $pdo->prepare('INSERT INTO users (username, password, sip, role) VALUES (:username, :password, :sip, :role)');

$success = $query->execute([
    "username" => $username,
    "password" => $password,
    "sip" => $sip,
    "role" => $role
]);

if($success){
    echo "L'utilisateur $username a été créé \n";
} else {
    $error = $query->errorInfo()[2];
    echo "Erreur : $error \n";
}