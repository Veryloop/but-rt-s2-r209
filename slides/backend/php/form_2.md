# PHP
Traiter les formulaires HTML

```php
<?php session_start(); ?>
...
    <?php if(isset($_POST['username']) && isset($_POST['password'])){
        if($_POST['username'] === "admin" && $_POST['password'] === "1234"){
            $_SESSION['logon'] = true;
        } else {
            echo "username/password erroné";
        }
    }?>

    <?php if(isset($_SESSION['logon']) && $_SESSION['logon'] === true): ?>
        Vous êtes connecté !
    <?php else: ?>
        <form action="/login.php" method="post">
            <input type="text" name="username">
            <input type="password" name="password">
            <button type="submit">Connexion</button>
        </form>
    <?php endif ?>
...
```