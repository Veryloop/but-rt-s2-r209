# PHP
Modifier des données: PDO

```php
$pdo = new PDO('mysql:host=127.0.0.1;dbname=td', 'root', 'root');

$query = $pdo->prepare('UPDATE users SET firstname = :firstname WHERE id = :id');

$query->execute([
    "firstname" => $_POST['prenom'],
    "id" => $_SESSION['user']['id']
])
```