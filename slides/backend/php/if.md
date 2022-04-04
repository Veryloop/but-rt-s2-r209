# PHP
Condition : if, if/else, else if

Les conditions permettent d'exécuter du code en fonction d'une ou plusieurs comparaisons.
```php
<?php
if ($a > $b) {
    echo "a est plus grand que b";
} elseif ($a == $b) {
    echo "a est égal à b";
} else {
    echo "a est plus petit que b";
}
?>
```

```php
<?php if (condition): ?>
Code HTML .....
<?php else: ?>
Un autre code HTML .....
<?php endif ?>
```