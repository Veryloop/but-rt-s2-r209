# PHP
Traiter les formulaires HTML


Formulaire HTML

<div grid="~ cols-2 gap-2" m="-t-2" style="margin-top: 20px">
  <div>

```html
<form action="/login.php" method="post">
    <input type="text" name="username">
    <input type="password" name="password">
    <button type="submit">Connexion</button>
</form>
```

</div><div>

<img src="/images/form.png"  width="150">

</div></div>

Les formulaires peuvent être envoyés avec la méthode POST ou GET. En utilisant GET les valeurs envoyées au serveur sont transmises dans l'URL.

PHP nous met à disposition deux variables spéciales contenant les valeurs d'un formulaire transmis par l'utilisateur.
```php
$_GET;
$_POST;
$_POST['username'];
```