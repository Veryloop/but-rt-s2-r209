# PHP
Session utilisateur

La session PHP est un tableau contenant des informations relatives à un client. Ces données sont persistées entre les différents appels que le client fait au serveur.

PHP utilise un cookie de session pour retrouver le tableau précédemment sauvegardé correspondant à l'utilisateur.

```php
<?php
session_start(); //Démarrer ou retrouver la session de l'utilisateur

$_SESSION; //Tableau session contenant les informations persistées
$_SESSION['logon'] = true;
$_SESSION['user']['role'] = "ADMIN";
$_SESSION['user']['name'] = "Alice";

 session_abort(); //Détruit la session de l'utilisateur, au moment où il souhaite se déconnecter par exemple
 ```