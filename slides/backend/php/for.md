# PHP
Boucles : for, foreach

Générer une boucle
```php
<?php
for ($i = 1; $i <= 10; $i++) {
    echo $i;
}
for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i;
}
```
Parcourir un tableau
```php
$arr = array(1, 2, 3, 4);
foreach ($arr as $key => $value) {
    print("{$key} => {$value}");
}
```