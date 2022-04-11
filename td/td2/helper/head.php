<?php session_start(); 
if($_SERVER['REQUEST_URI'] === "/login.php"){
    #l'utilisateur souhaite accéder à la page de login, on le laisse faire
}
else if(isset($_SESSION['logon']) &&  $_SESSION['logon'] === true){
    # l'utilisateur demande une page différente de /login.php et il est authentifié
    # on le laisse passer
} else {
    # sinon on le redirige vers /login.php et ON ARRÊTE l'exécution du script
    header('Location: /login.php');
    die();
} ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TD2</title>
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.1.0/build/pure-min.css" integrity="sha384-yHIFVG6ClnONEA5yB5DJXfW2/KC173DIQrYoZMEtBvGzmf0PKiGyNEqe9N6BNDBH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css" />
    <script src="assets/autoip.js"></script>
</head>