# PHP
Inclure des fichiers

<kbd>head.php</kbd>
```php
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>TD1</title>
    <link rel="stylesheet" href="style.css" />
</head>
```

<kbd>users.php</kbd>
```php
<?php require 'head.php'; ?>
<body>
    <h1>Utilisateurs</h1>
    <div>
    ....
    </div>
</body>
```