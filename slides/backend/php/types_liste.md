# PHP
Types de variables

<div grid="~ cols-2 gap-2" m="-t-2">
    <div>
        <ul>
            <li>Booléen</li>
            <li>Entier</li>
            <li>Flottant</li>
            <li>Chaîne de caractères</li>
        </ul>
    </div>
    <div>
         <ul>
            <li>Tableaux</li>
            <li>Objets</li>
            <li>Null</li>
        </ul>
    </div>
</div>

Pas de déclaration explicite du type d'une variable, il est déterminé par le contexte d'utilisation.


<div class="space"></div>


```php
$var_int = 10;
$nombre_a_virgule = 3.14;
$tab = ['3', 20, "RT"];

$rien = null;
$sql_connection = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
```


<style>
.space{
  height: 20px;
}
</style>