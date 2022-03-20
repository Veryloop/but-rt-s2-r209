# PHP
Type de variable : Chaîne de caractères

- Pas de limite de taille
- Le caractère " . " permet la concaténation
- Différence entre " et '

```php
php > $test = "Hello";
php > echo $test . " world";
Hello world
php >
php > echo '$test';
$test
php > echo "$test";
Hello
php > echo "$test world";
Hello world
php >
```

Les variables sont remplacées par leurs valeurs quand on utilise "