# PHP
Type de variable : Tableau

Un tableau PHP est un type qui associe des valeurs à des clés.

Il prend un nombre illimité de paramètres, chacun séparé par une virgule, sous la forme d'une paire key => value. Si les clés ne sont pas définies, une suite partant de 0 est affectée.


<div grid="~ cols-2 gap-2" m="-t-2"><div>

```php
$array = array(
    "foo" => "bar",
    "bar" => "foo",
);


$variable = 30;
$array = ["hello", $variable 3, "45"];
```

</div><div>

```bash
array(2) {
  ["foo"]=>
  string(3) "bar"
  ["bar"]=>
  string(3) "foo"
}
array(6) {
  [0]=>
  string(5) "hello"
  [1]=>
  int(30)
  [2]=>
  int(3)
  [3]=>
  string(2) "45"
}
```

</div></div>