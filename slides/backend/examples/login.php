<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
</body>
</html>