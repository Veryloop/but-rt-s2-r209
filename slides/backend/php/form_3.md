# PHP
Traiter les formulaires HTML

Select et checkbox

<div grid="~ cols-2 gap-2" m="-t-2" style="margin-top: 20px"><div>

```html
<form action="/abonnement.php" method="post">
  <select name="abonnement">
    <option value="single">1 Ècran Full HD - 8€</option>
    <option value="three">3 Écrans 4K - 20€</option>
    <option value="full">10 Écrans 4K - 50€</option>
  </select>
</form>
```

</div><div>

```php
$_POST["abonnement"]; //single / three / full
```

</div></div>

<div grid="~ cols-2 gap-2" m="-t-2" style="margin-top: 20px"><div>

```html
<form action="/abonnement.php" method="post">
    <input type="checkbox" name="newsletter">Newsletter
    <input type="checkbox" name="sub[nl2]">Newsletter 2
</form>
```

</div><div>

```php
$_POST["newsletter"]; //'on' ou Undefined
$_POST["sub"]; //tableau ou Undefined
$_POST["sub"]["nl2"]; //'on' ou Undefined
```

</div></div>