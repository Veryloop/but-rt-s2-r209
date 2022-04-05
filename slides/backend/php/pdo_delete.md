# PHP
Supprimer des données: PDO

```php
$pdo = new PDO('mysql:host=127.0.0.1;dbname=td', 'root', 'root');

$query = $pdo->prepare('DELETE FROM users WHERE id=:id');

$query->execute([
    "id" => $_POST['id']
])
```