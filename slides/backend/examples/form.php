<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/form.php" method="post">
        <input type="text" name="username">
        <input type="password" name="password">
        <button type="submit">Connexion</button>
        <select name="abonnement">
            <option value="single">1 Ècran Full HD - 8€</option>
            <option value="three">3 Écran 4K - 20€</option>
            <option value="full">10 Écran 4K - 50€</option>
        </select>
        <input type="checkbox" name="newsletter">Newsletter<br/>
        <input type="checkbox" name="subscribe[nl2]">Newsletter 2
    </form>
    <textarea rows="20" cols="50" ><?php var_dump($_POST); ?></textarea>
</body>
</html>