# Le protocole HTTP
Les Headers : Cookies

Cookies techniques (ex: session PHP)

Un cookie technique peut permettre aux clients d'ouvrir une "session" avec un serveur Web.
Dans le cadre d'une session PHP, le serveur PHP utilise un header "Set-Cookie" pour transmettre un token unique que le client doit garder afin de le transmettre lors des prochains appels HTTP.

Ex : PHPSID=lo333sit8ta2tnea15uhphglsp

Lors de l'ouverture d'une session PHP, le serveur crée un fichier contenant des données relatives à la session de l'utilisateur. Le fichier porte le nom du token.

```php
//Démarrage ou récupération d'une session
session_start();
//Définition de la clé 'rôle' dans le tableau de session
$_SESSION["role"]="Admin"; 
```