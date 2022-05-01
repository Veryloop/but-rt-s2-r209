# PHP
Insérer des données: PDO

Utilisation d'une requête préparée

```php
$pdo = new PDO('mysql:host=127.0.0.1;dbname=td', 'root', 'root');

$query = $pdo->prepare('INSERT INTO users (firstname, lastname) VALUES (:firstname, :lastname)');

$query->execute([
    "firstname" => $_POST['prenom'],
    "lastname" => $_POST['nom']
])
```