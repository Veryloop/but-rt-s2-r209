# PHP
Où écrire le PHP pour faire du Web ?

Le PHP peut être directement ajouté à un fichier HTML.

```php
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>TD1</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <?php if ($_SESSION['logon']): ?>
        Bonjour <?php echo($_SESSION['user']['surname']) ?>
    <?php else: ?>
        Veuillez vous identifier
    <?php endif ?>
    <?php require 'table.php'; ?>
</body>
```