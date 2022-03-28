# PHP
Fonctions

Elles permettent de simplifier l'écriture et la lecture du code. Les fonctions permettent de factoriser le code. Elles prennent des paramètres en entrée et produisent un résultat en sortie.

```php
function carre($param) {
    $carre = $param*$param;
    return $carre;
}
```

Pour appeler une fonction, il suffit d'invoquer son nom lors d'une affectation ou d'un affichage en lui transmettant les paramètres entre parenthèses.

```php
$resultat = carre(3);
echo($resultat); //9
```