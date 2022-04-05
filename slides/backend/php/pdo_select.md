# PHP
Lire des données: PDO

Création d'un "query" SQL et traitement des résultats.

```php
$pdo = new PDO('mysql:host=127.0.0.1;dbname=td', 'root', 'root');
$query = $pdo->query('SELECT firstname, lastname FROM users');

//Si $query égal 'false' il y a une erreur
var_dump($pdo->errorInfo()); //Permet d'afficher des détails sur l'erreur

$users = $query->fetchAll(PDO::FETCH_ASSOC);

//Exemple d'utilisation des données
<ul>
    <?php foreach ($users as $user): ?>
    <li><?= $user['firstname'] ?></li>
    <?php endforeach ?>
</ul>
```